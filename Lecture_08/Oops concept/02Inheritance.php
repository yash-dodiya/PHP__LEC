
<?php


class A{
    public $name;
    public $age;
    public $salary;

    function __construct($n,$a,$s){
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;
    }
    function info(){
        echo "<h3>A class information</h3>";
        echo "A name is:".$this->name."<br>";
        echo "A age is:".$this->age."<br>";
        echo "A salary is:".$this->salary."<br>";

    }
}

class B extends A{
    public $ta=1000;
    public $phone=300;
    public $totalofsalary;

    function info()
    {
        $this->totalofsalary=$this->salary+$this->ta+$this->phone;
        echo "<h3> B class information</h3>";
        echo "A name is:".$this->name."<br>";
        echo "A age is:".$this->age."<br>";
        echo "A salary is:".$this->totalofsalary."<br>";
    }
}

$obj2=new A("YASH",19,30000);
$obj1=new B("YASHPAL",24,5000);

$obj2->info();
$obj1->info();

?>
