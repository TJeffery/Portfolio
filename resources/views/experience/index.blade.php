<x-layout>
    <h1 class="text-center font-extrabold text-transparent text-8xl bg-clip-text bg-gradient-to-r from-sky-100 via-[#80A5AB] to-[#80A5AB]
        my-10">
        My Experiences
    </h1>
    <h2 class="text-center text-sky-200 text-4xl font-bold mb-10">My Workplaces and Studies</h2>
    <div class="justify-center items-center mx-40 my-20">
        @foreach($experiences as $experience)
            <div class=" min-h-36 flex flex-row justify-center items-center my-20 mx-10 gap-10 shadow-2xl   ">
                <x-card :skill="$experience" :swap="$loop->even"/>
            </div>
        @endforeach
    </div>
</x-layout>
