<?php
class person {
    public $name ;

    function __construct($name)
    {
        $this -> name = $name ;
    }

    function get_name(){
        return $this -> name ;
    }
}

$mstfa = new person('mstfa') ;
echo $mstfa -> get_name() ;
echo "\n" ;