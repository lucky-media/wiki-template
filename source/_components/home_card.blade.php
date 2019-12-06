<a href="{{ $link }}" style="height: 420px;" class="w-1/3 px-5">
    <div class="bg-white h-full shadow-lg rounded-lg px-10 py-5 flex flex-col justify-between items-center">
        <img class="w-full h-auto mt-10" src="{{ $image }}" alt="">
        <div class="flex flex-col items-center">
            <h2 class="text-gray-900 text-3xl">{{ $title }}</h2>
            <p class="text-gray-700 text-base text-center mt-2">{{ $desc }}</p>
        </div>
    </div>
</a>