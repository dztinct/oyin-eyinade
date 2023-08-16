<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Purchase Registration</title>
    <link href="{{asset('./assets/css/style.css')}}" rel="stylesheet">
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
          <a class="navbar-brand" href="/register">Book Purchase Registration</a>
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

        <style>
            textarea:focus,
            input[type="text"]:focus,
            input[type="password"]:focus,
            input[type="datetime"]:focus,
            input[type="datetime-local"]:focus,
            input[type="date"]:focus,
            input[type="month"]:focus,
            input[type="time"]:focus,
            input[type="week"]:focus,
            input[type="number"]:focus,
            input[type="email"]:focus,
            input[type="url"]:focus,
            input[type="search"]:focus,
            input[type="tel"]:focus,
            input[type="color"]:focus,
            .uneditable-input:focus {
            border-color: rgba(0, 0, 0.8);
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(0, 0, 0, 0.8);
            outline: 0 none;
            }
        </style>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Register') }}</div> --}}

                <div class="card-body register-box">
                    <form method="POST" action="/payment-success" id="paymentForm">
                        @csrf

                        <div class="row mb-3">
                            <label for="first-name" class="col-md-4 col-form-label text-md-end">First Name</label>

                            <div class="col-md-6">
                                <input  name="first-name" id="first-name" type="text" class="form-control @error('first-name') is-invalid @enderror" value="{{ old('first-name') }}" required autocomplete="first-name" autofocus>

                                @error('first-name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="last-name" class="col-md-4 col-form-label text-md-end">Last Name</label>

                            <div class="col-md-6">
                                <input name="last-name" id="last-name" type="text" class="form-control @error('last-name') is-invalid @enderror" name="last-name" value="{{ old('last-name') }}" required autocomplete="last-name" autofocus>

                                @error('last-name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                            <div class="col-md-6">
                                <input id="email-address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email-address') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="amount" class="col-md-4 col-form-label text-md-end">Amount</label>

                            <div class="col-md-6">
                                <input id="amount" type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ $price }}" required autocomplete="amount" disabled>

                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-dark" onclick="payWithPaystack(event)">
                                    Pay
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://js.paystack.co/v1/inline.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  const paymentForm = document.getElementById('paymentForm');
  paymentForm.addEventListener("submit", payWithPaystack, false);

  function payWithPaystack(e) {
    e.preventDefault();

    var firstName = $('#first-name').val();
    var lastName = $('#last-name').val();
    var password = $('#password').val();

    let handler = PaystackPop.setup({
      key: 'pk_test_966d5323c1e0eb56db5b4cf73d646648449b28a9', // Replace with your public key
      email: document.getElementById("email-address").value,
      amount: document.getElementById("amount").value * 100,
      ref: '' + Math.floor((Math.random() * 1000000000) + 1),
      onClose: function () {
        alert('Window closed.');
      },
      callback: function (response) {
        let reference = response.reference;
        $.ajax({
          url: "{{URL::to('/verify-payment')}}/" + reference,
          method: 'GET',
          success: function (response) {
            console.log(response[0]);
            document.getElementById('first-name').value = "";
            document.getElementById('last-name').value = "";
            document.getElementById('password').value = "";
            document.getElementById('email-address').value = "";
            document.getElementById('password-confirm').value = "";
            document.getElementById('amount').value = "";

            window.location.href = "/buy-books"
            const data = response[0];
            if (data.status == true) {
              $.ajax({
                url: "{{URL::to('/payment-success')}}",
                method: 'POST',
                data: {
                  _token: $('input[name="_token"]').val(),
                  email: response[0].data.customer.email,
                  firstName: firstName,
                  lastName: lastName,
                  amount: response[0].data.amount,
                  password: password
                },
                // success: function (response2) {
                  // Handle the response from the second AJAX request
                //   console.log('Response from the second request:', response2);
                  // ... do something with the response ...
                // },
                // error: function (xhr, status, error) {
                //   console.error('Error in second request:', error);
                // }
              });
            } else {
              $('form').prepend('<h2>Payment Verification Failed</h2>');
            }
          },
          error: function (xhr, status, error) {
            console.error('Error in first request:', error);
          }
        });
      }
    });

    handler.openIframe();
  }
</script>


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

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
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
