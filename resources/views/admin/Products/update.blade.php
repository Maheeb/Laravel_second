@extends('layouts.admin')

@section('content')
    <h1>Update Products</h1>

    {!! Form::model($products,['method' => 'PATCH','action'=>['ProductController@update',$products->id]]) !!}
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

        {!! Form::submit('Update Products', ['class' => 'btn btn-primary']) !!}

    </div>

    {!! Form::close() !!}

@stop