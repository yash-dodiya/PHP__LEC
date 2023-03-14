<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Useras</h1>
        <a href="newuser" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i>back</a>
    </div>
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <?php
                    // echo "<pre>";
                    // // print_r($UsersDataById['Data'][0]->username);
                    // print_r($UsersDataById['Data']);
                    // echo "</pre>";
                    ?>
                    <form method="post">
                        <div class="row">
                            <div class="col-8">
                                <input type="text" class="form-control" value="<?php echo $UsersDataById['Data'][0]->username;?>"  name="username" id="">
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-8">
                                <input type="radio" class="form-" value="Male" name="gender" id="">Male
                                <input type="radio" class="form-" value="Male" name="gender" id=""> Female
                            </div>
                        </div> -->
                        <div class="row mt-3">
                            <div class="col-8">
                                <input type="submit" value="update" name="update" class="btn btn-primary" id="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->


