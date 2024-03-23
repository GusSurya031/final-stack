<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
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
    <!-- container image -->
    <div class="hidden md:block bg-[url('./img/register-img.png')] bg-contain bg-center bg-no-repeat bg-[#334934] relative ">
      <img src="./img/side-logo-2.png" alt="" class="absolute left-[-10px] bottom-0">
      <img src="./img/side-logo-2.png" alt="" class="absolute right-[-10px] -top-[350px] -scale-x-100">
    </div>
    <!-- Form Login -->
    <div class="flex min-h-full flex-col justify-center p-4">
      <!-- Header Form -->
      <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center text-[#334934] ">
        <img class="mx-auto h-10 w-auto" src="./img/logo.png" alt="mahitala-logo">
        <p class="uppercase font-bold">Mahitala</p>
        <p class="font-['Raleway'] text-[40px] font-bold">Welcome!</p>
        <p>Please filled out data first before login</p>
      </div>

      <!-- Main Form -->
      <div class="mt-6 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-4" action="/register-proses" method="POST">
          @csrf
          <!-- email input -->
          <div>
            <label for="email" class="block text-sm font-bold leading-6">Email</label>
            <div class="mt-2">
              <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md p-2 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-[#334934]sm:text-sm sm:leading-6">
            </div>
          </div>

          <!-- No Telepon input -->
          <div>
            <label for="no_telepon" class="block text-sm font-bold leading-6 text-gray-900">No Telepon</label>
            <div class="mt-2">
              <input id="no_telepon" name="no_telepon" type="text" autocomplete="current-no-telepon" required class="block w-full rounded-md p-2 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-[#334934]sm:text-sm sm:leading-6">
            </div>
          </div>

          <!-- Password input -->
          <div>
            <label for="name" class="block text-sm font-bold leading-6 text-gray-900">Username</label>
            <div class="mt-2">
              <input id="name" name="name" type="text" autocomplete="current-name" required class="block w-full rounded-md p-2 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-[#334934]sm:text-sm sm:leading-6">
            </div>
          </div>

          <!-- Password input -->
          <div>
            <label for="password" class="block text-sm font-bold leading-6 text-gray-900">Password</label>
            <div class="mt-2">
              <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md p-2 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-[#334934]sm:text-sm sm:leading-6">
            </div>
          </div>

          <!--button login -->
          <div>
            <button type="submit" name="submit" class="flex w-full justify-center rounded-md bg-[#334934] px-3 py-2.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#334934]/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
          </div>
        </form>

        <p class="mt-10 text-center text-sm ">
          Alreadry have account?
          <a href="{{route('login')}}" class="font-semibold leading-6 text-[#334934] hover:text-[#334934]/60">Login Here</a>
        </p>
      </div>
    </div>

  </div>
</body>

</html>