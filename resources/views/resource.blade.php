<x-app-layout>
    <x-slot:title>
        {{ __($title) }}
    </x-slot>
    <x-slot:content>
        <section class="bg-gray-800">
            <div class="container">
            <x-breadcrumb/>
            <div class="p-3 pt-10 mx-auto flex-col flex">
                <h2 class="inline-block mb-2 text-3xl font-extrabold tracking-tight text-gray-200 dark:text-gray-200">Latest</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    @foreach ($data["results"] as $num => $value)
                    <div class="mt-8">
                        <div class="max-w-sm bg-transparent dark:bg-gray-800 dark:border-gray-700">
                            <a href="">
                                <img class="rounded-lg hover:shadow-lg hover:shadow-black" src="{{ "https://image.tmdb.org/t/p/w500/".$value["poster_path"] }}" alt="" />
                            </a>
                            <div class="mt-2 flex flex-row text-sm justify-between">
                                <a href="#">
                                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-200 dark:text-white">{{ $value["original_name"] }}
                                    </h5>
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
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        </section>
    </x-slot>
</x-app-layout>