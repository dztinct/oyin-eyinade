@extends('layouts.app')
@section('title', "Buy Books")
@section('content')

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/buy-books">Buy Books</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link" href="/">Oyinkansola Eyinade Ajibade</a>
              <a class="nav-link" href="/buy-books">Books</a>
            @if (Auth::user())
                <a class="nav-link" href="/profile">Profile</a>
                @else
                <a class="nav-link" href="/login">Login</a>
                @endif
            </div>
          </div>
        </div>
      </nav>
      <br>

      @if(session()->has('message'))
<div class="container">
    <div class="text-light bg-dark p-2 fw-bold">
        Notifications
    </div>
    <div class="text-dark fw-bold">
        <ul class="list-group list-group-flush">
            <li class="list-group-item list-group-item-dark">{{session()->get('message')}}</li>
        </ul>
    </div>
</div>
@endif

      <div class="container">
          <div class="text-center book-intro fs-5 pt-5">
              <p>
                  Every time Oyinkansola puts her pen on a paper, she strives to influence the word positively one teen at a time.
                  {{-- </p>
                    <p> --}}
                        Welcome to her library of intellectual works which touches up on every aspect of a teenager's life.
                        {{-- </p>
                            <p> --}}
                                Books aimed at raising responsible, noble and productive adults
                            </p>
                        </div>
        <div class="sub-container">
            <div  data-aos="zoom-in" class="book-container">
                    <a href="/details/what-every-teen-girl-needs-to-know">
                    <img src="{{ asset('images/book3.jpeg') }}" alt="" class="image-book">
                    <p class="text-center mt-3">
                        <span class="book-title">What Every Teengirl <br>Needs To Know</span>
                        <br><a href="/details/what-every-teen-girl-needs-to-know"><span class="details">-See details-</span></a>
                        <br> <span class="price">&#x20A6;3,000/$5</span>
                    </p>
                </a>
                </div>
            <div data-aos="zoom-in" class="book-container">
                <a href="/details/how-to-give-your-teenage-daughter-sex-education">
                <img src="{{ asset('images/book4.jpeg') }}" alt="" class="image-book">
                <p class="text-center mt-3">
                    <span class="book-title">How To Give Your Teenage Daughter Sex Education </span>
                    <br><a href="/details/how-to-give-your-teenage-daughter-sex-education"><span class="details">-See details-</span></a>
                    <br><span class="price">&#x20A6;3,500/$6</span>
                </p>
                </a>
            </div>
            <div data-aos="zoom-in" class="book-container">
                <a href="/details/soro-soke">
                <img src="{{ asset('images/book2.jpeg') }}" alt="" class="image-book">
                <p class="text-center mt-3">
                    <span class="book-title">Sòrò Sókè ~ <i>Speak Up!</i></span>
                    <br><a href="/details/soro-soke"><span class="details">-See details-</span></a>
                    <br><span class="price">&#x20A6;4,000/$7</span>
                </p>
                </a>
            </div>
            <div data-aos="zoom-in" class="book-container">
                <a href="/details/sex-education-for-young-girls">
                <img src="{{ asset('images/book1.jpeg') }}" alt="" class="image-book">
                <p class="text-center mt-3">
                    <span class="book-title">Sex Education For Young Girls</span>
                    <br><a href="/details/sex-education-for-young-girls"><span class="details">-See details-</span></a>
                    <br><span class="price">&#x20A6;1,500/$2</span>
                </p>
                </a>
            </div>
        </div>
    </div>

@endsection
