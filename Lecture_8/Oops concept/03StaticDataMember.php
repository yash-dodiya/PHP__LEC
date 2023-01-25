<?php

class StaticdmExample{
    public static $staticDmparent="static Data Member<br>";
}
class StaticdmchildExample extends StaticdmExample{
    public static $staticDmchild="static Data Child<br>";
    public static function functionname()
    {
          echo "called";
          echo self::$staticDmchild;
          echo parent::$staticDmparent;
          echo self::$staticDmparent;
    }
}
    echo StaticdmchildExample::functionname();
?>