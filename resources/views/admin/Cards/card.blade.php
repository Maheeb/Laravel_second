@extends('layouts.admin')
@section('content')
    <h1>All Cards</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Font Awesome</th>
            <th>Title</th>
            <th>Extra Text</th>
            <th>Update Cards</th>
            <th>Delete Cards</th>
        </tr>
        </thead>
        <tbody>
        @if ($cards)

            @foreach($cards as $card)

                <tr>
                    <td>{{$card->id}}</td>
                    <td>{{$card->fawe}}</td>
                    <td>{{$card->title}}</td>
                    <td>{{$card->et}}</td>
                    <td><a href="{{route('card.edit',$card->id)}}">Update Card</a></td>
                    <td>
                        {!! Form::open(['method' => 'DELETE' ,'action'=>['CardController@destroy',$card->id]]) !!}


                        <div class="form-group">

                            {!! Form::submit('Delete Card', ['class' => 'btn btn-danger']) !!}

                        </div>
                        {!! Form::close() !!}

                    </td>
                </tr>

            @endforeach
        @endif
        </tbody>
    </table>


@stop