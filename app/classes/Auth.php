<?php


namespace App\classes;
use App\classes\User;
use App\classes\Dashboard;


class Auth
{

    protected $email;
    protected $password;

    protected $user;
    protected $users;

    protected $dashboard;


    public function __construct($post=null)
    {
        $this->email = $post['email'];
        $this->password = $post['password'];
    }

    public function login(){
        header('Location: action.php?pages=login');
    }

    public function verify(){
//        echo $this->email;
//        echo $this->password;

        $this->user = new User();
        $this->users = $this->user->getAllUser();
        foreach($this->users as $data){
            if($this->email == $data['email']  && $this->password == $data['password'] ) {

                session_start();
                $_SESSION['id']  = $data['id'];
                $_SESSION['name'] = $data['name'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['password'] = $data['password'];

                $this->dashboard = new Dashboard();
                $this->dashboard->dashboard();


            }
        }
        return "Sorry!! Email or Password invalid";




    }

    public function logout(){
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        $this->login();
    }
}