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

    public function __get($propriete){
        switch($propriete){
            case "name" : return $this->name;
                break;
            case "strength" : return $this->strength;
                break;
            case "dexterity" : return $this->dexterity;
                break;
            case "life" : return $this->life;
                break;
            default: throw new Exception("Propriété ' . $propriete . ' inconnue");
        }
    }

    public function __set($propriete,$value){
        switch($propriete){
            case "name" : return $this->name = $value;
                break;
            case "strength" : return $this->strength= $value;
                break;
            case "dexterity" : return $this->dexterity= $value;
                break;
            case "life" : return $this->life= $value;
                break;
            default: throw new Exception("Propriété '$propriete' inconnue");
        }
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