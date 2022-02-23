<body class="antialiased bg-gradient-to-r from-pink-300 via-purple-30 to-indigo-400">
  <header>
     <nav
        class="
          flex flex-wrap
          items-center
          justify-between
          w-full
          py-4
          md:py-0
          px-4
          text-lg text-gray-700
          bg-black
        "
      >
      <!-- <div>INSERT LOGO</div> -->
       <div>
          <a href="#">
            <img class="w-28 h-16 overflow-hidden" src="{{ asset('images/logogold.jpg') }}" alt="image" />
          </a>
        </div>
       
         <svg
            xmlns="http://www.w3.org/2000/svg"
            id="menu-button"
            class="h-6 w-6 cursor-pointer md:hidden block"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"
            />
          </svg>
       
       <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
          <ul class="mx-4 pt-4 text-base text-gray-700 md:flex md:justify-between md:pt-0">
            <li>
              <a class="md:p-4 py-2 block text-yellow-500 hover:text-purple-400" href="{{route('home')}}"
                >Home</a
              >
            </li>
            <li>
              <a class="md:p-4 py-2 block text-yellow-500 hover:text-purple-400" href="{{route('about.index')}}"
                >About Us</a
              >
            </li>
            <li>
              <a class="md:p-4 py-2 block text-yellow-500 hover:text-purple-400" href="{{route('media.index')}}"
                >Media</a
              >
            </li>
            <li>
              <a class="md:p-4 py-2 block text-yellow-500 hover:text-purple-400" href="{{route('contact.index')}}"
                >Contact</a
              >
            </li>
            <li>
              <a class="md:p-4 py-2 block text-yellow-500 hover:text-purple-400" href="{{route('tracking.index')}}"
                >Tracking</a
              >
            </li>
            <!-- <li>
              <a
                class="md:p-4 py-2 block hover:text-purple-400 text-purple-500"
                href="route"
                >Sign Up</a
              >
            </li> -->
          </ul>
        </div>
    </nav>
  </header>
  
<!--   
  <div class="px-4">
      <div
        class="
          h-12
          flex
          justify-center
          items-center
          bg-white
          mx-auto
          max-w-2xl
          rounded-lg
          my-16
          p-16
        "
      >
        <h1 class="text-2xl font-medium">Responsive Navbar with TailwindCSS</h1>
      </div>
    </div> -->
</body>
