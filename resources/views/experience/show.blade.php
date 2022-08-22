<x-layout>

    <div class="justify-center items-center mx-40 my-20 ">
        <div class=" justify-center items-center">
            <h1 class="text-center font-extrabold text-transparent text-8xl bg-clip-text bg-gradient-to-r from-sky-100 via-[#80A5AB] to-[#80A5AB]
        mb-10">
                {{$experience->name}}
            </h1>
            <p class="text-sky-100 mb-10 font-bold text-center  px-32">
                {{$experience->body}}
            </p>
            <div class="flex justify-center items-center ">
                <a href="{{$experience->link}}" class=" text-lg text-[#95E0EB] py-5 font-bold underline text-center ">-> Check Them Out <-</a>

            </div>
        </div>
        <div class="flex grid grid-cols-3 gap-y-10 mt-10">
            @foreach($experience->knowledges as $know)

                <div
                    class="block p-6 max-w-md  rounded-lg border border-gray-900  bg-gradient-to-t from-[#1F2425] to-[#080808]">
                    <h1 class="font-extrabold text-transparent text-xl bg-clip-text bg-gradient-to-r from-sky-100 via-[#80A5AB] to-[#80A5AB] mb-5">
                        {{$know->name}}
                    </h1>
                    <p class="text-sky-100 ">
                        {{$know->body}}
                    </p>
                </div>

            @endforeach</div>
    </div>

</x-layout>
