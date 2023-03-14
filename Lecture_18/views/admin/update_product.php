<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit product</h1>
        <a href="allproduct" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-arrow-left fa-sm text-white-50"></i>Back</a>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4"> 
                <!-- Card Body -->
                <div class="card-body">
                    <div class="offset-md-2 col-lg-8 my-6 mb-0 wow fadeInUp " data-wow-delay="0.1s">
                        <div class = "justify-content-center">
                            <div class="bg-primary text-center p-3 ">
                                <h1 class="mb-4" style ="color:#fff;">Update Product</h1>
                                <form method = "post">
                                    <div class="row g-3 ">
                                        <div class="col-sm-6 ">
                                            <div class="form-floating py-2">
                                                <input type="text" class="form-control border-0" value="<?php echo  $productdatabyid['Data'][0]->item_name; ?>" name="item_name" id="name" placeholder="Item Name">
                                                <!-- <label for="gname">Yor Name</label> -->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating py-2">
                                                <input type="number" class="form-control border-0" value="<?php echo  $productdatabyid['Data'][0]->item_price; ?>" name="item_price" id="price" placeholder="Item Price">
                                                <!-- <label for="gmail">Your Email</label> -->
                                            </div>
                                        </div>
                                        
                                        <div class="col-12">
                                            <div class="form-floating py-2">
                                                <textarea class="form-control border-0" name="item_desc" placeholder="Item Description"  id="Description" style="height: 100px"><?php echo  $productdatabyid['Data'][0]->item_desc; ?></textarea>
                                                <!-- <label for="message">Message</label> -->
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <div class="form-floating py-2">
                                                <input type='file' class="form-control border-0 py-5" id="imgInp" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <div class="form-floating py-2">
                                                <img id="blah"  src="#" class="form-control border-0 py-5" alt="your image" />
                                            </div>
                                        </div>
                                     
                                        <div class="col-12">
                                            <button class="btn btn-dark w-100 py-3" type="submit" value ="update_item" name="update_item">Update</button>
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
<!-- /.container-fluid -->

