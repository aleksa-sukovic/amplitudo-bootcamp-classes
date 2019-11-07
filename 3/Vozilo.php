<?php

namespace Amplitudo;

class Vozilo
{
    private $naziv;
    public $godiste;

    public function __construct($naziv, $godiste)
    {
        $this->naziv = $naziv;
        $this->godiste = $godiste;
    }

    public function sayHello()
    {
        echo "<h1>Zdravo, ja sam vozilo {$this->naziv} 
                 i ja sam godiste {$this->godiste}.</h1>";
    }

    public function getNaziv()
    {
        return $this->naziv;
    }

    public function setNaziv($naziv)
    {
        $this->naziv = $naziv;
    }
}
