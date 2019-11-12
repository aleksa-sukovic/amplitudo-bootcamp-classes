<?php

namespace Amplitudo;

require_once './Vozilo.php';

class Auto extends Vozilo
{
    private $boja;

    public function __construct($naziv, $godiste, $boja)
    {
        parent::__construct($naziv, $godiste);

        $this->boja = $boja;
    }

    public function napraviPuniNaziv()
    {
        return urlencode($this->naziv . '-' . $this->godiste . '-' . $this->boja);
    }

    public function idiNazad($daljina)
    {
        // TODO: Implement idiNazad() method.
    }
}












