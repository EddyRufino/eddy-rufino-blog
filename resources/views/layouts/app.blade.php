<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
  <div class="lg:border-b-2 lg:border-gray-200 mx-auto">
    <div class="flex mx-auto items-center justify-between py-4 px-5 max-w-6xl">
      <div class="">
        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-600 hover:text-gray-800 no-underline">
          <strong>ER</strong>
        </a>
      </div>

      <div class="lg:px-6 lg:w-3/5 xl:px-12 xm:hidden md:inline-block search">
        <div class="relative">
          <span class="w-full algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;"><input id="docsearch" class="transition-colors duration-100 ease-in-out bg-white shadow-md focus:outline-0 border border-transparent placeholder-gray-600 rounded-lg py-2 pr-4 pl-10 block w-full appearance-none leading-normal ds-input" type="text" placeholder="Search the site (Press &quot;/&quot; to focus)" autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-label="search input" aria-owns="algolia-autocomplete-listbox-0" style="position: relative; vertical-align: top;" dir="auto"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Inter var, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: normal; text-indent: 0px; text-rendering: optimizelegibility; text-transform: none;"></pre><span class="ds-dropdown-menu" style="position: absolute; top: 100%; z-index: 100; display: none; left: 0px; right: auto;" role="listbox" id="algolia-autocomplete-listbox-0"><div class="ds-dataset-1"></div></span></span>
          <div class="pointer-events-none absolute inset-y-0 left-0 pl-4 flex items-center">
            <svg class="fill-current pointer-events-none text-gray-600 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path></svg>
          </div>
        </div>
      </div>

      <div class="text-right flex items-center">

        <a class="no-underline text-gray-600 hover:text-gray-800 p-3" href="{{ route('pages.home') }}">Blog</a>

        @guest
          <a class="no-underline text-gray-600 hover:text-gray-800 p-3" href="{{ route('login') }}">{{ __('Login') }}</a>
          @if (Route::has('register'))
            <a class="no-underline text-gray-600 hover:text-gray-800 pl-3" href="{{ route('register') }}">{{ __('Register') }}</a>
          @endif
        @else
          <div class="relative" x-data="{ open: false }">
            <button class="flex items-center no-underline text-gray-600 hover:text-gray-800 p-3" @click="open = true">
              <p>{{ Auth::user()->name }}</p>
              <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z" class="heroicon-ui"></path></svg>
            </button>
          
            <ul 
                class="absolute font-normal bg-white shadow overflow-hidden rounded w-48 border mt-2 py-1 right-0 z-20 transform origin-top-right"
                x-show="open"
                @click.away="open = false"
                x-transition:enter="transition-all ease-out duration-100"
                x-transition:enter-start="opacity-0 scale-75"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition-all ease-in duration-100"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-75"
            >

            <li>
              <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="text-gray-600"><path d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z" class="heroicon-ui"></path></svg>
                <span class="ml-2">Account</span>
              </a>
            </li>
            <li class="border-b border-gray-400">
              <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="text-gray-600"><path d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" class="heroicon-ui"></path></svg>
                <span class="ml-2">Settings</span>
              </a>
            </li>
            <li>
              <a
              onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"
                href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                  <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="text-gray-600"><path d="M0 0h24v24H0z" fill="none"></path><path d="M10.09 15.59L11.5 17l5-5-5-5-1.41 1.41L12.67 11H3v2h9.67l-2.58 2.59zM19 3H5c-1.11 0-2 .9-2 2v4h2V5h14v14H5v-4H3v4c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"></path></svg><span class="ml-2">Logout</span>
              </a>
            </li>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                  {{ csrf_field() }}
              </form>
              </ul>
          </div>
        
        @endguest
      </div>

    </div>
  </div>

    @yield('content')

</body>
</html>
