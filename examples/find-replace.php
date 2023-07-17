<?php

require __DIR__ . '/../vendor/autoload.php';

use GregHunt\ServerSentEvents\ServerSentEvents;

header("Content-Type: text/plain");


$string = <<<EOT






id: ea170e2cafb1337755c8b3d5ae4437f4
event: find
data: 

id: ea170e2cafb1337755c8b3d5ae4437f4
event: find
data: 

id: 82763e9cef4dd6df2e35aab28488689d
event: find
data: ```

id: 63f6983a4cec2eb08c5d41d02f0a987a
event: find
data: ```php

id: 63f6983a4cec2eb08c5d41d02f0a987a
event: find
data: ```php

id: bbf5ff6f7cacc924a0a2ff456c91a59b
event: find
data: ```php
data: return

id: f34db24377c7f4d0a1954b2a83fabfae
event: find
data: ```php
data: return '

id: f7c20650b63572affded5de483b560ed
event: find
data: ```php
data: return 'Hello

id: 9b152e6d9a8bbc6b3141f4da83258d34
event: find
data: ```php
data: return 'Hello World

id: a972e6a400312f53b69cc6e7ca5c4de9
event: find
data: ```php
data: return 'Hello World';

id: 24a96f46c2941bee09f9ddbe35d3d394
event: find
data: ```php
data: return 'Hello World';
data: ``

id: 1a40261ba4121c42a41ac8fe0200093a
event: find
data: ```php
data: return 'Hello World';
data: ```
data: 

id: cce6e69fc14c027fa6cfbda2b4854132
event: find
data: ```php
data: return 'Hello World';
data: ```
data: 
data: 

id: cce6e69fc14c027fa6cfbda2b4854132
event: find
data: ```php
data: return 'Hello World';
data: ```
data: 
data: 

id: 9dde360102c103867bd2f45872f1129c
event: replace
data: 

id: 9dde360102c103867bd2f45872f1129c
event: replace
data: 

id: ca893599c3ae047f2691c23e4ed1ba0b
event: replace
data: ```

id: bb008b76210a188b8e3ae9a2068a13eb
event: replace
data: ```php

id: bb008b76210a188b8e3ae9a2068a13eb
event: replace
data: ```php

id: 6dfd74808342a7f43e3aacd77b8f25a5
event: replace
data: ```php
data: return

id: 4afe5628c63b16ba4ff8d552f9ea1979
event: replace
data: ```php
data: return '

id: 34660da7e2e03b348d710c692d7128d0
event: replace
data: ```php
data: return 'Hello

id: 3573adb6943281c8b1319aa80a511d39
event: replace
data: ```php
data: return 'Hello Mom

id: d4d404023ad52aae3caec88ae3cd34d7
event: replace
data: ```php
data: return 'Hello Mom';

id: b8a5dc2bd3f7c55eec642c12594c6034
event: replace
data: ```php
data: return 'Hello Mom';
data: ``

id: 4109d3fbc525aeb66be800339806f574
event: replace
data: ```php
data: return 'Hello Mom';
data: ```
data: 

id: 0f4e6bdc427195dfd64b07525d256138
event: replace
data: ```php
data: return 'Hello Mom';
data: ```
data: 
data: 

id: 0f4e6bdc427195dfd64b07525d256138
event: replace
data: ```php
data: return 'Hello Mom';
data: ```
data: 
data: 

id: 78e731027d8fd50ed642340b7c9a63b3
event: message
data: 

id: 78e731027d8fd50ed642340b7c9a63b3
event: message
data: 

id: 820281b448bb48d36f8bf17937dd08fc
event: message
data: Changed

id: 2fffc08fe815523575dd21da91c6ec73
event: message
data: Changed the

id: 588806c61a1dd79ca46fc5805779f8ee
event: message
data: Changed the return

id: d8e1257b90a3a92dbc718322cf8c97d7
event: message
data: Changed the return string

id: 873ffcb0c669e985437711b03c957ccb
event: message
data: Changed the return string from

id: 2d21a6ca8ad5f9283694980b996de4a1
event: message
data: Changed the return string from "

id: bd9d6fa326931c40c9f95867f4710e15
event: message
data: Changed the return string from "Hello

id: 1877df054dc87244c0ff68ea1cfb723d
event: message
data: Changed the return string from "Hello World

id: 42bdcfa2cab6f2fa101ec7a268fb775a
event: message
data: Changed the return string from "Hello World"

id: f46d25f6c17f842306fc1b7a27074afd
event: message
data: Changed the return string from "Hello World" to

id: 31f84914ae18bd7361b5fd9bacaead63
event: message
data: Changed the return string from "Hello World" to "

id: 883495b61a284ad05a90e02495973b2b
event: message
data: Changed the return string from "Hello World" to "Hello

id: dbeae549957e7de87a9d576fa7d09706
event: message
data: Changed the return string from "Hello World" to "Hello Mom

id: e16866c700cbd4974313656971c4f29f
event: message
data: Changed the return string from "Hello World" to "Hello Mom".

event: close
data: finished

id: e16866c700cbd4974313656971c4f29f
event: message
data: Changed the return string from "Hello World" to "Hello Mom".

event: close
data: finished





EOT;

$sse = new ServerSentEvents;
foreach (explode("\n", $string) as $line) {
    $sse->digest($line . "\n");
}

echo "GET LAST EVENT \n";
var_dump($sse->getLastEvent('files'));
echo "\n";

// echo "All EVENT \n";
// print_r($sse);
// echo "\n";
