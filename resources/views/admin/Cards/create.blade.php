@extends('layouts.admin')

@section('content')
    <h1>Create Cards</h1>

    {!! Form::open(['method' => 'POST','action'=>'CardController@store']) !!}
    {{csrf_field()}}
    <div class="form-group">

        {!! Form::label('fawe', 'Font Awesome:') !!}
        {!! Form::text('fawe', null , ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null , ['class' => 'form-control']) !!}

    </div>


    <div class="form-group">

        {!! Form::label('et', 'Extra Text:') !!}
        {!! Form::text('et', null , ['class' => 'form-control']) !!}

    </div>


    <div class="form-group">

        {!! Form::submit('Create Cards', ['class' => 'btn btn-primary']) !!}

    </div>

    {!! Form::close() !!}

@stop