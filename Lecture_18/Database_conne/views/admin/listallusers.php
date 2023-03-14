<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Useras</h1>
        <a href="newuser" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-user-plus fa-sm text-white-50"></i>Add new user</a>
    </div>
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                <!-- <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button" name="search">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div> -->
                            <?php
                            echo "<pre>";
                            print_r($_POST);
                            echo "</pre>";
                            ?>
                            <!-- Topbar Search -->
                    <form method="post">
                       <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" name="search"class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" name="search" type="button">
                                <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                            </div>
                        </div>
                    </form>

                <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>email</th>
                                            <th>password</th>
                                            <th>gender</th>
                                            <th>hobby</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Name</th>
                                            <th>email</th>
                                            <th>password</th>
                                            <th>gender</th>
                                            <th>hobby</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                        // echo "<pre>";
                                        // print_r($Allusers);
                                        foreach ($Allusers['Data'] as $key => $value) {?>
                                        <tr>
                                            <td><?php echo $value->username ?></td>
                                            <td><?php echo $value->email ?></td>
                                            <td><?php echo $value->password_ ?></td>
                                            <td><?php echo $value->gender ?></td>
                                            <td><?php echo $value->hobby ?></td>
                                            <td><a href="edituser?userid=<?php echo $value->id ?>">Edit </a>
                                           <a href="delateuser?userid=<?php echo $value->id ?>">Delate</a></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
