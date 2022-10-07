<x-layout>
    <h1 class="text-center font-extrabold text-transparent text-8xl bg-clip-text bg-gradient-to-r from-sky-100 via-[#80A5AB] to-[#80A5AB]
        my-10">
        My Projects
    </h1>
    <h2 class="text-center text-sky-200 text-2xl font-bold mb-10">Also this website</h2>
    <div class="flex justify-center items-center">
        <div class="flex grid-cols-3 gap-3">
{{--            orange richard--}}
                <div
                    class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md bg-gradient-to-tr from-[#1F2425] to-[#080808] dark:border-gray-700">
                    <a href="https://www.youtube.com/watch?v=78Sa-jMJcfQ">
                        <img class="rounded-t-lg hover:shadow-2xl hover:shadow-sky-300" src="{{asset("images/orangeRichard.png")}}" alt="">
                    </a>
                    <div class="p-5 ">

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Orange Richard</h5>

                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">"Created in Unity3D as part of a 48-hour game developer challenge. In this game, you play as a mutated orange sergeant as they right against hordes of mutated fruit monsters... in space"</p>

                    </div>
                </div>
            {{--            Spooky VR--}}
            <div
                class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md bg-gradient-to-tr from-[#1F2425] to-[#080808] dark:border-gray-700">
                <a href="https://www.youtube.com/watch?v=0GM8dsUmuoQ">
                    <img class="rounded-t-lg hover:shadow-2xl hover:shadow-sky-300" src="{{asset("images/fortVR.png")}}" alt="">
                </a>
                <div class="p-5 ">

                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Spooky VR</h5>

                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Created in Unreal Engine 4, this virtual reality experience re-creates Fort Lytton in virtual reality with a spooky twist</p>

                </div>
            </div>
            {{--            Experimental--}}
            <div
                class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md bg-gradient-to-tr from-[#1F2425] to-[#080808] dark:border-gray-700">
                <a href="https://www.youtube.com/watch?v=Qmg6APjlzWg ">
                    <img class="rounded-t-lg hover:shadow-2xl hover:shadow-sky-300" src="{{asset("images/experimental.png")}}" alt="">
                </a>
                <div class="p-5 ">

                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Experimental Game Design</h5>

                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> A series of experimental game prototypes developed in Unity3D as part of a challenge over a few days</p>

                </div>
            </div>
        </div>
    </div>

</x-layout>
