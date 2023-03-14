
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update User</h1>
        <a href="allusers" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-arrow-left  fa-sm text-white-50"></i> Back</a>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4"> 
                <!-- Card Body -->

                <div class="card-body">
                <?php 
                // echo "<pre>";
                //  print_r($userdatabyid['Data'][0]);
                  ?>
                    <form method="post">
                        <div class="row g-3">
                            <div class="col-sm-4"  style="padding-top: 30px;">
                                <div class="form-floating">
                                    <!-- <label for="gname">Your Name</label> -->
                                    <input type="text" class="form-control border-0 bg-light" id="gname" value="<?php echo $userdatabyid['Data'][0]->user_name; ?>" name ="user_name" placeholder="User Name" required=""  >
                                </div>
                            </div>
                            <div class="col-sm-4"  style="padding-top: 30px;">
                                <div class="form-floating">
                                    <!-- <label for="gmail">Your Email</label> -->
                                    <input type="email" class="form-control border-0 bg-light" id="gmail" value="<?php echo $userdatabyid['Data'][0]->email; ?>" name ="email" placeholder="User Email" required="">
                                </div>
                            </div>
                            <div class="col-sm-4"  style="padding-top: 30px;">
                                <div class="form-floating">
                                    <!-- <label for="contact_number">Your Contact Number</label> -->
                                    <input type="number" class="form-control border-0 bg-light" id="contact_number" value="<?php echo $userdatabyid['Data'][0]->contact_number; ?>" name ="contact_number" placeholder="User contact_number" required="" >
                                </div>
                            </div>
                            <div class="col-sm-4"  style="padding-top: 30px;">
                                <div class="form-floating">
                                    <!-- <label for="dob">Date Of Birth</label> -->
                                    <input type="date" class="form-control border-0 bg-light" id="dob" value="<?php echo $userdatabyid['Data'][0]->date_of_birth; ?>" name ="date_of_birth"  required="">
                                </div>
                            </div>
    
                            <div class="col-sm-4"  style="padding-top: 30px;">
                                <div class="form-floating">
                                    <label class="form-check-label form-control border-0 bg-light">
                                            Gender:
                                    </label>
                                    <div class="form-check col-sm form-control border-0 bg-light">
                                        <input class="form-check-input" type="radio" name="gender" value="male" <?php if($userdatabyid['Data'][0]->gender == "male"){echo "checked";}?> >
                                        <label class="form-check-label " for="Male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check col-sm form-control border-0 bg-light">
                                        <input class="form-check-input" type="radio" name="gender" value="female" <?php if($userdatabyid['Data'][0]->gender == "female"){echo "checked";}?>>
                                        <label class="form-check-label" for="Femal">
                                            Femal
                                        </label>
                                    </div>
                                </div>
                            </div>
                                <?php 
                                    $hobby = $userdatabyid['Data'][0]->hobby;
                                    $hobby_array = explode(",",$hobby);
                                ?>
                            <div class="col-sm-4 "  style="padding-top: 30px;">
                                <div class="form-floating ">
                                    <label class=" form-control border-0 bg-light form-check-label">
                                        Hobby :
                                    </label>
                                    <div class="form-check form-control border-0 bg-light">
                                        <input class="form-check-input" type="checkbox"  name="hobby[]" value="Coding" <?php if (in_array("Coding", $hobby_array)){echo "checked";}?>>
                                        <label class="form-check-label " for="">
                                            Coding
                                        </label>
                                    </div>
                                    <div class="form-check form-control border-0 bg-light">
                                        <input class="form-check-input" type="checkbox" name="hobby[]" value="Teaching" <?php if (in_array("Teaching", $hobby_array)){echo "checked";}?>>
                                        <label class="form-check-label" for="">
                                            Teaching
                                        </label>
                                    </div>
                                    <div class="form-check form-control border-0 bg-light">
                                        <input class="form-check-input" type="checkbox"  name="hobby[]" value="dance" <?php if (in_array("dance", $hobby_array)){echo "checked";}?>>
                                        <label class="form-check-label" for="">
                                            dance
                                        </label>
                                    </div>
                                    <div class="form-check form-control border-0 bg-light">
                                        <input class="form-check-input" type="checkbox"  name="hobby[]" value="writing" <?php if (in_array("writing", $hobby_array)){echo "checked";}?>>
                                        <label class="form-check-label" for="">
                                            writing  
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-12"  style="padding-top: 30px;">
                            <button class="btn btn-primary w-100 py-3" type="sumbit" value="Update"  name="Update">Update</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

