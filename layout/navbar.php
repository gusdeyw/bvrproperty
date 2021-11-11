<div class="fixed w-full text-gray-700 bg-black z-50 shadow-md">
  <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-14">
    <div class="p-3 flex flex-row items-center justify-between">
      <a href="index.php"><img class="h-10" src="/public/images/logo.png" alt="BVR Property"></a>
      <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
          <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
    <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-center md:flex-row ">
      <a class="text-white px-4 py-2 mt-2 text-sm sm:text-base font-normal bg-transparent rounded dark-mode:bg-transparent md:mt-0 hover:bg-red-600" href="/index.php">Home</a>
      <!-- Rental -->
      <div class="dropdown inline-block relative">
        <button class=" text-white hover:bg-red-600  py-2 px-4 rounded inline-flex items-center">
          <span class="mr-1">Rental</span>
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
          </svg>
        </button>
        <ul class="dropdown-menu absolute hidden w-40 text-white pt-1">
          <li class=""><a class="rounded-t  bg-gray-900 hover:bg-red-600 py-2 px-4 block whitespace-no-wrap" href="#">Yearly</a></li>
          <li class=""><a class="rounded-b bg-gray-900  hover:bg-red-600 py-2 px-4 block whitespace-no-wrap" href="#">Monthly</a></li>
        </ul>
      </div>
      <!-- Villa -->
      <div class="dropdown inline-block relative">
        <button class=" text-white hover:bg-red-600 py-2 px-4 rounded inline-flex items-center">
          <span class="mr-1">Villa</span>
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
          </svg>
        </button>
        <ul class="dropdown-menu absolute hidden w-28 text-white pt-1">
          <li class=""><a class="rounded-t  bg-gray-900 hover:bg-red-600 py-2 px-4 block whitespace-no-wrap" href="#">Leasehold</a></li>
          <li class=""><a class="rounded-b bg-gray-900  hover:bg-red-600 py-2 px-4 block whitespace-no-wrap" href="#">Freehold</a></li>
        </ul>
      </div>
      <!-- Land -->
      <div class="dropdown  md:inline-block relative">
        <button class=" text-white hover:bg-red-600 py-2 px-4 rounded inline-flex items-center">
          <span class="mr-1">Land</span>
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
          </svg>
        </button>
        <ul class="dropdown-menu absolute hidden w-28 text-white pt-1">
          <li class=""><a class="rounded-t  bg-gray-900 hover:bg-red-600 py-2 px-4 block whitespace-no-wrap" href="#">Leasehold</a></li>
          <li class=""><a class="rounded-b bg-gray-900  hover:bg-red-600 py-2 px-4 block whitespace-no-wrap" href="#">Freehold</a></li>
        </ul>
      </div>
      <!-- About Us -->
      <div class="dropdown inline-block relative">
        <button class=" text-white hover:bg-red-600 py-2 px-4 rounded inline-flex items-center">
          <span class="mr-1">About Us</span>
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
          </svg>
        </button>
        <ul class="dropdown-menu absolute hidden w-56 text-white pt-1">
          <li class=""><a class="rounded-t  bg-gray-900 hover:bg-red-600 py-2 px-4 block" href="#">Meet the expert</a></li>
          <li class=""><a class="bg-gray-900 hover:bg-red-600 py-2 px-4 block" href="#">FAQs Pages</a></li>
          <li class=""><a class="bg-gray-900 hover:bg-red-600 py-2 px-4 block" href="#">Testimonials</a></li>
          <li class=""><a class="bg-gray-900 hover:bg-red-600 py-2 px-4 block" href="#">Francising, Licensing & Partership</a></li>
          <li class=""><a class="rounded-b bg-gray-900  hover:bg-red-600 py-2 px-4 block" href="#">Contact Us</a></li>
        </ul>
      </div>
      <a class="text-white px-4 py-2 mt-2 text-sm sm:text-base font-normal bg-transparent rounded dark-mode:bg-transparent md:mt-0 hover:bg-red-600" href="/index.php">Blog</a>
      <!-- Land -->
      <div class="md:hidden dropdown inline-block relative md:justify-end">
        <button class=" text-white hover:bg-red-600 py-2 px-4 rounded inline-flex items-center">
          <span class="mr-1">IDR</span>
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
          </svg>
        </button>
        <ul class="dropdown-menu absolute hidden w-28 text-white pt-1">
          <li class=""><a class="rounded bg-gray-900 hover:bg-red-600 py-2 px-4 block whitespace-no-wrap" href="#">USD</a></li>
        </ul>
      </div>
    </nav>
    <!-- Land -->
    <div class="hidden dropdown md:inline-block relative md:justify-end">
      <button class=" text-white hover:bg-red-600 py-2 px-4 rounded inline-flex items-center">
        <span class="mr-1">IDR</span>
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
        </svg>
      </button>
      <ul class="dropdown-menu absolute hidden w-28 text-white pt-1">
        <li class=""><a class="rounded bg-gray-900 hover:bg-red-600 py-2 px-4 block whitespace-no-wrap" id="">USD</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="h-16 w-full text-gray-700 bg-black z-50 shadow-md">
</div>