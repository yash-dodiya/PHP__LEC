<?php
echo "<br>============================================simple class method=================================</br>";
// class hello{
//     public function sayhello(){
//         echo "hello everyone";
//     }
// }

// class bye{
//     public function saybye(){
//         echo "bye everyone";
//     }
// }
// function wow(hello $obj){
//     $obj->sayhello();
// }


// $obj=new hello();
// wow($obj);

echo "<br>====================================================class typehinting===============================</br>";

// class school{
//     public function getname(student $name){
//         foreach ($name->Names() as $name) {
//             echo $name."<br>";
//         }
//     }
// }
// class student{
//     public function Names(){
//         return ["Ram","Rahul","Rax"];
//     }
// }

// $sch=new school();
// $std=new student();
// $sch->getname($std);

echo "<br>==================================================function typehiting==================================</br>";

class Mathop{
    public function Addition($a,$b){
        return $a+$b;
    }
}
$obj=new Mathop;
echo ,,,,$obj->Addition(10,10);
?>