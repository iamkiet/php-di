<?php

namespace App\Services;

use App\Controllers\SocialInterface;

class SocialServices {
    protected $service;

    private function __construct(SocialInterface $service) {
        $this->service = $service;
    }

    public static function initial(SocialInterface $service) {
        return new static($service);
    }

    public function login() {
        $this->service->login();
    }

    public function logout() {
        $this->service->logout();
    }
}