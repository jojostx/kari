<!DOCTYPE html>
<html lang="en" dir="ltr" class="antialiased bg-gray-100 js-focus-visible">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Sign In - {{ config('app.name', 'KARI INVESTMENT') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://use.typekit.net/hph2pnz.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Source+Sans+Pro:wght@300;400;600&Vesper+Libre:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet" />



  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-dm">
  <div class="flex items-center justify-center min-h-screen text-gray-900 bg-gray-100">
    <div class="w-screen max-w-md p-2 space-y-8">
      
      <div class="flex items-center justify-center">
        <a href="/" target="_blank" rel="noopener noreferrer">
          <x-application-logo class="w-12 h-12 text-gray-500 fill-current" />
        </a>
      </div>
      
      <form class="p-8 space-y-8 bg-white border border-gray-300 shadow rounded-2xl">
        <h2 class="text-2xl font-bold tracking-tight text-center">
          Sign in to your account
        </h2>

        <div class="grid grid-cols-1 gap-6">
          <div class="col-span-1 ">
            <div>

              <div class="space-y-2">
                <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                  <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="email">
                    <span class="text-sm font-medium leading-4 text-gray-700">
                      Email address
                      <sup class="font-medium text-red-700">*</sup>
                    </span>
                  </label>
                </div>
                <div class="flex items-center space-x-1 group">
                  <div class="flex-1">
                    <input type="email" autocomplete="on" id="email" required class="block w-full h-10 duration-75 border-gray-300 rounded-lg shadow-sm focus:border-blue-600 focus:ring-1 focus:ring-inset focus:ring-blue-600 focus:ring-opacity-30" />
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-span-1 ">
            <div>

              <div class="space-y-2">
                <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                  <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="password">
                    <span class="text-sm font-medium leading-4 text-gray-700">
                      Password
                      <sup class="font-medium text-red-700">*</sup>
                    </span>
                  </label>

                </div>

                <div class="flex items-center space-x-1 group">

                  <div class="flex-1">
                    <input type="password" id="password" required class="block w-full h-10 duration-75 border-gray-300 rounded-lg shadow-sm focus:border-blue-600 focus:ring-1 focus:ring-inset focus:ring-blue-600 focus:ring-opacity-30" />
                  </div>

                </div>


              </div>
            </div>

          </div>
          <div class="col-span-1 ">
            <div>

              <div class="space-y-2">
                <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
                  <label class="inline-flex items-center space-x-3 rtl:space-x-reverse" for="remember">
                    <input id="remember" type="checkbox" class="text-blue-600 duration-75 border-gray-300 rounded shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-600 focus:ring-opacity-30" />

                    <span class="text-sm font-medium leading-4 text-gray-700">
                      Remember me
                    </span>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>


        <button type="submit" class="inline-flex items-center justify-center w-full px-4 font-medium tracking-tight text-white bg-gray-900 rounded-lg shadow focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset hover:bg-gray-800 focus:bg-gray-700 focus:ring-offset-blue-700 h-9 focus:ring-white">
          <span>Sign in</span>
        </button>
      </form>
    </div>
  </div>
</body>

</html>