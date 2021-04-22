<?php
class Employee
{
    private $lname;
    public function __construct($lname,$name,$dob,$adr,$rank)
    {
        $this->lname = $lname;
        $this->name = $name;
        $this->dob = $dob;
        $this->adr = $adr;
        $this->rank = $rank;
    }       

        /**
         * Get the value of lname
         */ 
        public function getLname()
        {
                return $this->lname;
        }

        /**
         * Set the value of lname
         *
         * @return  self
         */ 
        public function setLname($lname)
        {
                $this->lname = $lname;

                return $this;
        }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of dob
         */ 
        public function getDob()
        {
                return $this->dob;
        }

        /**
         * Set the value of dob
         *
         * @return  self
         */ 
        public function setDob($dob)
        {
                $this->dob = $dob;

                return $this;
        }

        /**
         * Get the value of adr
         */ 
        public function getAdr()
        {
                return $this->adr;
        }

        /**
         * Set the value of adr
         *
         * @return  self
         */ 
        public function setAdr($adr)
        {
                $this->adr = $adr;

                return $this;
        }

        /**
         * Get the value of rank
         */ 
        public function getRank()
        {
                return $this->rank;
        }

        /**
         * Set the value of rank
         *
         * @return  self
         */ 
        public function setRank($rank)
        {
                $this->rank = $rank;

                return $this;
        }
}
