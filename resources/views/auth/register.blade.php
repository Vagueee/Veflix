<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | Veflix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: background: #F1F1F1;
background: -webkit-linear-gradient(top right, #F1F1F1, #1766D6);
background: -moz-linear-gradient(top right, #F1F1F1, #1766D6);
background: linear-gradient(to bottom left, #F1F1F1, #1766D6)";>
<section class="vh-100">

    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100" >
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1" >
  
                   <form method="POST" action="{{ route('register') }}">
                    @csrf
        
                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register</p>
                    <!-- Name -->
                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">Name
                          <input  id="name" class="block mt-1 w-full form-control" type="text" name="name" :value="old('name')" required autofocus/>
                          <label for="name" class="form-label" :value="__('Name')"></label>
                        </div>
                      </div>
                    <!-- Email Address -->
                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">Email
                            <input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required />
                            <label for="email" class="form-label" :value="__('Email')"></label>
                        </div>
                    </div>
        
                     <!-- Password -->
                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">Password
                                <input id="password" class="block mt-1 w-full form-control"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password"  />
                                <label class="form-label" for="password" :value="__('Password')" ></label>
                            </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">Confirm your password
                                <input d="password_confirmation" class="block mt-1 w-full form-control"
                                                type="password"
                                                 name="password_confirmation" required />
                                <label class="form-label" for="password_confirmation" :value="__('Confirm Password')"></label>
                            </div>
                    </div>
    
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                        
                        <x-button class="btn btn-primary btn-lg  mx-4 mb-3 mb-lg-4">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                  </form>
  
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2" style="background-color: ";    >          
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
