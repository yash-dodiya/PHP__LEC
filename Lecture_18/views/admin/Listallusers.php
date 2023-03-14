
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Users</h1>
        <a href="newuseradd" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-user-plus fa-sm text-white-80"></i> Add New User</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4"> 
                <!-- Card Body -->
                <div class="card-body">
                    <form method="post">
                        <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" style="padding-left: 38%;">
                            <div class="input-group">
                                <input type="text" name="search_value" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" require="">
                                <div class="input-group-append">
                                    <button type="submit" value="search" name ="search" class="btn btn-primary">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <form>
                    
                    <?php
                        if(isset($search_result['Data'][0])){ ?>
                                <a href="allusers" class="btn btn-primary d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin-bottom: 6px; height:37px;">
                                    <i class="fas fa-window-close fa-sm text-white-80"></i>
                                </a>
                          
                            <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>User_name</th>
                                    <th>Email</th>
                                    <th>Contact_number</th>
                                    <th>Date_of_birth</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>User_name</th>
                                    <th>Email</th>
                                    <th>Contact_number</th>
                                    <th>Date_of_birth</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php 
                                // dd($Allusers);
                                foreach ($search_result['Data'] as $key => $value) { ?>
                                    <tr>
                                        <td><?php echo $value->id ?></td>
                                        <td><?php echo $value->user_name ?></td>
                                        <td><?php echo $value->email ?></td>
                                        <td><?php echo $value->contact_number ?></td>
                                        <td><?php echo $value->date_of_birth ?></td>
                                        <td>
                                            <a href = "edituser?userid=<?php echo $value->id ?>" class="btn btn-primary mr-3 ml-4"><i class="fas fa-edit"></i></a>
                                            <a href ="deleteuser?id=<?php echo $value->id ?>" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <?php }else{ ?>
                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>User_name</th>
                                        <th>Email</th>
                                        <th>Contact_number</th>
                                        <th>Date_of_birth</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>User_name</th>
                                        <th>Email</th>
                                        <th>Contact_number</th>
                                        <th>Date_of_birth</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php 
                                    // dd($Allusers);
                                    foreach ($Allusers['Data'] as $key => $value) { ?>
                                        <tr>
                                            <td><?php echo $value->id ?></td>
                                            <td><?php echo $value->user_name ?></td>
                                            <td><?php echo $value->email ?></td>
                                            <td><?php echo $value->contact_number ?></td>
                                            <td><?php echo $value->date_of_birth ?></td>
                                            <td>
                                                <a href = "edituser?userid=<?php echo $value->id ?>" class="btn btn-primary mr-3 ml-4"><i class="fas fa-edit"></i></a>
                                                <a href ="deleteuser?id=<?php echo $value->id ?>" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

