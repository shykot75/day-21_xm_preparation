<?php

session_start();

require_once('vendor/autoload.php');

use App\classes\Product;
use App\classes\Auth;
use App\classes\Dashboard;
use App\classes\Home;
use App\classes\UploadProduct;

if(isset($_GET['pages'])){


    if($_GET['pages'] == 'product') {

        $product = new Product();
        $products = $product->getProduct();
        include 'pages/product.php';
    }

    elseif($_GET['pages'] == 'product-details'){
        $products = new Product();
        $result = $products->getProductsById($_GET['id']);
        include 'pages/product-details.php';
    }

    elseif($_GET['pages'] == 'login'){

        if(isset($_SESSION['id'])){
            $dashboard = new Dashboard();
            $dashboard->dashboard();
        }
        else{
            include 'pages/login.php';
        }


    }
    elseif($_GET['pages'] == 'dashboard'){

        if(isset($_SESSION['id'])){
            include 'pages/dashboard.php';
        }
        else{
            $auth = new Auth();
            $auth->login();
        }
    }

    elseif($_GET['pages'] == 'upload-product'){

        if(isset($_SESSION['id'])){
            include 'pages/upload-product.php';
        }
        else{
            $auth = new Auth();
            $auth->login();
        }
    }

    elseif($_GET['pages'] == 'view-product'){

        if(isset($_SESSION['id'])){
            $upProduct = new UploadProduct();
            $allProducts = $upProduct->getAllUploadProduct();
            include 'pages/view-product.php';
        }
        else{
            $auth = new Auth();
            $auth->login();
        }
    }


    elseif($_GET['pages'] == 'logout'){

        $auth = new Auth();
        $auth->logout();
    }


    else{
        if(isset($_SESSION['id'])){
            $home = new Dashboard();
            $home->dashboard();
        }
        else {
            $home = new Home();
            $home->index();
        }
    }

}


elseif(isset($_POST['login_btn'])){
    $login = new Auth($_POST);
    $message = $login->verify();
    include 'pages/login.php';
}

elseif(isset($_POST['upload_product'])){
    $product = new UploadProduct($_POST);
    $messege = $product->index();
    include 'pages/upload-product.php';
}






else {
    $home = new Home();
    $home->index();
}





