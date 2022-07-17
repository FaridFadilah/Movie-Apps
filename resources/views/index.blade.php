<x-app-layout>
    <x-slot:title>
        {{ __("Mafilm") }}
    </x-slot>
    <x-slot:content>
        <section class="bg-hero-section border-t">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-slate-200 md:text-5xl lg:text-6xl dark:text-white">Welcome to  <span class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-gradient-to-r from-purple-500 to-pink-500 relative inline-block">
                    <span class="relative text-white">Mafilm</span>
                  </span>
                </h1>
                <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Millions of movies, TV shows and people to discover. Explore now.</p>
                <a href="#" class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700" role="alert">
                    <span class="text-xs bg-primary-600 rounded-full text-gray-700 px-4 py-1.5 mr-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                      </svg></span> <span class="text-sm font-medium">See what's new</span> 
                    <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </section>
        <section class="bg-gray-800">
            <div class="container p-3 mx-auto">
                <h2 class="inline-block mb-2 text-3xl font-extrabold tracking-tight text-gray-200 dark:text-gray-200">Most <span class="text-blue-300">movie</span> popular</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach($popular["results"] as $movie => $value)
                    @if($movie == 4) @break @endif
                    <div class="mt-8">
                        <div class="max-w-sm bg-transparent dark:bg-gray-800 dark:border-gray-700">
                            <a href="">
                                <img class="rounded-lg hover:shadow-lg hover:shadow-black" src="{{ "https://image.tmdb.org/t/p/w500/" . $value["poster_path"] }}" alt="" />
                            </a>
                            <div class="mt-2 flex flex-row text-sm justify-between">
                                <a href="#">
                                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-200 dark:text-white">{{ $value["title"] }}</h5>
                                </a>
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                      </svg>
                                <span class="text-white pl-3">{{ $value["vote_average"] }}</span>
                                </div>
                                {{-- <div class="flex flex-row text-gray-400 text-sm mt-1">
                                </div> --}}
                            </div>
                            <div class="text-gray-400 block flex-row text-sm">
                                @foreach ($value["genre_ids"] as $genre)
                                <a href="#" class="hover:text-blue-400 hover:underline px-1">
                                    {{ $genresMovie->get($genre) }}@if(!$loop->last) @endif
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </section>
        <section class="bg-gray-800">
            <div class="container p-3 mx-auto">
                <h2 class="inline-block mb-2 text-3xl font-extrabold tracking-tight text-gray-200 dark:text-gray-200">Most <span class="text-blue-300">Tv Series</span> popular </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($tv["results"] as $data => $value)
                    @if($data == 5) @break @endif
                    <div class="mt-8">
                        <div class="max-w-sm bg-transparent dark:bg-gray-800 dark:border-gray-700">
                            <a href="">
                                <img class="rounded-lg hover:shadow-lg hover:shadow-black" src="{{ "https://image.tmdb.org/t/p/w500/" . $value["poster_path"] }}" alt="" />
                            </a>
                            <div class="mt-2 flex flex-row text-sm justify-between">
                                <a href="#">
                                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-200 dark:text-white">{{ $value["name"] }}</h5>
                                </a>
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                      </svg>
                                <span class="text-white pl-3">{{ $value["vote_average"] }}</span>
                                </div>
                                {{-- <div class="flex flex-row text-gray-400 text-sm mt-1">
                                </div> --}}
                            </div>
                            <div class="text-gray-400 block flex-row pt-1 text-sm">
                                @foreach ($value["genre_ids"] as $genre)
                                <a href="#" class="hover:text-blue-400 hover:underline">
                                    {{ $genresTv->get($genre) }}@if(!$loop->last) @endif
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </section>
        <section class="bg-gray-800">
            <div class="container p-3 mx-auto">
                <h2 class="inline-block mb-2 text-3xl font-extrabold tracking-tight text-blue-300 dark:text-gray-200">Up coming</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($upComingTv["results"] as $data => $value)
                    @if($data == 5) @break @endif
                    <div class="mt-8">
                        <div class="max-w-sm bg-transparent dark:bg-gray-800 dark:border-gray-700">
                            <a href="">
                                <img class="rounded-lg hover:shadow-lg hover:shadow-black" src="{{ "https://image.tmdb.org/t/p/w500/" . $value["poster_path"] }}" alt="" />
                            </a>
                            <div class="flex flex-row justify-between mt-2">
                                <a href="#">
                                    <h5 class="mb-2 text-md text-md font-bold tracking-tight text-gray-200 dark:text-white">{{ $value["title"] }}</h5>
                                </a>
                                <div class="flex items-center text-sm mt-1">
                                    <span class="ml-1">{{ $value["vote_average"] * 10 . "%" }}</span>
                                </div>
                            </div>
                            <div class="text-gray-400 block flex-row pt-1 text-sm">
                                @foreach ($value["genre_ids"] as $genre)
                                <a href="#" class="hover:text-blue-400 hover:underline">
                                    {{ $genresMovie->get($genre) }}@if(!$loop->last)@endif
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </section>
    </x-slot>
</x-app-layout>