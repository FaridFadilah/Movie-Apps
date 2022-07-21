<div class="flex flex-row items-center justify-between">
    <div class="flex flex-row items-center justify-between pt-5 space-x-1 md:space-x-3">
        <ul class="flex">
            <li>
                <div class="flex items-center">
                    <a href="{{ request()->is("movies") ? route("moviePopular") : route("tvPopular") }}" class="{{ request()->is("movies") ? "text-slate-200" : "text-slate-400" }} ml-1 text-sm font-medium hover:text-gray-200 md:ml-2 dark:text-gray-400 dark:hover:text-white">popular</a>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    <a href="{{ request()->is("movies") ? route("movieTrending") : route("tvTrendings") }}" class="{{ request()->is("movies/trendings") ? "text-slate-200" : "text-slate-400" }} ml-1 text-sm font-medium hover:text-gray-200 md:ml-2 dark:text-gray-400 dark:hover:text-white">trending</a>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    <a href="{{ request()->is("movies") ? route("movieUpcoming") : route("tvUpcoming") }}" class="{{ request()->is("movies/upcomings") ? "text-slate-200" : "text-slate-400" }} ml-1 text-sm font-medium hover:text-gray-200 md:ml-2 dark:text-gray-400 dark:hover:text-white">upcoming</a>
                </div>
            </li>
        </ul>
    </div>
</div>