<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/jata-logo.png">
    <title>
        Bomba - eNotis
    </title>
      <!--     Fonts and icons     -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
      <!-- Nucleo Icons -->
      <link href="/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
      <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
      <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
      <!-- Font Awesome Icons -->
      <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
      <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
      <!-- CSS Files -->
      <link id="pagestyle" href="../../assets/css/soft-ui-dashboard.min.css?v=1.0.3" rel="stylesheet" />
      <!-- Anti-flicker snippet (recommended)  -->
      <style>
          .async-hide {
              opacity: 0 !important
          }
  
          .imgbg {
              background-color: #18202c;
              /* background-image: url('../../../assets/img/bgbomba3.jpeg'); */
              background-repeat: no-repeat;
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;
              height: 100vh;
              overflow: auto;
          }
  
          .buttonplace {
              position: fixed;
              bottom: 10px;
              left: 10px;
              right: 10px;
          }
      </style>
      

{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot> --}}

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />


    <body class="g-sidenav-show  bg-gray-100">
            <!-- Extra details for Live View on GitHub Pages -->
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
    
            
        <form method="POST"  action="{{ route('login.custom') }}">
            @csrf

            <div class="imgbg text-center">
                <div class="row">
                    <div class="col-xl-12 mt-4">
                        <div class="form-group">
                             {{-- <x-label for="email" :value="__('Email')" class="form-control-label text-white"/> --}}
                            <input class="form-control w-100" type="email" placeholder="Email" id="email" required autofocus name="email" / >
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
            <div class="col-xl-12">
                        <div class="form-group">
                            <label class="form-control-label text-white" for="password">Kata Laluan</label>
                            <input class="form-control w-100" type="password" placeholder="Kata Laluan" id="password" name="password" required autocomplete="current-password" />
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="buttonplace col-xl-12">
                        {{-- <a href="/dashboard" class="btn btn-success w-80 mt-3 mb-2">Log Masuk</a> --}}
                        <button class="btn btn-success w-80 mt-3 mb-2" type="submit">Log Masuk</button> 
                        <a href="/" class="btn btn-secondary w-80" type="button">Kembali</a>
                    </div>
                </div>

            {{-- <!-- Email Address -->
            <div>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div> --}}

            <!-- Password -->
            {{-- <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div> --}}

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                {{-- <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button> --}}
            </div>
        </form>
    {{-- </x-auth-card>
</x-guest-layout> --}}
