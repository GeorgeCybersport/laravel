<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
//use Laravel\Socialite\Facades\Socialite;
//use App\Services\SocialService;

//use \SocialiteProviders\Manager\Socialite;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class LoginController extends Controller
{
    public function loginVK()
    {
        return Socialite::with('vkontakte')->redirect();
    }
    public function responseVK()
    {
        $user = Socialite::driver('vkontakte')->user();
        $user_db = User::where('email', '=', $user->getEmail())->firstOrFail();
        $user_db->name = $user->getName();
        $user_db->save();
        Auth::loginUsingId($user_db->id);
        return redirect()->route('home');
    }
}
