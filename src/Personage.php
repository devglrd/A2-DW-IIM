<?php

namespace App;

class Personage
{
    private $name;
    private $pas;
    
    public function __construct($name)
    {
        $this->setName($name);
    }
    
    public function getName()
    {
        return $this->name;
        
    }
    
    public function setName($string)
    {
        $this->name = $string;
    }
    
    public function walk($int)
    {
        $this->pas += $int;
    }
    
    public function getWalk()
    {
        return $this->pas;
    }
}