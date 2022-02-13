<?php


namespace App\classes;


class Product
{
    protected $products = [];

    public function getProduct(){
        return [
            0=> [
                'id'            => '1',
                'title'         => 'Hoodie',
                'description'   => 'This is a very good Hoodie. You can buy it',
                'price'         =>  '2450',
                'category'      => 'Fashion',
                'image'         => 'Hoodie.jpg',
                'brand'         => 'Old Navy'
            ],
            1=> [
                'id'            => '2',
                'title'         => 'T-Shirt',
                'description'   => 'This is a very good T-Shirt. You can buy it',
                'price'         =>  '330',
                'category'      => 'Fashion',
                'image'         => 'T-Shirt.jpg',
                'brand'         => 'Polo'
            ],
            2=> [
                'id'            => '3',
                'title'         => 'USB Pen Drive',
                'description'   => 'This is a very good Pen Drive. You can buy it',
                'price'         =>  '330',
                'category'      => 'Electronic',
                'image'         => 'USB.jpg',
                'brand'         => 'Adata'
            ]
        ];
    }

    public function getProductsById($id){
        $this->products = $this->getProduct();
        foreach ($this->products as $allProduct){
            if($allProduct['id'] == $id){
                return $allProduct;
            }
        }
    }



}