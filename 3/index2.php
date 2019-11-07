<?php

require_once './Auto.php';
require_once './Motor.php';

use Amplitudo\Auto;
use Amplitudo\Motor;
use Amplitudo\Vozilo;

$auto1 = new Auto('Golf', 2010, 'crna');
$auto1->sayHello();

$motor1 = new Motor('Honda', 2015, 3000);
$motor1->sayHello();

function predstaviVozilo(Vozilo $vozilo)
{
    $vozilo->sayHello();
}

predstaviVozilo($auto1);
predstaviVozilo($motor1);













