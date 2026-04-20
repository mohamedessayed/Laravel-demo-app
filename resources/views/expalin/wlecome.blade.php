<h1>
    Hello from welcoem blade
</h1>

@if ($isUser)
    <h2>
        {{ $userName  }} - {{ $userAge }}
    </h2>
@endif

<div>


@if (count($records) === 1)

i have one record!

@elseif (count($records) > 1)

i have multiple records

@else

i don't have any record

    
@endif
</div>


<div>

@unless ($isUser)
    You are guest
@endunless

</div>


<div>

    @empty($records)
        i don't have any record/
    @endempty


</div>

@auth
    
@endauth


@guest
    
@endguest

@foreach ($records as $record)
    <div> {{ $loop->iteration }} - {{ $record}} </div>
@endforeach

