<?php include 'header.php'; ?>



<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="assets/img/<?php echo $result['image']; ?>" alt="" class="">
            </div>
            <div class="col-md-6">
                <h1><?php echo $result['title']; ?></h1>
                <h3>Price: <?php echo $result['price']; ?></h3>
                <p>Category: <?php echo $result['category']; ?></p>
                <p>Brand: <?php echo $result['brand']; ?></p>
                <p>Product-Description: <?php echo $result['description']; ?></p>
            </div>
        </div>
    </div>
</section>



<?php include 'footer.php'; ?>
