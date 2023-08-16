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
    <div class="pages-container">
        @foreach ($pages as $page)
        <div class="text-center">
            <img src="{{ asset('images/pages/'.$page->image) }}" alt="book-image" class="pages-image">
        </div>
        <div class="d-flex justify-content-center my-3">
            {{ $pages->links() }}
        </div>
    </div>
@endforeach

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
