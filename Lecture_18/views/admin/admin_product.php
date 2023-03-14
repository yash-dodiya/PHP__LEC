<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Products</title>
    <style>
        body{background:#eee}
        .ratings i{font-size: 16px;color: red}
        .strike-text{color: red;text-decoration: line-through}
        .product-image{width: 100%}
        .dot{height: 7px;width: 7px;margin-left: 6px;margin-right: 6px;margin-top: 3px;background-color: blue;border-radius: 50%;display: inline-block}
        .spec-1{color: #938787;font-size: 15px}
        h5{font-weight: 400}
        .para{font-size: 16px}
    </style>
    <script src=""></script>
</head>
<body>
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Poducts</h1>
            <a href="add_product" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i>Add product</a>
        </div>
        <?php foreach ($allproduct['Data'] as $key => $value) { ?>
            <div class="container mt-6 mb-6">
                <div class="d-flex justify-content-center row">
                    <div class="col-md-10">
                        <div class="row p-2 bg-white border rounded">
                            <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="<?php echo $value->item_image; ?>"></div>
                            <div class="col-md-6 mt-1">
                                <h5><?php echo $value->item_id; ?></h5><h5><?php echo $value->item_name; ?></h5>

                                <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                                <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                                <div class="d-flex flex-row">
                                    <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                                </div>
                                <p class="text-justify text-truncate para mb-0"><?php echo $value->item_desc; ?><br><br></p>
                            </div>
                            <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                <div class="d-flex flex-row align-items-center">
                                    <h4 class="mr-1">$<?php echo $value->item_price; ?></h4><span class="strike-text">$<?php echo $value->item_price; ?></span>
                                </div>
                                <h6 class="text-success">Free shipping</h6>

                                <div class="d-flex flex-column mt-4">

                                    <!-- <button class="btn btn-primary btn-sm" type="button">Edit Product</button>
                                    <button class="btn btn-outline-primary btn-sm mt-2" type="button">Delete Product</button> -->

                                    <a href = "editproduct?item_id=<?php echo $value->item_id; ?>" class="btn btn-primary btn-sm">Edit Product</a>
                                    <a href ="deleteproduct?item_id=<?php echo $value->item_id; ?>" class="btn btn-outline-primary btn-sm mt-2">Delete Product</a>
                                </div>                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }echo "<br>"; ?>
    </div>
</body>
</html>