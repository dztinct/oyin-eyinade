@extends('layouts.apps')

@section('content')
<div class="single-overall-container mt-5">
    <div class="text-center" data-aos="flip-left">
        <img src="{{ asset('images/'.$book->book_image) }}" alt="Soro Soke" class="single-teengirl-image image-shadow">
            <br><br><span class="price">&#x20A6;{{ $book->price_in_naira }}/${{ $book->price_in_dollars }}</span>

            @if (Auth::user() && (($book->title == Auth::user()->teen_girl)))
            <br><br><a href="/teen-girl"><button class="rounded-pill bg-dark px-3 py-1 price buy-book">Read Book</button></a>
            @elseif (Auth::user() && (($book->title == Auth::user()->how_to_edu)))
            <br><br><a href="/how-to-edu"><button class="rounded-pill bg-dark px-3 py-1 price buy-book">Read Book</button></a>
            @elseif (Auth::user() && (($book->title == Auth::user()->soro_soke)))
            <br><br><a href="/soro-soke"><button class="rounded-pill bg-dark px-3 py-1 price buy-book">Read Book</button></a>
            @elseif (Auth::user() && (($book->title == Auth::user()->sex_edu)))
            <br><br><a href="/sex-edu"><button class="rounded-pill bg-dark px-3 py-1 price buy-book">Read Book</button></a>
            @elseif(Auth::user())
            <br><br><a href="{{ '/payment/'.$book->title.'/'.Auth::id()}}"><button class="rounded-pill bg-dark px-3 py-1 price buy-book">Buy E-Book Now</button></a>
            @else
            <br><br><a href="{{ '/payment/'.$book->title}}" onClick="return verifyAccount()" id="payCheck"><button class="rounded-pill bg-dark px-3 py-1 price buy-book">Buy E-Book Now</button></a>
            @endif

    </div>
    <div class="single-details-para" data-aos="fade-left">
        {{ $book->details }}
    </div>
</div>
</div>

<script>
    const verifyAccount = () => {
    let check = confirm("ALREADY BOUGHT BOOK(S) BEFORE AND WANT TO PURCHASE ANOTHER IN THE SAME ACCOUNT?, CLICK 'Cancel' AND LOG IN INSTEAD BEFORE YOU PURCHASE ANOTHER BOOK TO AVOID PAYMENT ERROR!. CLICK 'OK' TO PROCEED IF YOU WANT TO USE A NEW EMAIL ADDRESS FOR THIS PURCHASE THEREBY CREATING A NEW ACCOUNT.");
    if (check) {
        return true;
    } else {
        return false;
    }
}



</script>

@endsection
