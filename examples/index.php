<?php

require __DIR__ . '/../vendor/autoload.php';

use GregHunt\ServerSentEvents\ServerSentEvents;

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

$string = <<<EOT
event: create
data: 

event: create
data: function

event: create
data: function c

event: create
data: function cwp

event: create
data: function cwpai

event: create
data: function cwpai_enqueue

event: create
data: function cwpai_enqueue_header

event: create
data: function cwpai_enqueue_header_styles

event: create
data: function cwpai_enqueue_header_styles()

event: create
data: function cwpai_enqueue_header_styles() {
data: 

event: create
data: function cwpai_enqueue_header_styles() {
data:    

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('c

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwp

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles',

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri()

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() .

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css',

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(),

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data: 

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:    

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('c

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwp

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai_custom

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai_custom_header

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai_custom_header_styles

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai_custom_header_styles');
data: 

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai_custom_header_styles');
data: }
data: 

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai_custom_header_styles');
data: }
data: add

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai_custom_header_styles');
data: }
data: add_action

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai_custom_header_styles');
data: }
data: add_action('

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai_custom_header_styles');
data: }
data: add_action('wp

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai_custom_header_styles');
data: }
data: add_action('wp_enqueue

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai_custom_header_styles');
data: }
data: add_action('wp_enqueue_scripts

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai_custom_header_styles');
data: }
data: add_action('wp_enqueue_scripts',

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai_custom_header_styles');
data: }
data: add_action('wp_enqueue_scripts', '

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai_custom_header_styles');
data: }
data: add_action('wp_enqueue_scripts', 'c

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai_custom_header_styles');
data: }
data: add_action('wp_enqueue_scripts', 'cwp

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai_custom_header_styles');
data: }
data: add_action('wp_enqueue_scripts', 'cwpai

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai_custom_header_styles');
data: }
data: add_action('wp_enqueue_scripts', 'cwpai_enqueue

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai_custom_header_styles');
data: }
data: add_action('wp_enqueue_scripts', 'cwpai_enqueue_header

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai_custom_header_styles');
data: }
data: add_action('wp_enqueue_scripts', 'cwpai_enqueue_header_styles

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai_custom_header_styles');
data: }
data: add_action('wp_enqueue_scripts', 'cwpai_enqueue_header_styles');
data: 
data: 

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai_custom_header_styles');
data: }
data: add_action('wp_enqueue_scripts', 'cwpai_enqueue_header_styles');
data: 
data: --

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai_custom_header_styles');
data: }
data: add_action('wp_enqueue_scripts', 'cwpai_enqueue_header_styles');
data: 
data: --files

event: create
data: function cwpai_enqueue_header_styles() {
data:     wp_register_style('cwpai_custom_header_styles', get_template_directory_uri() . '/header-styles.css', array(), '1.0');
data:     wp_enqueue_style('cwpai_custom_header_styles');
data: }
data: add_action('wp_enqueue_scripts', 'cwpai_enqueue_header_styles');
data: 
data: 
data: 

event: files
data: 

event: files
data: header

event: files
data: header-

event: files
data: header-styles

event: files
data: header-styles.css

event: files
data: header-styles.css
data: 
data: 

event: files
data: header-styles.css
data: 
data: /*

event: files
data: header-styles.css
data: 
data: /* Add

event: files
data: header-styles.css
data: 
data: /* Add your

event: files
data: header-styles.css
data: 
data: /* Add your header

event: files
data: header-styles.css
data: 
data: /* Add your header styles

event: files
data: header-styles.css
data: 
data: /* Add your header styles in

event: files
data: header-styles.css
data: 
data: /* Add your header styles in this

event: files
data: header-styles.css
data: 
data: /* Add your header styles in this file

event: files
data: header-styles.css
data: 
data: /* Add your header styles in this file */
data: 
data: 

event: files
data: header-styles.css
data: 
data: /* Add your header styles in this file */
data: 
data: --

event: files
data: header-styles.css
data: 
data: /* Add your header styles in this file */
data: 
data: --message

event: files
data: header-styles.css
data: 
data: /* Add your header styles in this file */
data: 
data: 
data: 

event: message
data: 
id: 1

event: message
data: Header
id: 2

event: message
data: Header styling
id: 3

event: message
data: Header styling will
id: 4

event: message
data: Header styling will be
id: 5

event: message
data: Header styling will be applied
id: e03c53dd68454be45f0e5501d6b20b23

event: message
data: Header styling will be applied from
id: e03c53dd68454be45f0e5501d6b20b23

event: message
data: Header styling will be applied from the
id: 8

event: message
data: Header styling will be applied from the header
id: 9

event: message
data: Header styling will be applied from the header-
id: 11

event: message
data: Header styling will be applied from the header-styles
id: 12

id: 13
event: message
data: Header styling will be applied from the header-styles.css

id: 14
event: message
data: First Header styling will be applied from the header-styles.css file

id: 14
event: message
data: Header styling will be applied from the header-styles.css file

id: 14
event: message
data: Last Header styling will be applied from the header-styles.css file

EOT;

echo "EMPTY \n";
$emptyEvent = <<<EOT
EOT;
$sse = new ServerSentEvents;
$sse->send();
print_r($sse->getLastEvent());

$sse = new ServerSentEvents;

foreach (explode("\n", $string) as $line) {
    $sse->digest($line . "\n");
}

echo "\n";
echo "SEND LAST EVENT \n";
$sse->send();
echo "\n";

echo "GET LAST EVENT \n";
print_r($sse->getLastEvent());
echo "\n";

echo "GET EVENT BY ID \n";
print_r($sse->getById("e03c53dd68454be45f0e5501d6b20b23"));
echo "\n";

echo "GET LAST CREATE EVENT \n";
print_r($sse->getLastEvent('create'));
echo "\n";

echo "GET MESSAGE DATA \n";
print_r($sse->getLastEvent('message')->data);

echo "\n";
echo "\n";

echo "GET File DATA \n";
print_r($sse->getLastEvent('files')->data);

echo "\n";
echo "\n";

echo json_encode($sse, JSON_PRETTY_PRINT);

echo "\n";
echo "\n";

echo $sse;
