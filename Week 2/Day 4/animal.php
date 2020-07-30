<?php 


class Animal {

    protected $legs = 2;
    protected $cold_blooded = 'false';

    function __construct($name)
    {
        $this->name = $name;
    }

    function setLegs($legs){
        $this->legs = $legs;
    }

    function setCold($cold){
        $this->cold_blooded = $cold;
    }

    function getName(){
        echo $this->name ."\n";
    }

    function getLegs(){
        echo $this->legs ."\n";
    }

    function getCold(){
        echo $this->cold_blooded ."\n";
    }

}