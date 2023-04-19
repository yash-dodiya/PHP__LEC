<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Drivin - Driving School Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo $this->base_url; ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo $this->base_url; ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo $this->base_url;?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo $this->base_url;?>css/style.css" rel="stylesheet">
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
    <style>
          .error{
                    color:red;
                    padding-top: 17px; 
          }
    </style>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>123 Street, New York, USA</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="login" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0"><i class="fa fa-car text-primary me-2"></i>Drivin</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
            </div>
            <a href="login" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Forgate Password<i class="fa fa-solid fa-lock ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h1 class="display-6 text-center mb-4">Email</h1>
              
                <form name = "send_msg" id="send_msg" onsubmit="event.preventDefault(); valid()" method="post">
                    <div class="row g-4">
                        <div class="col-sm-12">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0 bg-light" name="email"  id="email" placeholder="Gurdian Name">
                                <label for="email">Email</label>
                            </div>
                            <div class="error" id="emailErr"></div>                             

                        </div>                                                
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="sumbit" value="login"  name="login">Log IN</button>
                        </div>

                    </div>
                </form>
            </div>

            <!-- <div id="checkmsg" class="col-lg-6 wow fadeInUp" style="display:none" data-wow-delay="0.5s">                
                <h1 class="display-6 text-center mb-4">Email</h1>
                <form method = "post">
                    <div class="row g-4">
                        <div class="col-sm-12">
                            <div class="form-floating">
                                      <label for="gname">Email</label>
                                <input type="email" class="form-control border-0 bg-light" name="email"  id="email" placeholder="Gurdian Name">
                              </div>
                                <div class="error" id="emailErr">yashpal</div>                                
                        </div>                                                
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="sumbit" value="login"  name="login">Log IN</button>
                        </div> -->

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>

     function printError(elemId, hintMsg) {
            document.getElementById(elemId).innerHTML = hintMsg;
        }

        function valid(){
          var email = document.send_msg.email.value;

          var  emailErr = true;
          
          if(email == "") {
                printError("emailErr", "Please enter your email address");
            } else {
                // Regular expression for basic email validation
                var regex = /^\S+@\S+\.\S+$/;
                if(regex.test(email) === false) {
                    printError("emailErr", "Please enter a valid email address");
                } else{
                    printError("emailErr", "");
                    emailErr = false;
                }
            }

            if(email == true){
                    return false;
            }else{
                    send_msg();
            }
        }

        function send_msg(){

          //       console.log("updatetododata called");
        
                var result = {};
                $.each($('#send_msg').serializeArray(), function() {
                    result[this.name] = this.value;
                });

                console.log(result);

                    fetch("http://localhost/PHP___LEC/Lecture_19/forpass",{
                    method: 'POST',
                    headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(result)
                    }).then((res)=>res.json()).then((result)=>{
                        //    console.log(result);


                     })
            }

          
</script>
</body>
</html>