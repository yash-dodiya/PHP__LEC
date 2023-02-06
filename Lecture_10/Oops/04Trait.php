<?php

trait yash{
    public function traityashfun(){
        echo "hello<br>";
    }
}

trait yashpal{
    public function traityashpalfun(){
        echo "hey<br>";
    }
}

class A{
    use yash;
    use yashpal;

    public function show(){
        $this->traityashfun();
        $this->traityashpalfun();
    }
}

class B extends A{
    public function traityashfun(){
          echo "shakti";
    }
}
$obj=new B;
$obj->traityashfun();
?>