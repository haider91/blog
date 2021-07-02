<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{

    public function callback($service){
        return $user = Socialite::with($service)->user();
    }

    public function redirect($service){
        return Socialite::driver($service)->redirect();
    }
}
