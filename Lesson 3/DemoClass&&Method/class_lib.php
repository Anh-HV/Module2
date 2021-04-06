<?php
class Person { 
    var $name; 

    public $height; 
    protected $socialInsurance; 
    private $pinnNumber;

    function __construct($personsName){  
        $this->name = $personsName; 
    }      

    public function getPinnNumber(){
        return $this->pinnNumber; 
    }      
}  
class Employee extends Person{
}
