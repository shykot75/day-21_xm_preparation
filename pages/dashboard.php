<?php include 'header-login.php'; ?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <h2 class="">Welcome <?php echo $_SESSION['name'];?> </h2>
                <h2 class="">Email: <?php echo $_SESSION['email'];?> </h2>
                <h2 class="">ID:  <?php echo $_SESSION['id'];?> </h2>

            </div>
        </div>
    </div>
</section>

<?php include 'footer-login.php'; ?>
