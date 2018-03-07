@extends('layouts.app')

{{--  @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  --}}

@section('content')

    <div class="container">

        <div class="well">
            <p>Name : {{ $cat->name }} </p>
            <p>Color: {{ $cat->color }} </p>
            <small>posted on {{ $cat->created_at }} </small>
            {{--{{ $cat->created_at->diffForHumans() }}--}}
        </div>
        
        <a href="/cats" class="btn btn-default btn-sm" > Back </a>
        <a href="/cats/{{$cat->id}}/edit" class="btn btn-info btn-sm" > Edit </a>

        {!! Form::open(['action' => ['CatsController@destroy', $cat->id], 'method' => 'DELETE', 'class' => 'pull-right']) !!}

            {{--{{ Form::hidden('_method', 'DELETE') }}--}}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) }}

        {!! Form::close() !!}

    </div>
    
@endsection