<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="content-language" content="en" />
    <meta name="description" content="ICT Cortex Library - project for high school students..." />
    <meta name="keywords" content="ict cortex, cortex, bild, bildstudio, highschool, students, coding" />
    <meta name="author" content="bildstudio" />
    <!-- End Meta -->

    <!-- Title -->
    <title>Login | Library - ICT Cortex student project</title>
    <link rel="shortcut icon" href="/img/library-favicon.ico" type="image/vnd.microsoft.icon" />
    <!-- End Title -->

    <!-- Styles -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />    <!-- End Styles -->
</head>

<body>
<!-- Main content -->
<main class="h-screen small:hidden bg-login">
    <div class="flex items-center justify-center pt-[13%]">
        <div class="w-full max-w-md">
            <form class="px-12 pt-6 pb-4 mb-4 bg-white rounded shadow-lg" method="POST" action="{{ route('login') }}">
             @csrf
             @method('POST')
                <div class="flex justify-center py-2 mb-4 text-2xl text-gray-800 border-b-2">
                    Online Biblioteka - Login
                </div>
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-normal text-gray-700" for="username">
                        Email
                    </label>
                    <input
                        class="w-full @error('email') is-invalid @enderror px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        name="email"  type="email" required autofocus placeholder="Email" value="{{ old('email') }}"  autofocus >
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-normal text-gray-700" for="password">
                        Password
                    </label>
                    <input
                        class="w-full @error('password') is-invalid @enderror px-3 py-2 mb-3 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                         type="password" placeholder="Password" name="password" required autocomplete="current-password"
                         />
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="inline-block px-4 py-2 text-white bg-blue-500 rounded shadow-lg btn-animation hover:bg-blue-600 focus:bg-blue-700">
                        {{ __('Login') }}
                    </button>&nbsp;&nbsp;
                    <a href="{{route('register')}}" class="inline-block text-sm font-normal text-blue-500 align-baseline hover:text-blue-800" href="{{ route('password.request') }}">
                            Register &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |
                        </a><br>
                    @if (Route::has('password.request'))
                        <a class="inline-block text-sm font-normal text-blue-500 align-baseline hover:text-blue-800" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
                <p class="text-xs text-center mt-[30px] text-gray-500">
                    &copy;2021 ICT Cortex. All rights reserved.
                </p>
            </form>
        </div>
    </div>
</main>
<!-- End Main content -->
<!-- Notification for small devices -->
<!-- Notification for small devices -->
<div class="py-[20px] hidden small:block bg-gradient-to-r  from-red-500 mt-[100px]">
    <h1 class="text-[40px] font-medium text-center text-white">
        Trenutno nedostupno...
    </h1>
    <p class="text-[17px] text-white text-center">
        Molimo Vas da koristite vecu rezoluciju.
    </p>
</div>
<!-- Scripts -->
<script src="/js/jquery.min.js " defer=""></script>
<script src="/js/app.js " defer=""></script>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<!-- File upload -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://unpkg.com/create-file-list"></script>    <!-- End Scripts -->
</body>
</html>