<?php

    require_once("model/model.php");
    class controller extends model{
        public $base_url="";
        public function __construct(){
            parent::__construct();
            // echo "<pre>";
            // print_r($_SERVER);
            $requrlData=explode("/",$_SERVER['REQUEST_URI']);
            // print_r($requrlData);
            $this->base_url=$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].
            "/".$requrlData[1]."/".$requrlData[2]."/".$requrlData[3]."/".$requrlData[4]."/assets/";
            // echo "static base_url : http://localhost/PHP___LEC/Lecture_13/MVC_DY/assets/<br>";
            // echo "Dynemic base_url : .$this->base_url";
            // exit;
            if(isset($_SERVER["PATH_INFO"])){
                switch ($_SERVER["PATH_INFO"]) {
                    case '/home':
                        include_once("views/header.php");
                        include_once("views/main.php");
                        include_once("views/footer.php");
                        break;

                    case '/about':
                        include_once("views/header.php");
                        include_once("views/about.php");
                        include_once("views/footer.php");
                        break;

                    case '/courses':
                        include_once("views/header.php");
                        include_once("views/courses.php");
                        include_once("views/footer.php");
                        break;
                        
                    case '/contact':
                        include_once("views/header.php");
                        include_once("views/contact.php");
                        include_once("views/footer.php");
                        break;

                    case '/feature':
                        include_once("views/header.php");
                        include_once("views/feature.php");
                        include_once("views/footer.php");
                        break;

                    case '/appointment':
                        include_once("views/header.php");
                        include_once("views/appointment.php");
                        include_once("views/footer.php");
                        break;

                    case '/team':
                        include_once("views/header.php");
                        include_once("views/team.php");
                        include_once("views/footer.php");
                        break;

                    case '/testimonial':
                        include_once("views/header.php");
                        include_once("views/testimonial.php");
                        include_once("views/footer.php");
                        break;

                    case '/404':
                        include_once("views/header.php");
                        include_once("views/404.php");
                        include_once("views/footer.php");
                        break;
                    
                    case '/select';
                       $result=$this->select("test",array('username'=>"yash",'password_'=>123));
                       echo "<pre>";
                        print_r($result);
                       break;

                    case '/login':
                        include_once("views/login_regis.php");
                        if(isset($_POST['register'])){
                            
                            array_pop($_REQUEST);
                            $result=$this->insert("test",$_REQUEST);
                            // echo "<pre>";
                            // print_r($_REQUEST);
                            // exit;
                            echo "<pre>";
                            print_r($result);

                            if($result['code']==1){
                                echo "<script>Alert('Registration success')</script>";
                                header("location:login_regis");
                            }else{
                                echo "<script>Alert('Error while inserting')</script>";
                                // echo '<script> Alert "(Error while inserting)"</script>';
                            }
                        } if(isset($_POST['btn-login'])){
                            $result=$this->login($_REQUEST['uname'],$_REQUEST['password']);
                            if($result['code']==1){
                                echo "<pre>";
                                print_r($result['data'][0]);,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<,,,,,,,,,,,,,,,,,,,,<<<<<<<<<<,,,,,,,,,,,,,<<<<<<<<<,,,,,,,,,,,,,,,,,,,,,,,<<<<<<,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,
,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,
                            }else{
                                echo "<script>Alert('Error while inserting')</script>";
                                // echo '<script> Alert "(Error while inserting)"</script>';
                            }
                        }
                        break;

                    default:
                        break;
                }

            }else{
                header("location:home");
            }
        }
    }
    $controller = new controller;

?>

