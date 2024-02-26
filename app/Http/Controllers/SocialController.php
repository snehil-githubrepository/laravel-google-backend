<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Validator;
use Socialite;
use Exception;
use Auth;

class SocialController extends Controller
{
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function loginWithGoogle()
    {
        try {
    
            $user = Socialite::driver('google')->stateless()->user();
            $existingUser = User::where('google_id', $user->id)->first();
            
            if($existingUser){
                Auth::login($existingUser);
                return redirect('/home');
            }else{
                $randomPassword = Str::random(12); // Generate a random password of length 12
                $hashedPassword = Hash::make($randomPassword);

                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => $hashedPassword
                ]);
                // dd($createUser);
                Auth::login($createUser);
                return redirect('/home');
            }
    
        } catch (\Throwable $th) {
          throw $th;
       }
    }
}

