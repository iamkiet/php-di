<?php

require __DIR__ . "/vendor/autoload.php";

use App\Controllers\Facebook;
use App\Controllers\Google;
use App\Services\SocialServices;

SocialServices::initial((new Google()))->login();
SocialServices::initial((new Facebook()))->login();