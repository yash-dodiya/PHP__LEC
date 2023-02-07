<?php

require_once("convertation.php");

$json=file_get_contents("product.json");
$json_data=json_decode($json,true);


 foreach($json_data['products'] as $value )
{
    $id=$value['id'];
    $name=$value['title'];
    $des=$value['description'];
    $price=$value['price'];
    $img=$value['thumbnail'];

   
$query='INSERT INTO product(id,NAME,des,price,img)
VALUES  ("'.$id.'","'.$name.'","'.$des.'","'.$price.'","'.$img.'")';

 $run=mysqli_query($con,$query);
 
}

echo "Data add succsssful:";
?>