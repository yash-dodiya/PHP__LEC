<?php

$a=array(

   array('id'=>111,
    'firstname'=>'yash',
    'lastname'=>'dodiya',
),
   array(

    'id'=>222,
    'firstname'=>'yashpal',
    'lastname'=>'vala'
   ),
   array(

    'id'=>333,
    'firstname'=>'yuvraj',
    'lastname'=>'jadav'
   )
);

   echo "<pre>";
   print_r($a);

   echo "<br>===================================Loop column get===================================<br>";
   foreach($a as $key=>$value)
   {
    $data[]=$value['firstname'];
   }
   print_r($data);
  
   echo "<br>==================================column get===================================<br>";
   

   print_r(array_column($a,'firstname'));

?>