<x-layout>
    <h1 class="text-center font-extrabold text-transparent text-8xl bg-clip-text bg-gradient-to-r from-sky-100 via-[#80A5AB] to-[#80A5AB]
        my-10">
        My Projects
    </h1>
    <h2 class="text-center text-sky-200 text-2xl font-bold mb-10">Also this website</h2>
    <div class="flex justify-center items-center">
        <div class="flex grid-cols-3 gap-3">
            @foreach($projects as $project)
                <div
                    class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md bg-gradient-to-tr from-[#1F2425] to-[#080808] dark:border-gray-700">
                    <a href="{{$project->link}}">
                        <img class="rounded-t-lg hover:shadow-2xl hover:shadow-sky-300" src="/images/{{$project->imageURL}}.png" alt="">
                    </a>
                    <div class="p-5 ">

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$project->name}}</h5>

                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$project->body}}</p>

                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
