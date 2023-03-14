    <?php
        require_once("model/model.php");
        class controller extends model{
            public $base_url="";
            public function __construct(){

            
                parent::__construct();
                // echo "<pre>";
                // print_r($_SERVER);
                ob_start();
                $requrlData=explode("/",$_SERVER['REQUEST_URI']);
                $this->base_url=$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].
                "/".$requrlData[1]."/".$requrlData[2]."/assets/";

                if(isset($_SERVER['PATH_INFO'])){
                    switch ($_SERVER['PATH_INFO']) {
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
                                                    
                            if($result['Code'] == 1){
                            
                                echo '<script>alert("Registration success")</script>';
        
                            }else{
                                echo "<script>alert('Error while inserting')</script>";
                                // echo '<script> Alert "(Error while inserting)"</script>';
                            }
                        } 

                        if(isset($_POST['signin'])){
                            
                        $result=$this->login($_REQUEST['username'],$_REQUEST['password']);
                            
                            if($result['Code'] == 1){

                                
                                $_SESSION['userdata']=$result['Data'][0];

                                if($result['Data'][0]->id == 1){
                                    header("location:admindashboard");
                                }else{
                                    header("location:userdashboard");
                                }
                            }
                            else{
                                echo "<script>alert('Error while inserting')</script>";
                                // echo '<script> Alert "(Error while inserting)"</script>';
                            }
                        }
                        
                        break;
                            case '/admindashboard':
                                include_once("views/admin/adminheader.php");
                                include_once("views/admin/dashboard.php");
                                include_once("views/admin/adminfooter.php");
                                break;
                            
                            case '/allusers':
                                // $Allusers=$this->select("test",array("id"=>3));
                                $Allusers=$this->select("test");
                                // echo "<pre>";
                                // print_r($result);
                                include_once("views/admin/adminheader.php");
                                include_once("views/admin/listallusers.php");
                                include_once("views/admin/adminfooter.php");
                                break;

                                
                                case '/edituser':
                                    $UsersDataById=$this->select('test',array("id"=>$_REQUEST['userid']));
                                    
                                    include_once("views/admin/adminheader.php");
                                    include_once("views/admin/updateuser.php");
                                    include_once("views/admin/adminfooter.php");

                                    if(isset($_POST['update'])){
                                    
                                        $Data=array("username"=>$_REQUEST['username']);
                                        $UpdateUser=$this->update('test',$Data,array("id"=>$_REQUEST['userid']));
                                        
                                        if($UpdateUser['Code'] == 1){
                                            echo '<script>
                                            alert("upade user successful")
                                            window.location.href="allusers"
                                            </script>';
                                        }
                                    }  
                                    break; 
                                    
                            case '/newuser':
                                
                                include_once("views/admin/adminheader.php");
                                include_once("views/admin/newuser.php");
                                include_once("views/admin/adminfooter.php");
                                if(isset($_POST['log'])){

                                    array_pop($_POST);
                                    
                                    $hobby=implode(",",$_POST['hobby']);
                                    unset($_POST['hobby']);
                                    $data = array_merge($_POST,array("hobby"=>$hobby));
                                    $result=$this->insert('test',$data);
                                    // echo "<pre>";
                                    // print_r($result);
                                    // echo "</pre>";
                                    if($result['Code']==1){
                                        echo "<script>alert('registration success')</script>";
                                        'window.location.href="http://localhost/PHP___LEC/Lecture_18/login"';
                                    }
                                    else{
                                        echo "<script>alert('Error while inserting')</script>";

                                    }
                                    exit;  
                                }
                                break;

                                case '/delateuser':
                                    $UpdateUser=$this->delate('test',array("id"=>$_REQUEST['userid']));
                                    if($UpdateUser['Code']==1){
                                        header("location:allusers");
                                    }else{
                                        '<script>alert("error while operating site down try after some time")
                                        window.location.href="home"
                                        </script>';
                                    }                                
                                break;
                                
                            case '/search':
                        
                                // if(isset($_POST['search'])){

                                
                                    echo "<pre>";
                                    print_r($_POST);
                                    echo "</pre>";
                                    exit;
                                // }
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

