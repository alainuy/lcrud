@extends('layouts.app')

@section('content')

    <div class="container">

        {{--  @foreach ($cats as $cat)

            <a href="/cats/{{$cat->id}}/edit"> {{$cat->name}} </a>
            
        @endforeach  --}}

        @if ( count($cats) > 0 )

            @foreach ($cats as $cat)
                <div>
                 <h4> <a href="/cats/{{$cat->id}}"> {{ $cat->name }} </a> </h4>   
                </div>
            @endforeach
            
        @else

        <p>No Cats Found!</p>

        @endif
        
    </div>

@endsection
