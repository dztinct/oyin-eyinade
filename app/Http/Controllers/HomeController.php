<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

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
        Auth::logout();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        // return $request->wantsJson()
            // ? new JsonResponse([], 204)
            // :
            return redirect('/buy-books');
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

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/buy-books');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();

        $user = User::where('email', $request->email)->first();
        if(($user->devices == 1 && $user->id_card == NULL) || ($user->devices > 1 && $user->id_card != NULL)){
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                // Authentication passed...
                return redirect()->intended('/buy-books');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }


        return back()->withErrors([
            'email' => 'The provided credentials in our records is already logged in on another device. Log out of the logged in device or upload a valid ID card to login on multiple devices.',
        ]);
    }

}
