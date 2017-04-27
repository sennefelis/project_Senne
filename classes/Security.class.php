<?php

class Security
{
    function __construct()
    {
    }
    public function isLoggedIn(){
        if(isset($_SESSION['email']) && $_SESSION['email'] !=''){
            return true;
        }else{
            return false;
        }
    }
}