<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function profile(){
        return view('pages.profile');
    }

    public function logOut(){
        User::where('id', Auth::id())->update(['devices' => auth()->user()->devices - 1]);

        // Remove the "remember me" cookie
        $cookieName = 'remember_web_' . config('auth.defaults.guard');
        $cookie = Cookie::forget($cookieName);

        Auth::logout();

        return redirect('/buy-books')->withCookie($cookie)->with('message', 'Logout successful, See you soon!');
    }




    public function logIn(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = User::where('email', $request->email)->first();
        if(!$user){
            return redirect('/buy-books')->with('message', 'User not found!');
        }else{
            if( $user->devices >= 1 && !$user->id_card){
                User::where('email', $request->email)->update(['devices' => 1]);
                return redirect('/buy-books')->with('message', "The provided credentials in our records is already logged in on another device. Log out of the logged in device or upload a valid ID card to login on multiple devices.");
            }

            if ($user->devices == 0 && !$user->id_card) {
                $credentials = $request->only('email', 'password');
                // $remember = $request->has('remember'); // Check if "remember" checkbox is selected
                $remember = true;

                if (Auth::attempt($credentials, $remember)) {
                    User::where('email', $request->email)->update(['devices' => 1]);

                    return redirect('/buy-books')->with('message', 'Login successful, Welcome');
                }

                return back()->withErrors([
                    'email' => 'The provided credentials do not match our records.',
                    ])->withInput();
            }

            if($user->devices == 1 && $user->id_card){

                User::where('email', $request->email)->update(['devices' => 1]);
                return redirect('/buy-books')->with('message', "Sorry, Submitted ID card under Verification, try again soon");
            }

            if($user->devices == 0 && $user->id_card){
                $credentials = $request->only('email', 'password');

                $remember = true;
                if (Auth::attempt($credentials, $remember)) {
                    User::where('email', $request->email)->update(['devices' => 1]);

                    return redirect('/buy-books')->with('message', 'Login successful, Welcome');
                }

                return back()->withErrors([
                    'email' => 'The provided credentials do not match our records.',
                    ])->withInput();
            }

            if($user->devices > 1 && $user->id_card){
                $credentials = $request->only('email', 'password');

                $remember = true;
                if (Auth::attempt($credentials, $remember)) {
                    User::where('email', $request->email)->update(['devices' => $user->devices + 1]);

                    return redirect()->intended('/buy-books')->with("message", "Welcome back, $user->first_name");
                }

                return back()->withErrors([
                    'message' => 'The provided credentials do not match our records.',
                    ])->withInput();
                }
                return back()->withErrors([
                    'message' => 'The provided credentials in our records is already logged in on another device. Log out of the logged in device or upload a valid ID card to login on multiple devices.',
                ]);

            }
        }

    }
