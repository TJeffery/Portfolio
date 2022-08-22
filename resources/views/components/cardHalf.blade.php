@props(['skill','link'])
<div class="  w-1/2 mb-5">
    <h1 class="font-extrabold text-transparent text-3xl bg-clip-text bg-gradient-to-r from-sky-100 via-[#80A5AB] to-[#80A5AB]">
        <a href="{{$skill->link}}"> {{$skill->name}} </a>
    </h1>
    <p class="font-l text-sky-100">
        {{$skill->body}}
    </p>

    @if($skill->link != null)
    <a href="/knowldges/{{$skill->id}}" class=" font-s text-[#95E0EB] py-5 font-thin underline">What I Learnt -></a>
    @endif
 {{$slot}}
</div>
