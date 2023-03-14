
<!-- Courses Start -->
<div class="container-large courses py-8 pb-0 " >
   <div class="container-fluid">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2"></h6>
                <h1 class="display-6 pt-4">Product</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <?php foreach ($allproduct_user['Data'] as $key => $value) { ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" style ="height:300px;" src="<?php echo $value->item_image; ?>" alt="">
                                <div class="courses-overlay">
                                    <a class="btn btn-outline-primary border-2" href="">More Detail</a>
                                </div>
                            </div>
                            <div class="text-center p-1 pt-3">
                                <h5 class="mb-4"><?php echo $value->item_name; ?></h5>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner<?php echo $value->item_id; ?></li>
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>
                                </ol>
                                <p><?php echo $value->item_desc; ?></p>
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">$<?php echo $value->item_price; ?></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div> 
    <!-- Courses End -->