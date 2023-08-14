<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buy Book</title>
    {{-- <link href="assets/css/style.css" rel="stylesheet"> --}}
    <link href="{{ asset('./assets/css/style.css') }}" rel="stylesheet">
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
          <a class="navbar-brand" href="/soro-soke">
            @if($book->title == 'soro-soke')
                Sòrò Sókè
            @endif
            @if($book->title == 'sex-education-for-young-girls')
                Sex Education For Young Girls
            @endif
            @if($book->title == 'how-to-give-your-teenage-daughter-sex-education')
                How To Give Your Teenage Daughter <br/> Sex Education
            @endif
            @if($book->title == 'what-every-teen-girl-needs-to-know')
                What Every Teengirl Needs To know
            @endif
        </a>
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
    <div class="container">

        @yield('content')
    </div>
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

</body>
</html>
