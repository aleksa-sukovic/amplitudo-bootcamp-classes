<?php

include 'Vozilo.php';
include 'Motor.php';
include 'Auto.php';

use Amplitudo\Vozilo;
use Amplitudo\Auto;
use Amplitudo\Motor;

// $vozilo = new Vozilo('', 2010); // Nije dozvoljeno
$auto = new Auto('Golf', 2010, 'boja');
$motor = new Motor('Honda', 2012, 'crvena');

function stampajPuniNaziv(Vozilo $vozilo)
{
    echo '<h1>' . $vozilo->napraviPuniNaziv() . '</h1>';
}

stampajPuniNaziv($auto);
stampajPuniNaziv($motor);

$auto->napraviZvuk();
$auto->napraviJakiZvuk();









