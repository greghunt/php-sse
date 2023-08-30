<?php

require __DIR__ . '/../vendor/autoload.php';

use GregHunt\ServerSentEvents\Event;

header("Content-Type: text/plain");

$event = (new Event)->event('open')->data('opened')->id(1234);

$serEvent = serialize($event);

print_r(unserialize($serEvent));
