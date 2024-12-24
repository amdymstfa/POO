<?php

class Fathers {
    public $son ;
    public $daugther ;

    public function __construct($son, $daugther)
    {
        $this -> son = $son ;
        $this -> daugther = $daugther ;
    }

    public function linkk()
    {
        echo "{$this -> son} and {$this -> daugther} have the same father";
        
    }
}


class children extends Fathers {
    public function __destruct(){
        echo "hello, "   ;
    }
}

$result = new children('mstfa', 'abdou') ;
$result -> linkk() ;