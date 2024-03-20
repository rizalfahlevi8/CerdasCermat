<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200 shadow-md">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-1">
        <div class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('assets/img/Logo.png') }}" class="h-14" alt="Flowbite Logo">
      </div>
      <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

        @auth
        <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
            <span class="sr-only">Open user menu</span>
            <img class="w-8 h-8 rounded-full" src="{{ asset('assets/foto/maleDefault.jpeg') }}" alt="user photo">
        </button>
        <!-- Dropdown menu -->
        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600 " id="user-dropdown">
          <div class="px-4 py-3">
            <span class="block text-sm text-gray-900 dark:text-white">{{ auth()->user()->name }}</span>
            <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ auth()->user()->email }}</span>
          </div>
          <ul class="py-2" aria-labelledby="user-menu-button">
            <li>
                <a href="/reservation" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
              </li>
              <li>
                <form action="/logout" method="post" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                  @csrf
                  <button type="submit">Sign out</button>
                </form>
              </li>
            </ul>
          </div>
        @else
        <a href="/login" method="get">
          <button type="button" class="text-white bg-hijau hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-2 ">Login</button>
        </a>
        @endauth

        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-hijau rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
      </div>
      <div class="navbar items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
          <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 text-sm md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
              <li class="hero nav-active" >
                  <a href="#hero" class="block py-2 px-3 nav-inactive">Dashboard</a>
              </li>
              <li class="about">
                  <a href="#about" class="block py-2 px-3 nav-inactive">User</a>
              </li>
              <li class="service">
                  <a href="#service" class="block py-2 px-3 nav-inactive">Bank Soal</a>
              </li>
              <li class="reservation">
                  <a href="#reservation" class="block py-2 px-3 nav-inactive">Report Ujian</a>
              </li>
          </ul>
      </div>
  </div>
</nav>
