<?php

require_once 'Singleton.php';

use Amplitudo\Patterns\Singleton;

//$instance = new Singleton(); // private constructor
$instance1 = Singleton::getInstance();
$instance2 = Singleton::getInstance();
$instance3 = Singleton::getInstance();

echo '<h1>' . $instance1->getNumber() . '</h1>';
echo '<h1>' . $instance2->getNumber() . '</h1>';
echo '<h1>' . $instance3->getNumber() . '</h1>';













