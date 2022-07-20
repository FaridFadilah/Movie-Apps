<x-app-layout>
    <x-slot:title>
        {{ __($title) }}
    </x-slot>
    <x-slot:content>
        <section class="text-gray-100 bg-gray-700 body-font overflow-hidden">
            <div class="container px-5 py-20 mx-auto">
              <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/3 w-full lg:h-auto rounded-lg h-16 object-cover object-center" src="{{ "https://image.tmdb.org/t/p/w500/".$data["poster_path"] }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h1 class="text-gray-100 text-3xl font-medium mb-1">{{ $data["original_title"] }}</h1>
                  <div class="flex mb-4">
                    <span class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                          </svg>
                      <span class="text-gray-100 ml-3">{{ $data["vote_average"] }}</span>
                    </span>
                    <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 space-x-2s">
                        @foreach( $data["genres"] as $genre)
                            <h2 class="text-xs text-gray-200 tracking-widest">
                                {{ $genre["name"] }}
                                @if(!$loop->last)
                                <span class="p-1"/>
                                @endif
                            </h2>
                        @endforeach
                    </span>
                  </div>
                  <p class="leading-relaxed">{{ $data["overview"] }}</p>
                  <div class="flex flex-row justify-between p-4">
                    <div class="flex flex-col">
                        <h2>Release date</h2>
                        <h4 class="tracking-normal mt-2 text-sm">{{ $data["release_date"] }}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="bg-gray-800">
            <div class="container p-3 mx-auto">
                <h2 class="inline-block mb-2 text-3xl font-extrabold tracking-tight text-blue-300 dark:text-gray-200">movie Recomended </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    @foreach($collection["parts"] as $coll)
                    <div class="mt-8">
                        <div class="max-w-sm bg-transparent dark:bg-gray-800 dark:border-gray-700">
                            <a href="{{ route("movieDetails", $coll["id"]) }}">
                                <img class="rounded-lg hover:shadow-lg hover:shadow-black" src="{{ "https://image.tmdb.org/t/p/w500/" . $coll["poster_path"] }}" alt="" />
                            </a>
                            <div class="flex flex-row justify-between mt-2">
                                <a href="{{ route("movieDetails", $coll["id"]) }}">
                                    <h5 class="mb-2 text-md text-md font-bold tracking-tight text-gray-200 dark:text-white">{{ $coll["title"] }}</h5>
                                </a>
                                <span class="ml-1 text-gray-200">{{ $coll["vote_average"] }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </x-slot>
</x-app-layout>