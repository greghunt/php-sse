<?php

require __DIR__ . '/../vendor/autoload.php';

use GregHunt\ServerSentEvents\ServerSentEvents;
use GregHunt\ServerSentEvents\Event;

header("Content-Type: text/plain");
$string = <<<EOT
event: create
data: function()

event: create
data: function() {
data:   echo

event: create
data: function() {
data:   echo "Hello World";

event: create
data: function() {
data:   echo "Hello World";
data: }

event: message
data: Created

event: message
data: Created a hello world function
EOT;

$sse = new ServerSentEvents;

foreach (explode("\n", $string) as $line) {
    $sse->digest($line . "\n");
}

print_r($sse->getLastEvent('message'));
print_r($sse->getLastEvent('create'));

echo json_encode($sse, JSON_PRETTY_PRINT);

echo $sse;
