<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    {{-- AOS --}}
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&family=Bodoni+Moda:opsz,wght@6..96,600&family=Borel&family=Cookie&family=Raleway:wght@200&family=Yeseva+One&display=swap" rel="stylesheet">

        {{-- PWA manifest --}}
<link rel="manifest" href="/manifest.json">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/profile">{{ Auth::user()->first_name }}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link" href="/">Oyinkansola Eyinade Ajibade</a>
              <a class="nav-link" href="/buy-books">Books</a>
            @if (Auth::user())
                <a class="nav-link" href="logout">Logout</a>
            @endif
            </div>
          </div>
        </div>
      </nav>

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



    <div class="user-profile text-center mt-5">
        <h2>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h2>
        {{ Auth::user()->email }}
    </div>
    <div class="text-center mt">
        @if (Auth::user()->id_card)
        <div>
            <img src="{{ asset('profile-id-card/'.Auth::user()->id_card) }}" alt="" class="id-card">


        </div>
        @else
        <div>
            <h4>Upload a valid ID Card to login on other devices</h4>
            <form class="row g-3" method="POST" action="{{ '/file/'.Auth::id() }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="input-group w-75 mx-auto">
                    <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="file">
                    <button class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04"> Submit</button>
                </div>
            </form>
        </div>
        @endif
        <marquee behavior="alternate" direction="down"><h4 class="text-center mt-5">Books Bought And Available To You To Read Now </h4></marquee>
        @if (Auth::user()->teen_girl == "what-every-teen-girl-needs-to-know")
            <div class="mt-3">
                <img src="{{ asset('images/book3.jpeg') }}" alt="" class="image-book">
            <br><br><a href="/teen-girl"><button class="rounded-pill bg-dark px-3 py-1 price buy-book">Read Book</button></a>
            </div>
        @endif

        @if (Auth::user()->soro_soke == "soro-soke")
            <div class="mt-3">
                <img src="{{ asset('images/book2.jpeg') }}" alt="" class="image-book">
            <br><br><a href="/soro-soke"><button class="rounded-pill bg-dark px-3 py-1 price buy-book">Read Book</button></a>
            </div>
        @endif

        @if (Auth::user()->how_to_edu == "how-to-give-your-teenage-daughter-sex-education")
            <div class="mt-3">
                <img src="{{ asset('images/book4.jpeg') }}" alt="" class="image-book">
            <br><br><a href="/how-to-edu"><button class="rounded-pill bg-dark px-3 py-1 price buy-book">Read Book</button></a>
            </div>
        @endif

        @if (Auth::user()->sex_edu == "sex-education-for-young-girls")
        <div class="mt-3">
            <img src="{{ asset('images/book1.jpeg') }}" alt="" class="image-book">
        <br><br><a href="/sex-edu"><button class="rounded-pill bg-dark px-3 py-1 price buy-book">Read Book</button></a>
        </div>
        @endif
    </div>
    <br>
    {{-- <div class="text-center">
        <a href="/logout"><button class="btn btn-dark my-5">Logout</button></a>
    </div> --}}

    <footer id="footer" class="fixed-bottom">
        <div class="container">
          <div class="copyright">
            All Rights Reserved. &copy; {{ date('Y') }} <br> <strong><span>Oyinkansola Eyinade Ajibade</span></strong>
          </div>
          <div class="credits">
          </div>
        </div>
      </footer><!-- End  Footer -->
          {{-- AOS --}}
          <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
          <script>
              const initial = () => setTimeout(AOS.init(), 20000)
              window.onload = initial()
          </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


    {{-- @endsection --}}
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
                    console.log('ServiceWorker registration successful with scope: ', registration.scope);
                }, function(err) {
                    console.log('ServiceWorker registration failed: ', err);
                });
            });
        }
    </script>

          <!-- Vendor JS Files -->
          <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
          <script src="assets/vendor/aos/aos.js"></script>
          <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
          <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
          <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
          <script src="assets/vendor/typed.js/typed.umd.js"></script>
          <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
          <script src="assets/vendor/php-email-form/validate.js"></script>

          <!-- Template Main JS File -->
          <script src="assets/js/main.js"></script>

</body>
</html>

