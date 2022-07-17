<nav class="bg-navbar">
    <div class="container flex flex-col lg:flex-row">
      <div class="flex items-center justify-between px-4 py-4 lg:py-0 border-b border-navbar-hover lg:border-b-0">
        <a href="{{ route("home") }}" class="font-semibold text-xl text-white">Mafilm</a>
        <button class="block text-white focus:outline-none lg:hidden" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
      </div>
      <!-- Authentication Anchor -->
  
      <div id="" class="lg:flex flex-col lg:flex-row justify-between hidden w-full py-4 lg:py-0">
        <div class="flex flex-col lg:flex-row text-white">
          <a href="{{ route("moviePopular") }}" class="block py-2 lg:py-5 px-4 hover:text-navbar-hover hover:underline hover:decoration-1">Movie</a>
          <a href="{{ route("tvPopular") }}" class="block py-2 lg:py-5 px-4 hover:text-navbar-hover hover:underline hover:decoration-1">Serial Tv</a>
          <a href="{{ route("Tags") }}" class="block py-2 lg:py-5 px-4 hover:text-navbar-hover hover:underline hover:decoration-1">Tags</a>
        </div>
        <form class="flex items-center" method="post" action="{{ route("movieSearch") }}">
          @csrf
          <input type="text" id="search-navbar" name="search" class="block p-2 pl-5 w-full text-gray-900 bg-slate-700 rounded-lg border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
          <button type="submit" class="py-2.5 px-5 mx-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Search</button>
        </form>
      </div>
    </div>
  </nav>