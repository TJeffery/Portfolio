<x-default>
    <h1>{{$experience->name}}</h1>
    <p>
        {{$experience->body}}
    </p>
    <div class="justify-center items-center mx-40 my-20">
        @foreach($experience->knowledges as $know)
            <div class=" min-h-36 flex flex-row justify-center items-center my-20 mx-10 gap-10 shadow-2xl   ">
                <x-card :skill="$know" :swap="$loop->even"/>
            </div>
        @endforeach
    </div>

</x-default>
