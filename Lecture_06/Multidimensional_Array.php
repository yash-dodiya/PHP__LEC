<?php

echo "<br>==============================First==================================================<br>";
$Multidimentional=array("a"=>40,"b"=>50,"c"=>60,"d"=>70);

echo "<pre>";
print_r($Multidimentional);
echo "</pre>";

echo "<br>==============================Second==================================================<br>";

$Multidimentional=array("abc"=>array("10th"=>array("a"=>40,"b"=>50,"c"=>60,"d"=>70)));

echo "<pre>";
print_r($Multidimentional);
echo "</pre>";

echo "<br>==============================Third==================================================<br>";

$Multi_arry=$Multidimentional['abc']['10th'];          9409727764
echo "<pre>";
print_r($Multi_arry);
echo "</pre>";

foreach ($Multidimentional['abc']['10th'] as $key=>$value) {

    echo "$key marks is =".$value."<br>";

}

echo "<br>===============================Four==============================================</br>";

$Multidimentional=array("shiv"=>array( "rss"=>array("yash"=>40,"yashpal"=>50,"milan"=>60,"nihar"=>70),
                                       "sir"=>array("a"=>10,"b"=>20,"c"=>30,"d"=>40),
                                       "ravi"=>array("a"=>1,"b"=>2,"c"=>3,"d"=>4)),

                        "shakti"=>array("ncc"=>array("yash"=>1,"yashpal"=>2,"milan"=>3,"nihar"=>4),
                                        "sir"=>array("a"=>10,"b"=>20,"c"=>30,"d"=>40)));
                                                     

echo "<pre>";  
print_r($Multidimentional);
print_r($Multidimentional['shiv']);
print_r($Multidimentional['shiv']['rss']);
print_r($Multidimentional['shiv']['rss']['yash']);
echo "</pre>";




foreach($Multidimentional['shiv']['rss']  as $key => $value)
{

    echo "<br>===============================Five==============================================</br>";


    if($key=='yashpal')
    {
    echo $key."=".$value;
    echo "<br>";
    }
}

?>