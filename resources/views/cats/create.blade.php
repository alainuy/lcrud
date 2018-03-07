@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Create Page</h3>

    {!! Form::open(['action' => 'CatsController@store', 'method' => 'POST']) !!}


    <div class="form-group">
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name']) }}
    </div>

    <div class="form-group">
        {{ Form::label('color', 'Color:') }}
        {{ Form::text('color', '', ['class' => 'form-control', 'placeholder' => 'Color']) }}
    </div>

    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

    <a href="/cats" class="btn btn-danger">Cancel</a>

    {!! Form::close() !!}

</div>
@endsection
