<?php

namespace App\Http\Controllers;

use Socialite;

class SocialController extends Controller
{
    public function getInfo($social){
        return Socialite::driver($social)->redirect();
    }
    public function checkInfo($social){
        $info = Socialite::driver($social)->user();
        dd($info);
    }
}
