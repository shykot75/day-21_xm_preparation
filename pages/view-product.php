<?php include 'header-login.php'; ?>



<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">

                <div>
                    <h1 class="text-center text-warning font-weight-bold">All Blogs</h1>
                </div>

                <div class="row">
                    <?php foreach($allProducts as $singleProduct) { ?>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="<?php echo $singleProduct['image'];?>" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $singleProduct['product_name'];?></h4>
                                    <p class="text-muted"><?php echo $singleProduct['product_price'];?></p>
                                    <p class="text-justify"><?php echo $singleProduct['product_description'];?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>

            </div>
        </div>
    </div>
</section>


<?php include 'footer-login.php'; ?>
