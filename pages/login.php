<?php include 'header-login.php'; ?>

<style>
    body {
        background: #10707f;
    }
    .mar-top {
        margin-top: 150px!important;
    }
</style>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto  mar-top">
                <div class="card ">
                    <div class="card-header bg-success text-center text-white font-weight-bolder">Login Form</div>

                    <div class="card-body bg-info text-white">
                        <form action="action.php" method="POST">

                            <div class="form-group row">
                                <label class="col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="login_btn" class="btn btn-warning" value="Login">
                                </div>
                            </div>

                            <h4 class="text-danger text-center"><?php echo isset($message) ? $message : '' ?></h4>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include 'footer-login.php'; ?>
