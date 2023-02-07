<?php
$marks=57;

if($marks>=80 && $marks<=100)
{
    echo "you are in Merit:.";
}
else if($marks>=60 && $marks<80)
{
    echo "you are in first division:.";
}
else if($marks>=40 && $marks<60)
{
    echo "you are in second division:";
}
else if($marks>=35)
{
    echo "you are fail:";
}
else{
    echo "please enter your valied marks:";
}
?>