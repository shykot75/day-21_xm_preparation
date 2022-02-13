<?php require_once('header-login.php'); ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Mr. <?php echo $_SESSION['name']; ?> Add Your Products</h4>
                    </div>
                    <div class="card-body">
                        <?php if(isset($messege)){ ?>
                            <h2 class="text-center font-weight-bold text-success"><?php echo $messege; ?></h2>
                        <?php } ?>

                        <form action="action.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Product Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="product_name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Product Price</label>
                                <div class="col-md-8">
                                    <input type="number" name="product_price" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Product Description</label>
                                <div class="col-md-8">
                                    <textarea name="product_description" class="form-control" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Product Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control-file">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="upload_product" class="btn btn-outline-success btn-block" value="Upload">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('footer-login.php'); ?>
