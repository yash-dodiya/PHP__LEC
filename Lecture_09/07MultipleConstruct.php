<?php


class A{
    function __construct()
    {
        $a = func_get_args(); 
        $i = func_num_args();
        echo "<br>";
        print_r($a);
        print_r("<br>value a".$i);
        if(method_exists($this,$f='__cunstruct'.$i))
        {
            call_user_func_array(array($this,$f),$a);
        }
    }
    function __construct1($a1) 
    { 
        echo('__construct with 1 param called: '.$a1."<br>"); 
    } 
    function __construct2($a1,$a2)
    {
        echo('__construct with 2 params called:'.$a1.','.$a2."<br>");
    }
    function __construct3($a1,$a2,$a3)
    {
        echo('__construct with 3 params called:'.$a1.','.$a2.','.$a3."<br>");
    }

}
$obj=new A('sheep');
$obj=new A('sheep','cat');
$obj=new A('sheep','cat','dog');