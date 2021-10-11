<?php

/* Fighter class definition */
class Fighter 
{

    private const MAX_LIFE = 100;
    
    private string $name;
    private int $strength;
    private int $dexterity;
    private int $life = self::MAX_LIFE; 

    public function __construct(string $name, int $strength, int $dexterity)
    {  

        $this->name = $name;
        $this->strength= $strength;
        $this->dexterity= $dexterity;
        

    }    

    public function fight(Fighter $enemy)
    { 
    $damage= rand( 1 , $this->strength);
    $damage= max($damage - $enemy->dexterity, 0);
    $enemy->setLife($enemy->life - $damage);
    }

    public function setLife(int $life): Fighter
    { 
      $this->life = max($life, 0);
      
      return $this;
    }

    public function isAlive():bool 
    {
        return $this-> life > 0;
    }
}