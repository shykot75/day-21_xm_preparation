<?php


namespace App\classes;


class User
{
    public function getAllUser(){
        return [
            0 => [
                'id'        => '552',
                'name'      => 'Shykot Hasan',
                'email'     => 'shykot@gmail.com',
                'password'  => '1234'
            ],
            1 => [
                'id'        => '553',
                'name'      => 'Habibur Rahman',
                'email'     => 'habib@gmail.com',
                'password'  => '5678'
            ],
        ];

    }
}