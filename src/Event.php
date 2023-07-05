<?php

namespace GregHunt\ServerSentEvents;

use JsonSerializable;

class Event implements JsonSerializable
{
    const END_MESSAGE  = "\n";
    const END_EVENT = "\n\n";
    const FIELDS = ['id', 'event', 'retry', 'data'];

    protected string $event;
    protected mixed $data;
    protected int $retry;
    protected string $id;

    public function __construct(array $data = [])
    {
        foreach ($data as $key => $val) {
            if (in_array($key, self::FIELDS)) {
                $this->{$key} = $val;
            }
        }
    }

    public function __get(string $prop)
    {
        if (isset($this->{$prop})) {
            return $this->{$prop};
        }

        if (isset($this->data[$prop])) {
            return $this->data[$prop];
        }

        return $this->data ?? '';
    }

    public function toArray(): array
    {
        $arr = [];
        foreach (self::FIELDS as $field) {
            if (isset($this->{$field})) {
                $arr[$field] = $this->{$field};
            }
        }
        return $arr;
    }

    public function __serialize(): array
    {
        return $this->toArray();
    }

    public function __unserialize(array $data): void
    {
        $this->event = $data['event'];
        $this->id = $data['id'];
        $this->retry = $data['retry'];
        $this->data = $data['data'];
    }

    public function __toString()
    {
        $lines = [];
        foreach ($this->toArray() as $field => $val) {
            if ($field === 'data') {
                foreach ($this->getData() as $data) {
                    $lines[] = "data: $data";
                }
            } else if ($val = $this->{$field}) {
                $lines[] = "$field: $val";
            }
        }
        return implode(self::END_MESSAGE, $lines) . self::END_EVENT;
    }

    public function empty()
    {
        return empty($this->event);
    }

    public function event(string $event): self
    {
        $this->event = $event;
        return $this;
    }

    public function data(mixed $data): self
    {
        $this->data = $data;
        return $this;
    }

    public function id(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function retry(int $retry): self
    {
        $this->retry = $retry;
        return $this;
    }

    public function getData(): array
    {
        if (is_array($this->data)) {
            return [json_encode($this->data)];
        }

        return explode(self::END_MESSAGE, $this->data);
    }

    public function field()
    {
        return $this->field;
    }

    public function send()
    {
        echo $this;
        ob_flush();
        flush();
    }

    public static function fromString(string $string): self
    {
        $event = self::parseEventString($string);
        if (isset($event['data']))
            $event['data'] = json_decode($event['data'], true) ?? $event['data'];

        return new self($event);
    }

    public static function parseEventString(string $string): array
    {
        $lines = explode(self::END_MESSAGE, $string);
        $event = [];
        $data = '';

        foreach ($lines as $line) {
            // Exit after event
            if (empty($line)) {
                break;
            }

            // Ignore comments
            if (strpos($line, ':') === 0) {
                continue;
            }

            // Split line into field and value
            $parts = explode(':', $line, 2);
            $field = strtolower($parts[0]);
            $value = count($parts) > 1 ? ltrim($parts[1]) : '';

            // Append data field value to previous data field values
            if ($field === 'data') {
                $data .= $value . self::END_MESSAGE;
            } else if ($field !== '') {
                $event[$field] = $value;
            }
        }

        // Remove trailing newline from data field
        if ($data !== '') {
            $event['data'] = substr($data, 0, -1);
        }

        return $event;
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
