<div class="flex flex-row items-center justify-between">
    <div class="flex flex-row items-center justify-between pt-5 space-x-1 md:space-x-3">
        <ul class="flex ">
            <li>
                <div class="flex items-center">
                    <a href="{{ route("moviePopular") }}" class="{{ request()->is("movies") ? "text-slate-200" : "text-slate-400" }} ml-1 text-sm font-medium hover:text-gray-200 md:ml-2 dark:text-gray-400 dark:hover:text-white">popular</a>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    <a href="{{ route("movieTrending") }}" class="{{ request()->is("movies/trendings") ? "text-slate-200" : "text-slate-400" }} ml-1 text-sm font-medium hover:text-gray-200 md:ml-2 dark:text-gray-400 dark:hover:text-white">trending</a>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    <a href="{{ route("movieUpcoming") }}" class="{{ request()->is("movies/upcoming") ? "text-slate-200" : "text-slate-400" }} ml-1 text-sm font-medium hover:text-gray-200 md:ml-2 dark:text-gray-400 dark:hover:text-white">upcoming</a>
                </div>
            </li>
        </ul>
    </div>
</div>