<?php include 'header.php'; ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach($products as $result){  ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/img/<?php echo $result['image']; ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h3 class="=card-title"><?php echo $result['title']; ?></h3>
                        <hr>
<!--                        <p class="card-text">This is very nice product. You can purchase it.</p>-->
                        <p class="=card-text">
                            <del>Tk. 3400</del> <span class="font-weight-bold"><?php echo $result['price']; ?></span>
                        </p>
                        <hr>
                        <a href="action.php?pages=product-details&&id=<?php echo $result['id'];?>" class="btn btn-outline-success">Details</a>
                        <a href="" class="btn btn-outline-warning float-right">Add to Cart</a>
                    </div>

                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>