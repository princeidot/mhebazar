<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\userinfos;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Str;



class GoogleSocialiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('social_id', $user->id)->first();

            if ($finduser) {

                Auth::login($finduser);

                return redirect('/user/account');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'social_type' => 'google',
                    'password' => encrypt('my-google')
                  
                ]);
                $user= userinfos::create([
                    'name' => $user->name,
                    'email' => $user->email,
                   	 'userid' => $user->id,
                    'social_id' => $user->id,
                    'social_type' => 'google',
                    'password' => encrypt('my-google')

                ]);
                Auth::login($newUser);
                $email= $user->email;
              $token = Str::random(64);
                return view('auth.set-password',compact('email','token'));
            }
        } catch (Exception $e) {
            
            //dd($e->getMessage());
        
           

      return  back()->with('error', 'Unable to process request you already register' );


        }
    }
}
