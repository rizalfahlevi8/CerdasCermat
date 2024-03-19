<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200 shadow-md">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-1">
          <div class="flex items-center space-x-3 rtl:space-x-reverse">
              <img src="{{ asset('assets/img/Logo.png') }}" class="h-14" alt="Cerdas Cermat">
        </div>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

          <a href="/login" method="get">
            <button type="button" class="text-white bg-emerald-800 font-medium rounded-lg text-sm px-4 py-2 text-center mr-2 ">Login</button>
          </a>
          <a href="/register/ketua" method="get">
            <button type="button" class="text-emerald-800 font-medium rounded-lg text-sm px-4 py-2 text-center mr-2 ">Registrasi</button>
          </a>
  
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
                    <a href="#hero" class="block py-2 px-3 nav-inactive">Home</a>
                </li>
                <li class="about">
                    <a href="#about" class="block py-2 px-3 nav-inactive">About</a>
                </li>
                <li class="service">
                    <a href="#service" class="block py-2 px-3 nav-inactive">Services</a>
                </li>
                <li class="reservation">
                    <a href="#reservation" class="block py-2 px-3 nav-inactive">Reservasi</a>
                </li>
            </ul>
        </div>
        
    </div>
</nav>
