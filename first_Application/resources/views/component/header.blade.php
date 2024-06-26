<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title','website') </title>
    {{-- adding js file --}}
    @stack('scripts')
    @vite('resources/css/app.css')
</head>
<body>
    <div class="relative w-full bg-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-2 sm:px-6 lg:px-8">
          <div class="inline-flex items-center space-x-2">
          </div>
          <div class="hidden lg:block">
            <ul class="inline-flex space-x-8">
              <li>
                <a
                  href="/"
                  class="text-sm font-semibold text-gray-800 hover:text-gray-900"
                >
                  Home
                </a>
              </li>
              <li>
                <a
                  href="/about"
                  class="text-sm font-semibold text-gray-800 hover:text-gray-900"
                >
                  About
                </a>
              </li>
              <li>
                <a
                  href="/post"
                  class="text-sm font-semibold text-gray-800 hover:text-gray-900"
                >
                  Post
                </a>
              </li>
            </ul>
          </div>
          <div class="hidden lg:block">
            <button
              type="button"
              class="rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-black/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black"
            >
              Button text
            </button>
          </div>
          <div class="lg:hidden">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="h-6 w-6 cursor-pointer"
            >
              <line x1="4" y1="12" x2="20" y2="12"></line>
              <line x1="4" y1="6" x2="20" y2="6"></line>
              <line x1="4" y1="18" x2="20" y2="18"></line>
            </svg>
          </div>
        </div>
      </div>
      
    




</body>