<?php

require __DIR__ . '/../vendor/autoload.php';

use GregHunt\ServerSentEvents\ServerSentEvents;
use GregHunt\ServerSentEvents\Event;

header("Content-Type: text/plain");
$string = <<<EOT
event: message
data: {"message":"Velit libero","reply":"inprogress"}

event: message
data: some message data
data: appended data on line 2

event: userconnected
data: {"message":"user has been connected"}
EOT;

$events = ServerSentEvents::fromString($string);

echo $events;

echo ServerSentEvents::END_EVENT;

$event = new Event;
$event->event('message')->data(['message' => 'Velit libero', 'reply' => 'inprogress']);

echo $event;
