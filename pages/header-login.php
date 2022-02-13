<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo isset($_SESSION['name']) ? $_SESSION['name'] : 'User' ?>'s Dashboard </title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


<?php if(isset($_SESSION['id']))  { ?>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">LOGO</a>

            <ul class="navbar-nav ml-auto">

                <li><a href="action.php?pages=dashboard" class="nav-link ">Home</a></li>

                <li><a href="action.php?pages=series" class="nav-link ">Series</a></li>

                <li><a href="action.php?pages=upload-product" class="nav-link ">Upload Products</a></li>
                <li><a href="action.php?pages=view-product" class="nav-link ">View Products</a></li>

                <li class="dropdown">
                    <a href="action.php?pages=register" class="nav-link dropdown-toggle" data-toggle="dropdown">Profile: <?php echo $_SESSION['name']?></a>
                    <ul class="dropdown-menu">
                        <li><a href="action.php?pages=logout" class="dropdown-item">Logout</a></li>
                        <li><a href="" class="dropdown-item"><?php echo $_SESSION['id']?></a></li>
                        <li><a href="" class="dropdown-item"><?php echo $_SESSION['email']?></a></li>
                        <li><a href="" class="dropdown-item"><?php echo $_SESSION['password']?></a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>

<?php } ?>
