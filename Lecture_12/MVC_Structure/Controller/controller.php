<?php


class Controller
{
    public function __construct(){
        echo "<pre>";
        print_r($_SERVER);
        echo "</pre>";

    // if(isset($_SERVER['PATH_INFO'])){
    // switch($_SERVER['PATH_INFO']){
    //     case '/home':
        include_once("Views/head.php");
        include_once("Views/main.php");
        include_once("Views/footer.php");
    //     break;

    //     case '/about':
    //     include_once("Views/subhead.php");
    //     include_once("Views/about.php");
    //     include_once("Views/subfooter.php");
    //     break;

    //     case '/services':
    //         include_once("Views/subhead.php");
    //         include_once("Views/courses.php");
    //     include_once("Views/subfooter.php");
    //     break;

    //     case '/contact':
    //         include_once("Views/subhead.php");
    //         include_once("Views/contact.php");
    //     include_once("Views/subfooter.php");
    //     break;

    //     default:
    //         break;
    //     }
    //  }
    // else{
    //     header("location:home");
    // }

    }
}
$obj=new Controller;


?>