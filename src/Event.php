<?php

namespace GregHunt\ServerSentEvents;

use JsonSerializable;

class Event implements JsonSerializable
{
    const END_MESSAGE  = "\n";
    const FIELDS = ['event', 'data', 'retry', 'id'];

    public function __construct(
        protected string $field,
        protected array|string $data
    ) {
    }

    public function __get(string $prop)
    {
        if (!method_exists($this, $prop)) {
            return $this->data[$prop];
        }
    }

    public function __serialize(): array
    {
        return [
            'field' => $this->field,
            'data' => $this->data,
        ];
    }

    public function __unserialize(array $data): void
    {
        $this->field = $data['field'];
        $this->data = $data['data'];
    }

    public function __toString()
    {
        $dataString = is_array($this->data) ? 'data: ' . json_encode($this->data) :
            implode(self::END_MESSAGE, array_map(fn ($i) => "data: $i", explode(self::END_MESSAGE, $this->data)));
        return <<<EOT
        event: {$this->field}
        $dataString
        EOT;
    }

    public function field()
    {
        return $this->field;
    }

    public static function fromString(string $string): self
    {
        $event = self::parseEventString($string);
        $field = $event[array_key_first($event)];
        $data = json_decode($event['data'], true) ?? $event['data'];
        return new self($field, $data);
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
        return [
            'field' => $this->field,
            'data' => $this->data,
        ];
    }
}
