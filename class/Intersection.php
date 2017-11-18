<?php
class Intersection
{
    //===========================================Atributs
    private $identifiant;
    private $nbBranches;
    //===========================================Constructeur
    public function __construct($identifiant,$nbBranches)
    {
        $this->setIdentifiant($identifiant);
        $this->setNbBranches($nbBranches);
    }
    //===========================================Set / Get
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;
    }
    public function getIdentifiant()
    {
        return $this->identifiant;
    }
    public function setNbBranches($nbBranches)
    {
        $this->nbBranches = $nbBranches;
    }
    public function getNbBranches()
    {
        return $this->nbBranches;
    }
}