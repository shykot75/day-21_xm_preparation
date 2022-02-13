<?php


namespace App\classes;


class UploadProduct
{
    protected $productName;
    protected $productPrice;
    protected $productDescription;

    protected $image;
    protected $imageName;
    protected $directory;

    protected $fileName;
    protected $file;
    protected $data;

    protected $array;
    protected $array1;
    protected $array2;

    public function __construct($post=null)
    {
//        echo "<pre>";
//        print_r($post);
//        print_r($_FILES);

        if($post){
            $this->productName        = $post['product_name'];
            $this->productPrice   = $post['product_price'];
            $this->productDescription  = $post['product_description'];
        }

    }

    public function index(){

        $this->image = $this->imageUpload();
//        echo $this->image;
//        exit();

        $this->fileName = 'upload-product.txt';
        $this->file = fopen('upload-product.txt', 'a');
        $this->data = "$this->productName,$this->productPrice,$this->productDescription,$this->image$";
        fwrite($this->file,  $this->data);
        fclose($this->file);
        return "DATA SAVED SUCCESSFULLY";
    }

    protected function imageUpload(){
        $this->imageName = $_FILES['image']['name'];
        $this->directory = 'assets/img/upload/'.$this->imageName;
        move_uploaded_file($_FILES['image']['tmp_name'] , $this->directory);
        return $this->directory;

    }

    public function getAllUploadProduct(){
        $this->fileName = 'upload-product.txt';
        $this->data = file_get_contents($this->fileName);
        $this->array = explode('$', $this->data);
//        echo "<pre>";
//        print_r($this->array) ;
//        exit();

        foreach($this->array as $key=>$value){
            $this->array2 = explode(',', $value);
//            echo "<pre>";
//            print_r($this->array2);

            if($this->array2[0]){
                $this->array1[$key]['product_name'] = $this->array2['0'];
                $this->array1[$key]['product_price'] = $this->array2['1'];
                $this->array1[$key]['product_description'] = $this->array2['2'];
                $this->array1[$key]['image'] = $this->array2['3'];
            }
        }
        //    echo "<pre>";
        //    print_r($this->array1);
        //    exit();

        return $this->array1;
    }

}