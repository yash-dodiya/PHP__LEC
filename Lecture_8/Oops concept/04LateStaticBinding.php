<?php

class base{
    public static $name="yash<br>";
    public static $age="19 <br>";


    function show()
    {
        echo self::$name;
        echo self::$age;
        echo static::$name;
    }

}
class derived extends base{
    public static $name="dodiya";
}
$obj=new derived();
$obj->show();

?>