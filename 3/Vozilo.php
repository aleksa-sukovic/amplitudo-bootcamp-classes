<?php

namespace Amplitudo;

class Vozilo
{
    protected $naziv;
    public $godiste;

    public function __construct($naziv, $godiste)
    {
        $this->naziv = $naziv;
        $this->godiste = $godiste;
    }

    public function sayHello()
    {
        echo "<h1>" . $this->__toString() . "</h1>";
    }

    public function __toString()
    {
        return "Zdravo, ja sam vozilo {$this->naziv} 
                 i ja sam godiste {$this->godiste}.";
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
