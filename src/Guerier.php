<?php

namespace App;

class Guerier extends Personage
{
    
    private $weapons;
    
    public function __construct($name, $weapons)
    {
        parent::__construct($name);
        $this->setWeapons($weapons);
        
    }
    
    /**
     * @return mixed
     */
    public function getWeapons()
    {
        return $this->weapons;
    }
    
    /**
     * @param mixed $weapons
     */
    public function setWeapons($weapons)
    {
        $this->weapons = $weapons;
    }
    
}