<?php

Class Character
{
    private $_id;
            $_name;
            $_damage;

            const SELF_ATTACK = "pas taper tête à toi!";
            const KILLED = "est mort!";
            const ATTACKED = "est attaqué. Il prend 5 points de dégats";
    
    
    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

        
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);
        
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }

    public function attack(Personnage $char)
    {
        if($char->id() == $this->_id)
        {
            return self::SELF_ATTACK;
        }

        return $perso->recieveDamage();
    }

    public function recieveDamage()
    {
       $this->_damage += 5;

       if($this->_damage >= 100)
       {
           return self::KILLED;
       }

       return self::ATTACK;
    }
    

    // GETTERS

    public function getId()
    {
        return $this->_id;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getDamage()
    {
        return $this->_damage;
    }

    // SETTERS  

    public function setId($id)
    {
        $id = (int) $id;
        
        if($id>0)
        {
            $this->_id = $id;
        }
    }

    public function setName($name)
    {
        if (is_string($name))
        {
            // si le nom du perso est bien une string alors on enregistre ce nom dans la propriété de l'objet
            $this->_name = $name;
        }
    }

    public function setDamage($damage)
    {
        $damage = (int) $damage;

        if($damage >= 0 && $damage<=100)
        {
            $this->$_damage = $damage;
        }
    }


}