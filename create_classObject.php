<?php 

// create a class first
class Fruits {
    // propertys
    public $name ;
    public $color ;

    // methods
    function set_name($name){
        $this -> name = $name ;
    }

    function get_name(){
        return $this -> name ;
    }
}


// create an object
$apple = new Fruits() ;
$pineaple = new Fruits() ;

// apply methods from the class
$apple -> set_name('apple') ; 
$pineaple -> set_name('pineaple'); 

// read the content 
echo $apple -> get_name() ;
echo "\n";
echo $pineaple -> get_name();
echo "\n";