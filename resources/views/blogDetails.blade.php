{{-- <h1>{{$title}}</h1>

<h2>{{$category}}</h2> --}}

@if ( strlen($title) >= 2)
    <h1>{{$title}}</h1>
@else
    {{'invalid title'}}
@endif