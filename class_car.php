<?php
// create class
class cars {
    // propertys
    public $model ;

    // methods
    function set_model($model){
        $this -> model = $model ;
    }

    function get_model(){
        return $this -> model ;
    }
}


// create object car
$ferrari = new cars() ;

// check object
var_dump($ferrari instanceof cars);

// set model
$ferrari -> set_model('ferrari 360') ;

// display model
echo $ferrari->get_model() ;
echo "\n";