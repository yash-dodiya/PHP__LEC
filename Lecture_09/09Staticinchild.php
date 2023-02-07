<?php

class staticclassExample{
    public static $staticDmparent="static Dm<br>";
}
class staticclassExamplechild extends staticclassExample {
    public static $staticdm="static Dm<br>";
    public static function functionname()
    {
        echo "called<br>";
        echo self::$staticdm;
        echo parent::$staticDmparent;
        echo self::$staticDmparent;
    }
}
echo staticclassExamplechild::functionname();
?>