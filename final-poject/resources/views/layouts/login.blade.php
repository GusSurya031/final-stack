<!-- <!DOCTYPE html> -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Font Montserrat -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
  <!-- Font Raleway -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="m-0 p-0 overflow-hidden font-['Montserrat'] text-[#334934]">
  <div class="h-screen grid grid-cols-1 md:grid-cols-2">
    <!-- Form Login -->
    <div class="flex min-h-full flex-col justify-center p-4">
      <!-- Header Form -->
      <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center text-[#334934] ">
        <img class="mx-auto h-10 w-auto" src="./img/logo.png" alt="mahitala-logo">
        <p class="uppercase font-bold">Mahitala</p>
        <p class="font-['Raleway'] text-[40px] font-bold">Welcome Back!</p>
        <p>Welcome back! Please enter your email</p>
      </div>

      <!-- Main Form -->
      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="/login/login-proses" method="POST">
          @csrf
          <!-- email input -->
          <div>
            <label for="email" class="block text-sm font-bold leading-6">Email</label>
            <div class="mt-2">
              <input id="email" name="email" type="email" required value="{{Session::get('email')}}" autocomplete="email" class="block w-full rounded-md p-2 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-[#334934]sm:text-sm sm:leading-6">
            </div>
          </div>

          <div>
            <!-- Password input -->
            <div class="flex items-center justify-between">
              <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
              <div class="text-sm">
                <a href="#" class="font-semibold text-[#334934] hover:text-[#334934]/60 ">Forgot password?</a>
              </div>
            </div>
            <div class="mt-2">
              <input id="password" name="password" type="password" required autocomplete="current-password" class="block w-full rounded-md p-2 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-[#334934]sm:text-sm sm:leading-6">
            </div>
          </div>

          <div>
            <!--button login -->
            <button type="submit" name="submit" class="flex w-full justify-center rounded-md bg-[#334934] px-3 py-2.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#334934]/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Log In</button>
          </div>
        </form>

        <p class="mt-10 text-center text-sm ">
          Don’t have account?
          <a href="{{route('register')}}" class="font-semibold leading-6 text-[#334934] hover:text-[#334934]/60">Register First</a>
        </p>
      </div>
    </div>
    <!-- container image -->
    <div class="hidden md:block bg-[url('./img/register-img.png')] bg-contain bg-center bg-no-repeat bg-[#334934] relative ">
      <img src="./img/side-logo-2.png" alt="" class="absolute left-[-10px] bottom-0">
      <img src="./img/side-logo-2.png" alt="" class="absolute right-[-10px] -top-[350px] -scale-x-100">
    </div>
  </div>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  @if($message = Session::get('failed'))
  <script>
    swal('{{$message}}');
  </script>
  @endif
</body>

</html>