<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use App\Models\SexEdu;
// use App\Models\HowEdu;
use App\Models\HowToSexEdu;
use App\Models\TeenGirl;
use App\Models\SoroSoke;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function home(){
        return view('pages.book');
    }

    public function bookDetails($title){
        $book = Book::where('title', $title)->first();

        return view('pages.book-details', [
            'book' => $book
        ]);
    }
    public function verifyPayment($reference){
        $secret = "sk_test_b5baca5cf564ac66a202bd05b8b47ac1ef7f710c";
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$reference,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,

            //TAKEOFF ON LIVE HOSTING
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,

            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer $secret",
            "Cache-Control: no-cache",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $newData = json_decode($response);

        return [$newData];
    }

    public function paymentSuccess(Request $request){
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'password' => 'required',
            'amount' => 'required',
        ]);


        $userDetails = ([
            'first_name' => $request->input('firstName'),
            'last_name' => $request->input('lastName'),
            'password' => bcrypt($request->input('password')),
            'email' => $request->input('email')
        ]);

        if($request->input('amount') == 300000){
            $userDetails['teen_girl'] = "what-every-teen-girl-needs-to-know";
            User::create($userDetails);
            return redirect('buy-books')->with('message', 'Book purchase successful and ready!');
        }

        if($request->input('amount') == 350000){
            $userDetails['how_to_edu'] = "how-to-give-your-teenage-daughter-sex-education";
            User::create($userDetails);
            return redirect('buy-books')->with('message', 'Book purchase successful and ready!');
        }

        if($request->input('amount') == 400000){
            $userDetails['soro_soke'] = "soro-soke";
            User::create($userDetails);
            return redirect('buy-books')->with('message', 'Book purchase successful and ready!');
        }

        if($request->input('amount') == 150000){
            $userDetails['sex_edu'] = "sex-education-for-young-girls";
            User::create($userDetails);
            return redirect('buy-books')->with('message', 'Book purchase successful and ready!');
        }
        else{
            return redirect('buy-books')->with('message', "Sorry, Book still not available!, You shouldn't have tampered with the price of the book given by default!");
        }
    }

    public function anotherPaymentSuccess(Request $request){
        $user = User::where('email', $request->email)->first();
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'password' => 'required',
            'amount' => 'required',
        ]);

        if($request->input('amount') == 300000 && $user){
            $user->update([
                'amount' => 300000,
                'teen_girl' => "what-every-teen-girl-needs-to-know"
            ]);

            $user->save();

            return redirect('/buy-books')->with('message', 'Book purchase successful and ready!');
        }

        if($request->input('amount') == 350000 && $user){
            $user->update([
                'amount' => 350000,
                'how_to_edu' => "how-to-give-your-teenage-daughter-sex-education"
            ]);

            $user->save();

            return redirect('/buy-books')->with('message', 'Book purchase successful and ready!');
        }

        if($request->input('amount') == 400000){
            $user->update([
                'amount' => 400000,
                'soro_soke' => "soro-soke"
            ]);

            $user->save();

            return redirect('/buy-books')->with('message', 'Book purchase successful and ready!');
        }

        if($request->input('amount') == 150000){
            $user->update([
                'amount' => 150000,
                'sex_edu' => "sex-education-for-young-girls"
            ]);

            $user->save();

            return redirect('/buy-books')->with('message', 'Book purchase successful and ready!');
        }
        else{
            return redirect('buy-books')->with('message', "Sorry, Book still not available!, You shouldn't have tampered with the price of the book given by default!");
        }
    }

    public function howToEdu(){
        $perPage = 1;
        $currentPage = request('page', 1);

        $paginatedResults = HowToSexEdu::paginate($perPage, ['*'], 'page', $currentPage);

        $pages = $paginatedResults->onEachSide(1);


        return view('book-pages.how-to-edu', [
            'pages' => $pages
        ]);
    }

    public function sexEdu(){
        $perPage = 1;
        $currentPage = request('page', 1);

        $paginatedResults = sexEdu::paginate($perPage, ['*'], 'page', $currentPage);

        $pages = $paginatedResults->onEachSide(1);

        return view('book-pages.sex-edu', [
            'pages' => $pages
        ]);
    }

    public function teenGirl(){
        $perPage = 1;
        $currentPage = request('page', 1);

        $paginatedResults = TeenGirl::paginate($perPage, ['*'], 'page', $currentPage);

        $pages = $paginatedResults->onEachSide(1);

        return view('book-pages.teen-girl', [
            'pages' => $pages
        ]);
    }

    public function soroSoke(){
        $perPage = 1;
        $currentPage = request('page', 1);

        $paginatedResults = SoroSoke::paginate($perPage, ['*'], 'page', $currentPage);

        $pages = $paginatedResults->onEachSide(1);

        return view('book-pages.soro-soke', [
            'pages' => $pages
        ]);
    }

    public function payment($title){
        if($title == 'soro-soke'){
            return view('pages.payment', [
                'price' => 4000
            ]);
        }

        if($title == 'sex-education-for-young-girls'){
            return view('pages.payment', [
                'price' => 1500
            ]);
        }

        if($title == 'what-every-teen-girl-needs-to-know'){
            return view('pages.payment', [
                'price' => 3000
            ]);

        }

        if($title == 'how-to-give-your-teenage-daughter-sex-education'){
            return view('pages.payment', [
                'price' => 3500
            ]);
        }
    }
    public function anotherPayment($title, $id){
        $user = User::where('id', $id)->first();
        if($title == 'soro-soke'){
            return view('pages.another-payment', [
                'user'=> $user,
                'price' => 4000
            ]);
        }

        if($title == 'sex-education-for-young-girls'){
            return view('pages.another-payment', [
                'user'=> $user,
                'price' => 1500
            ]);
        }

        if($title == 'what-every-teen-girl-needs-to-know'){
            return view('pages.another-payment', [
                'user'=> $user,
                'price' => 3000
            ]);

        }

        if($title == 'how-to-give-your-teenage-daughter-sex-education'){
            return view('pages.another-payment', [
                'user'=> $user,
                'price' => 3500
            ]);
        }
    }

    public function file(Request $request, $id){
        $idCard = uniqid() . '-' . 'id_card' . '.' . $request->file->extension();
        $request->file->move(public_path('profile-id-card'), $idCard);

        $formFields['id_card'] = $idCard;

        User::where('id', $id)->update($formFields);

        return redirect('/profile')->with('message', 'ID card has been uploaded successfully, you can now login and read on multiple devices');
    }
}
