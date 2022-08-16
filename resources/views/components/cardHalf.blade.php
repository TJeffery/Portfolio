@props(['skill'])
<div class="  w-1/2">
    <h1 class="font-extrabold text-transparent text-3xl bg-clip-text bg-gradient-to-r from-sky-100 via-[#80A5AB] to-[#80A5AB]">
        {{$skill->name}}
    </h1>
    <p class="font-l text-sky-100">
        {{$skill->body}}
    </p>
</div>