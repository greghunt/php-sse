<?php

require __DIR__ . '/../vendor/autoload.php';

use GregHunt\ServerSentEvents\ServerSentEvents;

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
