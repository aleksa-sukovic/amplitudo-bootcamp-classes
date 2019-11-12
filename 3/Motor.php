<?php

namespace Amplitudo;

require_once './Vozilo.php';

class Motor extends Vozilo
{
    private $kubikaza;

    public function __construct($naziv, $godiste, $kubikaza)
    {
        parent::__construct($naziv, $godiste);

        $this->kubikaza = $kubikaza;
    }

    public function __toString()
    {
        return parent::__toString() . " i moja kubikaza je {$this->kubikaza}";
    }

    public function idiNaprijed($daljina)
    {
        $this->x += $daljina * 0.1 * $this->kubikaza;
    }

    public function napraviPuniNaziv()
    {
        return urlencode($this->naziv . '-' . $this->godiste . '-' . $this->kubikaza);
    }
}












