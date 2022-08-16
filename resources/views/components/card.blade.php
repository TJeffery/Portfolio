@props(['skill','swap'])

@if($swap==1)
    <x-cardhalf :skill="$skill"/>
    <div >
        <img src="/images/{{$skill->imageURL}}.png">

    </div>
@else
    <div>
        <img src="/images/{{$skill->imageURL}}.png">
    </div>
    <x-cardhalf :skill="$skill"/>

@endif


