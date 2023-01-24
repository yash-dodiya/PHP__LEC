<?php

class Accessmodi{
    public $publicDm="publicDm";
    private $privateDm="privateDm";
    protected $protectedDm="protectedDm";
    public function AccessDmself(){
        echo "AccesssDmself<br>";
        echo "<br> public in AccessDmself".$this->publicDm."<br>";
        echo "<br> protectedDm in AccessDmself".$this->protectedDm."<br>";
        echo "<br> privateDm in AccessDmself".$this->privateDm."<br>";
    }
}
    class Accessmodichild extends Accessmodi{
        public function AccessDm(){
            echo "AccessDm called<br>";
            echo "<br> public in child".$this->publicDm."<br>";
            echo "<br> protectedDm in child".$this->protectedDm."<br>";
            // echo "<br> privateDm".$this->privatedm."<br>";
        }
}

$objectofaccessmodi=new Accessmodichild ;
echo $objectofaccessmodi->AccessDm();
echo $objectofaccessmodi->publicDm;
// echo $objectofaccessmodi->AccessDmself();
echo $objectofaccessmodi->AccessDmSelf();
 // $objectAccessmodi->privateDm;
 // $objectAccessmodi->protectedDm;
 ?>
