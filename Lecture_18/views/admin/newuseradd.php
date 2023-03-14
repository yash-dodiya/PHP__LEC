
    <!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add New User</h1>
        <a href="allusers" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-arrow-left fa-sm text-white-50"></i>Back</a>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4"> 
                <!-- Card Body -->
                <div class="card-body">
                        <!-- .class="bg-primary text-center p-5" -->
    <div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="assets/img/d3.jpg" alt="" style="object-fit: cover;">
                    <!-- <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="assets/img/about-2.jpg" alt="" style="width: 200px; height: 200px;"> -->
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                
                <h1 class="display-6 text-center mb-4" style="padding-top: 30px;">Add User</h1>

                <form method="post">
                    <div class="row g-3">
                        <div class="col-sm-6"  style="padding-top: 30px;">
                            <div class="form-floating">
                                <!-- <label for="gname">Your Name</label> -->
                                <input type="text" class="form-control border-0 bg-light" id="gname" name ="user_name" placeholder="User Name" required=""  >
                            </div>
                        </div>
                        <div class="col-sm-6"  style="padding-top: 30px;">
                            <div class="form-floating">
                                <!-- <label for="gmail">Your Email</label> -->
                                <input type="email" class="form-control border-0 bg-light" id="gmail" name ="email" placeholder="User Email" required="">
                            </div>
                        </div>
                        <div class="col-sm-6"  style="padding-top: 30px;">
                            <div class="form-floating">
                                <!-- <label for="contact_number">Your Contact Number</label> -->
                                <input type="number" class="form-control border-0 bg-light" id="contact_number" name ="contact_number" placeholder="User contact_number" required="" >
                            </div>
                        </div>
                        <div class="col-sm-6"  style="padding-top: 30px;">
                            <div class="form-floating">
                                <!-- <label for="dob">Date Of Birth</label> -->
                                <input type="date" class="form-control border-0 bg-light" id="dob" name ="date_of_birth"  required="">
                            </div>
                        </div>
                        <div class="col-sm-6"  style="padding-top: 30px;">
                            <div class="form-floating">
                                <!-- <label for="Password">Password</label> -->
                                <input type="password" class="form-control border-0 bg-light" id="Password" name ="Password" placeholder=" Password" required="" >
                            </div>
                        </div>
                        <div class="col-sm-6"  style="padding-top: 30px;">
                            <div class="form-floating">
                                <!-- <label for="confirm_Password">Confirm_Password</label> -->
                                <input type="password" class="form-control border-0 bg-light" id="Conf_Password" name ="Confirm_Password" placeholder=" confirm_Password" required="" >
                            </div>
                        </div>

                        <div class="col-sm-6"  style="padding-top: 30px;">
                                <div class="form-floating">
                                    <label class="form-check-label form-control border-0 bg-light">
                                            Gender:
                                    </label>
                                    <div class="form-check col-sm form-control border-0 bg-light">
                                        <input class="form-check-input " type="radio" name="gender" value="male"  >
                                        <label class="form-check-label " for="Male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check col-sm form-control border-0 bg-light">
                                        <input class="form-check-input" type="radio" name="gender" value="female" >
                                        <label class="form-check-label" for="Femal">
                                            Femal
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 "  style="padding-top: 30px;">
                                <div class="form-floating ">
                                    <label class=" form-control border-0 bg-light form-check-label">
                                        Hobby :
                                    </label>
                                    <div class="form-check form-control border-0 bg-light">
                                        <input class="form-check-input" type="checkbox"  name="hobby[]" value="Coding">
                                        <label class="form-check-label " for="">
                                            Coding
                                        </label>
                                    </div>
                                    <div class="form-check form-control border-0 bg-light">
                                        <input class="form-check-input" type="checkbox" name="hobby[]" value="Teaching" >
                                        <label class="form-check-label" for="">
                                            Teaching
                                        </label>
                                    </div>
                                    <div class="form-check form-control border-0 bg-light">
                                        <input class="form-check-input" type="checkbox"  name="hobby[]" value="dance">
                                        <label class="form-check-label" for="">
                                            dance
                                        </label>
                                    </div>
                                    <div class="form-check form-control border-0 bg-light">
                                        <input class="form-check-input" type="checkbox"  name="hobby[]" value="writing">
                                        <label class="form-check-label" for="">
                                            writing  
                                        </label>
                                    </div>
                                </div>
                            </div>
                          
                       
                        <!-- <div class="check">
                            <input type="checkbox" name="" id="rember"  />
                            <label for="rember">Remember me?</label>
                        </div> -->
                       
                        <!-- <div class="col-sm-12" >
                            <div class="form-floating" >
                                <a href = "login" >Allready Register? Click here</a>
                            </div>
                        </div> -->
                        <div class="col-12"  style="padding-top: 30px;">
                            <button class="btn btn-primary w-100 py-3" type="sumbit" value="adminadd"  name="adminadd">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

