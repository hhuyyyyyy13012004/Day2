<?php
class Pet{
    public $name;
    function __construct($name){
        $this->name = $name;
    }
    function eat(){
        echo "$this->name is eating.";
    }
    function play(){
        echo "$this->name is playing.";
    }
}
class Cat extends Pet {
    function play(){
        echo "this->name is climbing.";
    }
    function sleep(){
        echo "$this->name is sleeping.";
    }
}