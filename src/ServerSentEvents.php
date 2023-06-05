<?php

namespace GregHunt\ServerSentEvents;

use GregHunt\ServerSentEvents\Event;
use Iterator, JsonSerializable;

class ServerSentEvents implements Iterator, JsonSerializable
{
    const HEADERS = [
        'Content-Type' => 'text/event-stream',
        'Cache-Control' => 'no-store',
        'Connection' => 'keep-alive',
    ];

    private array $events = [];
    private int $index = 0;

    public function __toString(): string
    {
        return implode(self::END_EVENT, array_map('strval', $this->events));
    }

    public function __serialize(): array
    {
        return array_map(function ($event) {
            return serialize($event);
        }, $this->events);
    }

    public function __unserialize(array $data): void
    {
        $this->events = array_map(function ($eventData) {
            return unserialize($eventData);
        }, $data);

        $this->index = 0;
    }


    public function addEvent(Event $event)
    {
        $this->events[] = $event;
    }

    public function current(): Event
    {
        return $this->events[$this->index];
    }

    public function key(): int
    {
        return $this->index;
    }

    public function next(): void
    {
        ++$this->index;
    }

    public function valid(): bool
    {
        return isset($this->events[$this->index]);
    }

    public function rewind(): void
    {
        $this->index = 0;
    }

    public function jsonSerialize(): array
    {
        return array_map(function ($event) {
            return $event->jsonSerialize();
        }, $this->events);
    }

    public static function fromString(string $string): self
    {
        $sse = new self;
        $rawEvents = self::parseString($string);
        foreach ($rawEvents as $rawEvent) {
            $event = Event::fromString($rawEvent);
            if ($event) {
                $sse->addEvent($event);
            }
        }
        return $sse;
    }

    public static function parseString(string $string): array
    {
        return explode(self::END_EVENT, $string);
    }
}
