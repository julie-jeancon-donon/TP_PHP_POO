<?php

class CharacterManager
{
    private $_db;

        public function __construct(PDO $db)
        {
            $this->setDb($db);
        }

        
        
        /**
         * Set the value of _db
         *
         * @return  self
         */ 
        public function setDb(PDO $_db)
        {
            $this->_db = $_db;
            
            return $this;
        }
        
        
        /**
         * Get the value of _db
         */ 
        public function getDb()
        {
            return $this->_db;
        }
        
        public function add(Character $char)
        {
            $query = $this->getDb()->prepare('INSERT INTO perso(name) VALUES(:name)');
            $query->bindValue(':name', $char->getName());
            $query->execute();
        
        }

        public function update(Character $char)
        {

        }

        public function delete(Character $char)
        {

        }

        public function select(Character $char)
        {

        }

        public function exists(Character $char)
        {

        }
    
}