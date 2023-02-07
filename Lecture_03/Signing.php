<?php 

require_once("header.php");



if(isset($_REQUEST['btn-save']))
{
     if($_POST['username']=="dodiya yash" && $_REQUEST['password']=="1234")
     {
        $_SESSION['userdata']=array("username"=>$_POST['username'],"password"=>$_REQUEST['password']);
      
        if (isset($_REQUEST['setcookieuserlogin'])) {
            setcookie("username","dodiyayash",time()+3600);
        }
        header("location:home.php");
           
     }
     else{
        echo "invalied user:";
     }
}

?>

  <div class="container">
    <div class="row">
        <div class="col-lg-4 offset-lg-4 my-4">
        
            <div class="card border-success">
                <div class="card-header text-center">login</div>
                <div class="card-body">
                <form method="post">
                    <div class="row my-2">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Enter User Name" name="username" id="username">
                        </div>
                    </div>
  


                    <div class="row my-2">
                        <div class="col">
                            <input type="password" class="form-control" name="password" id="password" placeholder="enter password">

                        </div>
                    </div>
                       <div class="col">
                         <input type="checkbox" name="setcookieuserlogin" value="true" id="setcookieuserlogin">remember button
                        </div>
                        <div class="col">
                            <input type="submit" class="btn btn-sm btn-primary" id="btn-save" name="btn-save" >
                             <input type="reset" class="btn btn-sm btn-danger">
                        </div>
                    </div>
                    
                </form>
            </div>
          </div>
        </div>
    </div>
    </div>