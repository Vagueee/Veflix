<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Veflix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="antialiased" style="background-color: background: #F1F1F1;
background: -webkit-linear-gradient(top right, #F1F1F1, #1766D6);
background: -moz-linear-gradient(top right, #F1F1F1, #1766D6);
background: linear-gradient(to bottom left, #F1F1F1, #1766D6)";>
<section class="vh-100">

    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
  
                   <!-- Session Status -->
                 <x-auth-session-status class="mb-4" :status="session('status')" />

                 <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}">
                 @csrf

                 <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Log In</p>

            <!-- Email Address -->
            <div class="form-outline mb-4">
                <div class="form-outline mb-4">Email
                    <input id="email" class="block mt-1 w-full form-control form-control-lg" type="email" name="email" :value="old('email')" required autofocus />
                    <label class="form-label " for="email" :value="__('Email')"></label>
                </div>
            </div>

            <!-- Password -->
             <div class="form-outline ">
                <div class="mt-4">Password
                    <input id="password" class="block mt-1 w-full form-control form-control-lg"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                    <label class="form-label" for="password" :value="__('Password')"></label>
                </div>           
            </div>
        
            

            <!-- Remember Me -->
            <div class="block mb-4 ">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                @if (Route::has('password.request'))
                 <p class="small mb-5 pb-lg-2"><a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">Forgot password?</a></p>
                    {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a> --}}
                @endif
               
                <x-button class="btn btn-primary btn-lg mx-4 mb-3 mb-lg-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2 " style="background-color: white">
  
                  <img src="{{ '../image/Veflixnobg.png' }}" class="img-fluid" alt="Sample image" style="margin-left: 60px">
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
</body>
</html>

</body>
</html>
