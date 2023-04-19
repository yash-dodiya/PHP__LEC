<?php
require_once("model/model.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';


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

        if(!isset($_SERVER["PATH_INFO"]))
        {
            $_SERVER["PATH_INFO"]='/register';
        }
        if(isset($_SERVER["PATH_INFO"])){

            switch ($_SERVER["PATH_INFO"]){
                case '/home':
                    include_once("views/headerr.php");
                    include_once("views/main.php");
                    include_once("views/footer.php");
                    break;

                case '/userproduct':
                    $allproduct_user = $this->select('product1_data');
                    include_once("views/headerr.php");
                    include_once("views/user_product.php");
                    include_once("views/footer.php");
                    break;

                case '/about':
                    include_once("views/headerr.php");
                    include_once("views/about.php");
                    include_once("views/footer.php");
                    break;

                case '/courses':
                    include_once("views/headerr.php");
                    include_once("views/courses.php");
                    include_once("views/footer.php");
                    break;
                    
                case '/contact':
                    include_once("views/headerr.php");
                    include_once("views/contact.php");
                    include_once("views/footer.php");
                    break;

                case '/feature':
                    include_once("views/headerr.php");
                    include_once("views/features.php");
                    include_once("views/footer.php");
                    break;

                case '/appointment':
                    include_once("views/headerr.php");
                    include_once("views/appointment.php");
                    include_once("views/footer.php");
                    break;

                case '/team':
                    include_once("views/headerr.php");
                    include_once("views/team.php");
                    include_once("views/footer.php");
                    break;

                case '/testimonial':
                    include_once("views/headerr.php");
                    include_once("views/testimonial.php");
                    include_once("views/footer.php");
                    break;
                
                case '/register':
                    include_once("views/register.php");

                    if(isset($_POST['register'])){
                        array_pop($_POST);
                        
                        $result = $this->insert('register',$_POST);
                        // print_r($result);

                        $this->SendEmail($_POST['email'], "Register Success drivin school_local");
                        if($result['Code'] == 1){
                            
                            echo  '<script>
                                    alert("registration success")
                                    window.location.href="login"
                                </script>';
                            
                        }else{
                            echo  '<script>alert("erroer while inserting ")</script>';
                        }
                    }
                    include_once("views/footer.php");
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
                    include_once("views/footer.php");
                    break;
                
                case '/email':
                    // include_once("views/login.php");
                    include_once("views/email.php");
                    
                    include_once("views/footer.php");
                    break;
                case '/admindashboard':
                    $Allusers = $this->select('register');

                    $_SESSION['userdata'] = $Allusers['Data'][0];
                    // dd($_SESSION['userdata']->user_name);
                    // print_r($_SESSION);

                    include_once("views/admin/adminheader.php");
                    include_once("views/admin/admindashbord.php");
                    include_once("views/admin/adminfooter.php");
                    break;

                case '/allusers':
                    $Allusers = $this->select('register');

                    if(isset($_POST['search'])){
                        $search_data = array("id"=>$_POST['search_value'],"user_name"=>$_POST['search_value'],"email"=>$_POST['search_value'],"contact_number"=>$_POST['search_value'],"date_of_birth"=>$_POST['search_value']);

                        $search_result = $this->search('register',$search_data);

                    }
                    include_once("views/admin/adminheader.php");
                    include_once("views/admin/Listallusers.php");
                    include_once("views/admin/adminfooter.php");
                    break;

                case '/newuseradd':
                    if(isset($_POST['adminadd'])){

                        $hobby =implode(",",$_POST['hobby']);
                        array_pop($_POST);
                        unset($_POST['hobby']);
                        $postdata = array_merge($_POST,array("hobby"=>$hobby));
                        // dd($postdata);
                        // exit;
                        $result = $this->insert('register',$postdata);
                        // print_r($result);
                        
                        if($result['Code'] == 1){
                            
                            echo  '<script>alert("user added success")</script>';
                            header("location:allusers");
                            
                        }else{
                            echo  '<script>alert("erroer while inserting ")</script>';
                        }
                    }
                    include_once("views/admin/adminheader.php");
                    include_once("views/admin/newuseradd.php");
                    include_once("views/admin/adminfooter.php");
                    break;

                case '/edituser':
                    $userdatabyid = $this->select('register',array("id"=>$_REQUEST['userid']));
                    // echo "<pre>";
                    // print_r($userdatabyid);
                    // exit;
                    include_once("views/admin/adminheader.php");
                    include_once("views/admin/updateuser.php");
                    include_once("views/admin/adminfooter.php");

                    if(isset($_POST['Update'])){
                    
                        $hobby =implode(",",$_POST['hobby']);
                            // array_pop($_POST);
                            // unset($_POST['hobby']);
                            // $postdata = array_merge($_POST,array("hobby"=>$hobby));
                            // dd($postdata);
                            // exit;

                        $post_data = array("user_name"=>$_POST['user_name'],"email"=>$_POST['email'],"contact_number"=>$_POST['contact_number'],"date_of_birth"=>$_POST['date_of_birth'],"gender"=>$_POST['gender'],"hobby"=>$hobby);
                        
                        $updateusers = $this->update('register',$post_data,array("id"=>$_REQUEST['userid']));
                        
                        if($updateusers["Code"] == 1){
                            echo '<script> 
                                    alert("update data success") 
                                    window.location.href="allusers"
                                </script>';
                            // header("location:allusers");
                        }else{
                            echo "<script>alert('try after some time')</script>";
                        }
                    }
                    break;

                case '/deleteuser':
                    
                    $deleteusers = $this->delete('register',$_REQUEST);
                    if($deleteusers['Code'] == 1){
                            
                        echo  '<script>
                        alert("Delete User successfuly")
                        window.location.href="allusers"
                        </script>';
                        // header("location:allusers");
                        
                        
                    }else{
                        echo  '<script>alert("erroer while deleting ")</script>';

                    }
                    break;
                case '/allproduct':
                    $allproduct = $this->select('product1_data');
                    
                    // echo "<pre>";
                    // print_r($allproduct['Data']);
                    // exit;                        
                    include_once("views/admin/adminheader.php");
                    include_once("views/admin/admin_product.php");
                    include_once("views/admin/adminfooter.php");
                    break;
                case '/ajextodo':
                    include_once("views/admin/adminheader.php");
                    include_once("views/admin/ajaxtodo.php");
                    include_once("views/admin/adminfooter.php");
                    break;

                case '/add_product':

                    if(isset($_POST['add_item'])){

                        $img = "https://i.dummyjson.com/data/products/14/thumbnail.jpg";
                        array_pop($_POST);
                        $postdata = array_merge($_POST,array("item_image"=>$img));
                        // dd($postdata);
                        // exit;
                        $result = $this->insert('product1_data',$postdata);
                        
                        if($result['Code'] == 1){
                            
                            echo  '<script>alert("iteam added success")</script>';
                            header("location:allproduct");
                            
                        }else{
                            echo  '<script>alert("erroer while inserting ")</script>';
                        }
                    }
                    include_once("views/admin/adminheader.php");
                    include_once("views/admin/add_product.php");
                    include_once("views/admin/adminfooter.php");
                    break;

                case '/editproduct':

                    $item_id = array("item_id"=>$_REQUEST['item_id']);
                    
                    $productdatabyid = $this->select('product1_data',$item_id);
                    
                    include_once("views/admin/adminheader.php");
                    include_once("views/admin/update_product.php");
                    include_once("views/admin/adminfooter.php");

                    if(isset($_POST['update_item'])){
                        // $hobby =implode(",",$_POST['hobby']);
                            // array_pop($_POST);
                            // unset($_POST['hobby']);
                            // $postdata = array_merge($_POST,array("hobby"=>$hobby));
                            // dd($postdata);
                            // exit;

                        $post_dataitem = array("item_name"=>$_POST['item_name'],"item_price"=>$_POST['item_price'],"item_desc"=>$_POST['item_desc']);
                        
                        
                        $update_item = $this->update('product1_data',$post_dataitem,$item_id); 
                        echo "<pre>";
                        print_r($update_item);
                        echo "</pre>";
                        exit;
                        if($update_item["Code"] == 1){
                            echo '<script> 
                                    alert("update item success") 
                                    window.location.href="allproduct"
                                </script>';
                        }else{
                            echo "<script>alert('try after some time')</script>";
                        }
                    }
                    break;
                case '/deleteproduct':

                    $item_id = $_REQUEST;

                    $deleteitem = $this->delete('product1_data',$item_id);

                    if($deleteitem['Code'] == 1){
                            
                        echo  '<script>
                        alert("Delete User successfuly")
                        window.location.href="allproduct"
                        </script>';
                    }else{
                        echo  '<script>alert("erroer while deleting ")</script>';
                    }
                    break;                   
                default:
                    include_once("views/headerr.php");
                    include_once("views/404.php");
                    include_once("views/footer.php");
                    break;
            }
        }else{
            header("location:home");
        }
        ob_flush(); 
    }    
    
    public function SendEmail($email, $msg){
        $mail = new PHPMailer(true);
        // $OTP = rand(1000, 9999);
        $mail->isSMTP();                                // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                       // Enable SMTP authentication
        $mail->Username   ='dodiyayash9313@gmail.com'; //SMTP username
        $mail->Password   ='zuezwoatxyygsnud';     // your password 2step varified 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;     //587 is used for Outgoing Mail (SMTP) Server.
        $mail->setfrom('dodiyayash9313@gmail.com', 'yash dodiya');
        $mail->addAddress($email);   // Add a recipient
        $mail->isHTML(true);  // Set email format to HTML

        $bodyContent = "<h1>HeY!,</h1>";
        $bodyContent .= '<p>This is a email that</p>' . $msg;
        $mail->Body    = $bodyContent;
        $mail->Subject = 'Email from Localhost by yashpal';
        if (!$mail->send()) {
            echo 'Message was not sent.';
            echo 'Mailer error: ' . $mail->ErrorInfo;
        } else {
            echo '<script>alert("Message has been sent");</script>';
        }
    }
}
$controller = new controller;
?>

