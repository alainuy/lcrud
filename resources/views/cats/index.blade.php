@extends('layouts.app')

@section('content')

    <div class="container">

        {{--  @foreach ($cats as $cat)

            <a href="/cats/{{$cat->id}}/edit"> {{$cat->name}} </a>
            
        @endforeach  --}}

        @if ( count($cats) > 0 )

            @foreach ($cats as $cat)

                <div class="well well-sm">
                    <h4> <a href="/cats/{{$cat->id}}"> {{ $cat->name }} </a> </h4>
                </div>

            @endforeach
            
        @else

            <div class="well">
               <h3><p>No Cats Found!</p></h3>
            </div>


        @endif

        <a href="/cats/create" class="btn btn-primary">Add Cat</a>
        
    </div>

@endsection
