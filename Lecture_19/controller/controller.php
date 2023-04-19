<?php
    // session_start();
    require_once("model/model.php");
    class controller extends model{
        public $base_url = "";
        public function __construct(){
            ob_start();
            parent::__construct();

            $reqURIdata = explode("/",$_SERVER['REQUEST_URI']);  // array cut
            $this->base_url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME']."/".$reqURIdata[1]."/".$reqURIdata[2]."/assets/";
            
            // echo "<pre>";
            // print_r($this->base_url);
            // echo "</pre>";
            // exit;

            // if(!isset($_SERVER["PATH_INFO"]))
            // {
            //     $_SERVER["PATH_INFO"]='/register';
            // }

            if(isset($_SERVER["PATH_INFO"])){

                switch ($_SERVER["PATH_INFO"]){

                    case '/home':
                        echo "<h2>Wellcome to Api success</h2>";
                        break;

                    case '/select':
                        echo "<pre>";
                        $Result=$this->select("register",array("user_name"=>"dodiya yash"));
                        print_r($Result);
                        echo "</pre>";                        
                        break;

                    case '/inserttodo':

                        // print_r($_REQUEST);
                        $data = json_decode(file_get_contents('php://input'), true);
                        // print_r($data);
                        $insertToDo=$this->insert("todo",$data);
                        echo json_encode($insertToDo);
                        // echo "<pre>";
                        // print_r($Result);
                        // echo "</pre>";                        
                       break;
                    
                    case '/updatetodo':

                        $data = json_decode(file_get_contents('php://input'));
                        $id=$_REQUEST;
                        $array=(array) $data;

                        $updateToDo=$this->update("todo",$array,$id);

                        echo json_encode($updateToDo);
                        break;

                    case '/delatetodo':

                       $id=$_REQUEST;

                        $delateToDo=$this->delete("todo",$id);

                        echo json_encode($delateToDo);
                        
                        break;                       

                       
                    case '/alltododata':
                        $Result=$this->select("todo");

                        echo json_encode($Result);
                        // echo "<pre>";
                        // print_r($Result);
                        // echo "</pre>";                        
                       break;

                     case '/gettododatabyid':
                        $result=$this->select('todo',array("id"=>$_REQUEST['id']));
                        echo json_encode($result);
                        break;  

                    case '/login':
                        include_once("views/login.php");
                        if(isset($_POST['login'])){
                        
                            $result = $this->login($_POST['user_n_m_e'],$_POST['password']);

                            if($result['Code'] == 1){
                                
                                $_SESSION['userdata'] = $result['Data'][0];

                                // echo "<pre>";
                                // print_r($_SESSION['userdata']);
                                
                                if($result['Data'][0]->id == 1){
                                    header("location:admindashboard");
                                }else{
                                    header("location:home");
                                }
                            }else{
                                echo '<script>alert("Invalid User")</script>';
                            }
                        }
                        break; 
                     case '/forpass':
                        
                        $data = json_decode(file_get_contents('php://input'));
                        // echo "<pre>";                        
                        // print_r("yash");
                        // echo "</pre>";
                        // exit;

                        $array=(array) $data;
                        // echo "<pre>";
                        // print_r($Result);

                        $Result=$this->select("register",$array);
                        echo json_encode($Result);
                        break;
                        
                    case '/ajextodo':
                        include_once("views/admin/adminheader.php");
                        include_once("views/admin/ajaxtodo.php");
                        include_once("views/admin/adminfooter.php");
                        break;
                    
                    
                    default:
                        break;
                }
            }else{
                header("location:home");
            }
            ob_flush(); 
        }
    }   
    $controller = new controller;
?>

