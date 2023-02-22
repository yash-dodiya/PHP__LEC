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

                case '/select':
                    $result=$this->select("user_det",array('first_name'=>"akhash",'last_name'=>"yadav"));
                    // echo "<pre>";
                    // print_r($result);
                    // echo "</pre>";
                    // exit;
                    break;

            case '/login':
                include_once("views/login.php");
                if(isset($_POST['submit'])){


                    // print_r($_POST);
                    // $first_name=$_POST['first_name'];
                    // $last_name=$_POST['last_name'];
                    // $email=$_POST['email'];
                    // $f_password=$_POST['f_password'];
                    // $l_password=$_POST['l_password'];
                    // $age=$_POST['age'];
                    // $city=$_POST['city'];
                    // $gender=$_POST['gender'];
                    // $language=json_encode($_POST['language']);

                    // $keys_value=['first_name'=>$first_name,
                    // 'last_name'=>$last_name,
                    // 'email'=>$email,
                    // 'f_password'=>$f_password,
                    // 'l_password'=>$l_password,
                    // 'age'=>$age,
                    // 'city'=>$city,
                    // 'gender'=>$gender,
                    // 'language'=> $language];



                    // print_r($_REQUEST); 

                    $lang=implode(",",$_REQUEST['language']);
                    
                    array_pop($_REQUEST);
                    
                    unset($_REQUEST['language']);
                    // echo "<pre>";
                    // print_r($a);
                    // echo "</pre>";
                    // exit;

                    $data=array_merge($_REQUEST,array('language'=>$lang));

                    // echo "<pre>";
                    // print_r($_REQUEST);
                    // echo "</pre>";

                    // exit;
                    $result=$this->insert("user_det",$data);
                    echo "<pre>";
                    print_r($result);
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

