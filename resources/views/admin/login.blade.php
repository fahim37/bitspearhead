<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CoreUI CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
      <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <title>Connexion Admin</title>
   </head>
   <body>
   </body>
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-8">
            <div class="card">
               <div class="card-header">{{ __('Login') }}</div>
               <div class="card-body">
                  <form method="POST" action="{{ route('adminLogin') }}">
                     @csrf
                     <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>
                        <div class="col-md-6">
                           <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                        </div>
                        @if ($errors->has('email'))
                           <span class="text-danger validation-message">{{ $errors->first('email') }}</span>
                        @endif
                     </div>
                     <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                        <div class="col-md-6">
                           <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">
                        </div>
                        @if ($errors->has('password'))
                        <span class="text-danger validation-message">{{ $errors->first('password') }}</span>
                        @endif
                     </div>
                     @if ($errors->has('loginError'))
                     <div class="text-danger validation-message">{{ $errors->first('loginError') }}</div>
                     @endif
                     <!-- <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                           <div class="login-form">
                              <a href="{{ url('admin/forget-password') }}">Forget Password?</a>
                           </div>
                        </div>
                     </div> -->
                     <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                           <button type="submit" class="btn btn-primary">
                           {{ __('Login') }}
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   </body>
   <!-- Optional JavaScript -->
   <script src="js/app.js"></script>
   <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
   <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
   <script src="https://unpkg.com/@popperjs/core@2"></script>
   <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

   </body>
</html>