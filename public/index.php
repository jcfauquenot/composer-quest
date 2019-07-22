<?php 

require __DIR__ . '/../vendor/autoload.php';

use App\wcs\Hello;
use HelloWorld\SayHello;


$test = new Hello();
echo $test->talk("Bonjour-premier_objet_class_Hello")."<br \>";

$test2 = new SayHello();
echo $test2->world();