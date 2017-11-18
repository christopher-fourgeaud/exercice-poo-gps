<?php
class Troncon
{
    //===========================================Atributs
    private $debutIntersection;
    private $distance;
    private $finIntersection;
    private $troncon = [];

    //===========================================Constructeur
    public function __construct($debutIntersection, $distance, $finIntersection)
    {
        $this->setDebutIntersection($debutIntersection);
        $this->setDistance($distance);
        $this->setFinIntersection($finIntersection);
    }
    public function ajouterTroncon($troncon)
    {
        array_push($this->troncon, $troncon);
    }
    //===========================================Set / Get
    public function setDebutIntersection($debutIntersection)
    {
        $this->debutIntersection = $debutIntersection;
    }
    public function getDebutIntersection()
    {
        return $this->debutIntersection;
    }
    public function setDistance($distance)
    {
        $this->distance = $distance;
    }
    public function getDistance()
    {
        return $this->distance;
    }
    public function setFinIntersection($finIntersection)
    {
        $this->finIntersection = $finIntersection;
    }
    public function getFinIntersection()
    {
        return $this->finIntersection;
    }
    public function getTroncon()
    {
        return $this->troncon;
    }

}