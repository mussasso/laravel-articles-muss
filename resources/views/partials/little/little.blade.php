@foreach ($littles as $little)
    <div class="flex flex-col items-center justify-center w-full max-w-sm mx-auto">
        <div class="w-full h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-md">
            <img src="{{ asset('storage/img/'.$little->image) }}" alt="">
            
        </div>

        <div class="w-56 -mt-10 overflow-hidden bg-white rounded-lg shadow-lg md:w-64 dark:bg-gray-800">
            <h3 class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase dark:text-white">{{$little->title }}</h3>
            <p class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase dark:text-white">{{Str::limit($little->text,50) }}</p>

            <div class="flex items-center justify-between px-3 py-2 bg-gray-200 dark:bg-gray-700">
                <span class="font-bold text-gray-800 dark:text-gray-200">{{$little->auteur->name }}</span>
                <a href="/little/{{$little->id}}"
                    class="px-2 py-1 text-xs font-semibold text-white uppercase transition-colors duration-300 transform bg-gray-800 rounded hover:bg-gray-700 dark:hover:bg-gray-600 focus:bg-gray-700 dark:focus:bg-gray-600 focus:outline-none">Show more</a>
            </div>
        </div>
    </div>
@endforeach
