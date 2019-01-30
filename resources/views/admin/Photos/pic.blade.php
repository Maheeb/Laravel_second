@extends('layouts.admin')
@section('content')
    <h1>All Photos</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photos</th>
            <th>Update Photos</th>
            <th>Delete Photos</th>
        </tr>
        </thead>
        <tbody>
        @if ($photos)

            @foreach($photos as $photo)

                <tr>
                    <td>{{$photo->id}}</td>
                    <td> <img height="60" width="60" src="{{ asset('images/' . $photo->file) }}" /> </td>
                    <td><a href="{{route('photo.edit',$photo->id)}}">Update Photo</a></td>
                    <td>
                        {!! Form::open(['method' => 'DELETE' ,'action'=>['PhotoController@destroy',$photo->id]]) !!}


                        <div class="form-group">

                            {!! Form::submit('Delete Photo', ['class' => 'btn btn-danger']) !!}

                        </div>
                        {!! Form::close() !!}

                    </td>
                </tr>

            @endforeach
        @endif
        </tbody>
    </table>


@stop