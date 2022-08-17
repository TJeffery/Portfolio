<x-layout>
    <div class="justify-center items-center mx-40 my-20">
        @foreach($experiences as $experience)
            <div class=" h-36 flex flex-row justify-center items-center my-20 mx-10 gap-10 ">
                <x-card :skill="$experience" :swap="$loop->even"/>
            </div>
        @endforeach
    </div>
</x-layout>
