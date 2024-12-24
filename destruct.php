<?php 

class Subject {
    public $subject ;

    function __construct($subject)
    {
        $this -> subject = $subject ;
    }

    function __destruct()
    {
        echo "My best subject is : {$this -> subject}" ;
        echo "\n" ;
    }
}

$my_obj = new Subject('Maths') ;
