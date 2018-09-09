<?php

namespace App\Controllers;

use App\Controllers\SocialInterface;

class Google implements SocialInterface{

    public function login() {
        echo "Login with Google";
    }

    public function logout() {
        echo "Logout with Google";
    }
}