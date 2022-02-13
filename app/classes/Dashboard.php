<?php


namespace App\classes;


class Dashboard
{
    public function dashboard(){
        header('Location: action.php?pages=dashboard');
    }
}