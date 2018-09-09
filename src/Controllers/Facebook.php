<?php

namespace App\Controllers;

use App\Controllers\SocialInterface;

class Facebook implements SocialInterface{

    public function login() {
        echo "Login with Facebook";
    }

    public function logout() {
        echo "Logout with Facebook";
    }
}