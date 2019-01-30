@extends('layouts.admin')

@section('content')
    <h1>Create Products</h1>

    {!! Form::open(['method' => 'POST','action'=>'ProductController@store']) !!}
    {{csrf_field()}}
    <div class="form-group">

        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null , ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('text', 'Text:') !!}
        {!! Form::textarea('text', null , ['class' => 'form-control']) !!}

    </div>



    <div class="form-group">

        {!! Form::submit('Create Products', ['class' => 'btn btn-primary']) !!}

    </div>

    {!! Form::close() !!}

@stop