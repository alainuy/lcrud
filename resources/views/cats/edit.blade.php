{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Dashboard</div>--}}

                {{--<div class="panel-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

@extends('layouts.app')
@section('content')

    <div class="container">

        <h3>Edit Page</h3>

        <div class="">ID number to edit {{$cat->id}}</div>

        {!! Form::open(['action' => ['CatsController@update', $cat->id], 'method' => 'PUT']) !!}


        <div class="form-group">
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name', $cat->name , ['class' => 'form-control', 'placeholder' => 'Enter name']) }}
        </div>

        <div class="form-group">
            {{ Form::label('color', 'Color:') }}
            {{ Form::text('color', $cat->color , ['class' => 'form-control', 'placeholder' => 'Color']) }}
        </div>


        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}


    </div>

@endsection