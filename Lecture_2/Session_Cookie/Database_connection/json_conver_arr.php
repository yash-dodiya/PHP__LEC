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
    // $quantity=$value['quantity'];
    $img=$value['thumbnail'];

    echo $des;
}

$quary='INSERT INTO(item_id,item_name,item_dec,item_price,item_img)'
values  (".$id."','".$name."','".$des.",".$price."','".$img.");


?>