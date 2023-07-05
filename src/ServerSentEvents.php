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

    protected string $stream = '';

    private array $events = [];
    private int $index = 0;

    public function digest(string $str)
    {
        $this->stream .= $str;
        $this->events = self::eventsFromString($this->stream);
        $this->setIndex();
    }

    public function __toString(): string
    {
        return implode('', array_map('strval', $this->events));
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

    public function addEvent(Event $event)
    {
        $this->events[] = $event;
        $this->setIndex();
    }

    public function setEvents(array $events)
    {
        $this->events = $events;
        $this->setIndex();
    }

    private function setIndex()
    {
        $this->index = count($this->events) - 1;
    }

    public function getLastEvent(?string $name = null): Event
    {
        print_r($this->events);
        die();
        $events = array_reverse($this->events);
        if ($name) {
            foreach ($events as $event) {
                if ($event->event === $name) {
                    return $event;
                }
            }
        }

        return $events[0];
    }

    public function getById(string $id): Event|null
    {
        $events = array_filter($this->events, function ($event) use ($id) {
            return $event->id === $id;
        });

        return isset($events[0]) ? $events[0] : null;
    }

    /**
     * Sends the last current event to the buffer
     */
    public function send()
    {
        $event = $this->current();
        $event->send();
    }

    public static function eventsFromString(string $string): array
    {
        $events = [];
        $rawEvents = self::parseString($string);
        foreach ($rawEvents as $rawEvent) {
            $event = Event::fromString($rawEvent);
            if ($event && !$event->empty()) {
                $events[] = $event;
            }
        }
        return $events;
    }

    public static function fromString(string $string): self
    {
        $sse = new self;
        $sse->setEvents(self::eventsFromString($string));
        return $sse;
    }

    public static function parseString(string $string): array
    {
        return explode(Event::END_EVENT, $string);
    }
}
