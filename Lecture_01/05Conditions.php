<?php


$Marks = 69;

// if ($Marks > 50) {
//     echo "Pass";
// }
// $_REQUESt;
// if ($Marks > 50) {
//     echo "Pass";
// } else {
//     echo " Try again";
// }
// exit;
if ($Marks > 50) {
    if ($Marks >= 50 && $Marks < 60) {
        echo "Pass Class";
    } elseif ($Marks >= 60 && $Marks < 70) {
        echo "First Class";
    } elseif ($Marks >= 70 && $Marks < 80) {
        echo "Dist Class";
    } elseif ($Marks >= 80 && $Marks < 90) {
        echo "Dist+ Class";
    } elseif ($Marks >= 90 && $Marks <= 100) {
        echo "More than enogh";
    }
} else {
    echo " Try again";
}
$days = "M";
switch ($days) {
    case 'M':
        echo "Monday";
        break;
    case 'Tu':
        echo "Tuesday";
        break;
    case 'We':
        echo "Wenesday";
        break;

    default:
        # code...
        break;
}