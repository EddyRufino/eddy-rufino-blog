{{-- <div class="relative" x-data="{ open: false }">
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
</div> --}}

<div class="w-full max-w-screen-xl relative mx-auto xm:px-3 md:px-6">
  
  <nav class="w-full md:border-b-2 md:border-gray-200 max-w-screen-xl relative mx-auto flex items-center justify-between flex-wrap p-4 fixed z-10 top-0"
    x-data="{ isOpen: false }"
    @keydown.escape="isOpen = false"
    :class="{ 'shadow-lg bg-indigo-900' : isOpen , 'bg-gray-100' : !isOpen}"
  >

  <!--Logo etc-->
  <div class="flex items-center flex-shrink-0 text-white lg:mr-6">
    <a class="no-underline text-gray-600 hover:text-gray-800 hover:no-underline" href="/">
      <span class="text-2xl pl-2"><i class="em em-grinning"></i><strong>ED</strong></span>
    </a>
  </div>

  <div class="lg:px-6 lg:w-3/5 xl:px-12 xm:hidden md:w-3/5 md:inline-block search">
    <div class="relative">
      <span class="w-full algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;"><input id="docsearch" class="transition-colors duration-100 ease-in-out bg-white shadow-md focus:outline-0 border border-transparent placeholder-gray-600 rounded-lg py-2 pr-4 pl-10 block w-full appearance-none leading-normal ds-input" type="text" placeholder="Search the site (Press &quot;/&quot; to focus)" autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-label="search input" aria-owns="algolia-autocomplete-listbox-0" style="position: relative; vertical-align: top;" dir="auto"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Inter var, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: normal; text-indent: 0px; text-rendering: optimizelegibility; text-transform: none;"></pre><span class="ds-dropdown-menu" style="position: absolute; top: 100%; z-index: 100; display: none; left: 0px; right: auto;" role="listbox" id="algolia-autocomplete-listbox-0"><div class="ds-dataset-1"></div></span></span>
      <div class="pointer-events-none absolute inset-y-0 left-0 pl-4 flex items-center">
        <svg class="fill-current pointer-events-none text-gray-600 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path></svg>
      </div>
    </div>
  </div>

  <!--Toggle button (hidden on large screens)-->
  <button @click="isOpen = !isOpen" type="button" class="block lg:hidden px-2 text-gray-500 hover:text-white focus:outline-none focus:text-white"
    :class="{ 'transition transform-180': isOpen }"
  >
    <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
      <path x-show="isOpen" fill-rule="evenodd" clip-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
      <path x-show="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
    </svg>
  </button>
  
  <!--Menu-->
  <div class="w-full lg:flex lg:items-center lg:w-auto"
    :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }"
    @click.away="isOpen = false"
    x-show="true"
    x-transition:enter="ease-out duration-200"
    x-transition:enter-start="opacity-0 transform"
    x-transition:enter-end="opacity-100 transform"
    x-transition:leave="ease-in duration-200"
    x-transition:leave-start="opacity-100 transform"
    x-transition:leave-end="opacity-0 transform"
  >

    <ul class="pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center">
      {{-- <li class="mr-3">
        <a class="inline-block py-2 px-4 text-white no-underline" href="#" @click="isOpen = false">Active</a>
      </li> --}}
      <li class="mr-3">
        <a class="inline-block text-gray-600 no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="{{ route('pages.home') }}" @click="isOpen = false">Blog</a>
      </li>
      @guest
      <li class="mr-3">
        <a class="inline-block text-gray-600 no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="{{ route('login') }}" @click="isOpen = false">Login</a>
      </li>
      

      @if (Route::has('register'))
        <li class="mr-3">
          <a class="inline-block text-gray-600 no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#" @click="isOpen = false href="{{ route('register') }}">
            {{ __('Register') }}
          </a>
        </li>
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
    </ul>
    
  </div>
  
</nav>
</div>

  {{-- <div class="mx-auto">
    <div class="flex mx-auto items-center justify-between py-4 px-5 max-w-6xl lg:border-b-2 lg:border-gray-200">
      <div class="px-2">
        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-600 hover:text-gray-800 no-underline">
          <strong>ER</strong>
        </a>
      </div>

      <button x-on:click="open" type="button" id="sidebar-open" class="flex px-3 items-center md:hidden text-gray-500 focus:outline-none focus:text-gray-700">
        <svg class="fill-current w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg>
      </button>


      <div class="lg:px-6 lg:w-3/5 xl:px-12 xm:hidden md:inline-block search">
        <div class="relative">
          <span class="w-full algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;"><input id="docsearch" class="transition-colors duration-100 ease-in-out bg-white shadow-md focus:outline-0 border border-transparent placeholder-gray-600 rounded-lg py-2 pr-4 pl-10 block w-full appearance-none leading-normal ds-input" type="text" placeholder="Search the site (Press &quot;/&quot; to focus)" autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-label="search input" aria-owns="algolia-autocomplete-listbox-0" style="position: relative; vertical-align: top;" dir="auto"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Inter var, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: normal; text-indent: 0px; text-rendering: optimizelegibility; text-transform: none;"></pre><span class="ds-dropdown-menu" style="position: absolute; top: 100%; z-index: 100; display: none; left: 0px; right: auto;" role="listbox" id="algolia-autocomplete-listbox-0"><div class="ds-dataset-1"></div></span></span>
          <div class="pointer-events-none absolute inset-y-0 left-0 pl-4 flex items-center">
            <svg class="fill-current pointer-events-none text-gray-600 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path></svg>
          </div>
        </div>
      </div>

      <div class="text-right flex items-center xm:hidden md:inline-block">

          <a class=" no-underline text-gray-600 hover:text-gray-800 p-3" href="{{ route('pages.home') }}">
            Blog
          </a>
        @guest
          <a class=" no-underline text-gray-600 hover:text-gray-800 p-3" href="{{ route('login') }}">
            {{ __('Login') }}
          </a>
          @if (Route::has('register'))
            <a class=" no-underline text-gray-600 hover:text-gray-800 pl-3" href="{{ route('register') }}">
              {{ __('Register') }}
            </a>
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
  </div> --}}

  {{-- <div class="w-full max-w-screen-xl relative mx-auto xm:px-3 md:px-6">
  
    <nav class="w-full md:border-b-2 md:border-gray-200 max-w-screen-xl relative mx-auto flex items-center justify-between flex-wrap p-4 fixed z-10 top-0"
      x-data="{ isOpen: false }"
      @keydown.escape="isOpen = false"
      :class="{ 'shadow-lg bg-indigo-900' : isOpen , 'bg-gray-100' : !isOpen}"
    >

    <!--Logo etc-->
    <div class="flex items-center flex-shrink-0 text-white lg:mr-6">
      <a class="no-underline text-gray-600 hover:text-gray-800 hover:no-underline" href="/">
        <span class="text-2xl pl-2"><i class="em em-grinning"></i><strong>ED</strong></span>
      </a>
    </div>

    <div class="lg:px-6 lg:w-3/5 xl:px-12 xm:hidden md:w-3/5 md:inline-block search">
      <div class="relative">
        <span class="w-full algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;"><input id="docsearch" class="transition-colors duration-100 ease-in-out bg-white shadow-md focus:outline-0 border border-transparent placeholder-gray-600 rounded-lg py-2 pr-4 pl-10 block w-full appearance-none leading-normal ds-input" type="text" placeholder="Search the site (Press &quot;/&quot; to focus)" autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-label="search input" aria-owns="algolia-autocomplete-listbox-0" style="position: relative; vertical-align: top;" dir="auto"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Inter var, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: normal; text-indent: 0px; text-rendering: optimizelegibility; text-transform: none;"></pre><span class="ds-dropdown-menu" style="position: absolute; top: 100%; z-index: 100; display: none; left: 0px; right: auto;" role="listbox" id="algolia-autocomplete-listbox-0"><div class="ds-dataset-1"></div></span></span>
        <div class="pointer-events-none absolute inset-y-0 left-0 pl-4 flex items-center">
          <svg class="fill-current pointer-events-none text-gray-600 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path></svg>
        </div>
      </div>
    </div>

    <!--Toggle button (hidden on large screens)-->
    <button @click="isOpen = !isOpen" type="button" class="block lg:hidden px-2 text-gray-500 hover:text-white focus:outline-none focus:text-white"
      :class="{ 'transition transform-180': isOpen }"
    >
      <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path x-show="isOpen" fill-rule="evenodd" clip-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
        <path x-show="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
      </svg>
    </button>
    
    <!--Menu-->
    <div class="w-full lg:flex lg:items-center lg:w-auto"
      :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }"
      @click.away="isOpen = false"
      x-show="true"
      x-transition:enter="ease-out duration-200"
      x-transition:enter-start="opacity-0 transform"
      x-transition:enter-end="opacity-100 transform"
      x-transition:leave="ease-in duration-200"
      x-transition:leave-start="opacity-100 transform"
      x-transition:leave-end="opacity-0 transform"
    >

      <ul class="pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center">

        <li class="mr-3">
          <a class="inline-block text-gray-600 no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="{{ route('pages.home') }}" @click="isOpen = false">Blog</a>
        </li>
        @guest
        <li class="mr-3">
          <a class="inline-block text-gray-600 no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="{{ route('login') }}" @click="isOpen = false">Login</a>
        </li>
        

        @if (Route::has('register'))
          <li class="mr-3">
            <a class="inline-block text-gray-600 no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#" @click="isOpen = false href="{{ route('register') }}">
              {{ __('Register') }}
            </a>
          </li>
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
      </ul>
      
    </div>
    
  </nav>
</div> --}}

  {{-- <div class="fixed w-full max-w-screen-xl mx-auto">
    <div class="relative">
      <div class="flex items-center justify-between">
        <div class="">
          <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-600 hover:text-gray-800 no-underline">
            <strong>ER</strong>
          </a>
        </div>

        <div>
          <div class="relative">
            <input type="text">
            <div class="pointer-events-none absolute inset-y-0 left-0 pl-4 flex items-center">
              <svg class="fill-current pointer-events-none text-gray-600 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path></svg>
            </div>
          </div>
        </div>

        <div>
          <ul>
            <li><a href="#"></a>Blog</li>
            <li><a href="#"></a>Login</li>
            <li><a href="#"></a>Register</li>
          </ul>
        </div>
      
      </div>
    </div>
  </div> --}}
