@extends('layouts.admin')
@section('content')
    <h1>All Products</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Text</th>
            <th>Update Product</th>
            <th>Delete Product</th>

        </tr>
        </thead>
        <tbody>
        @if ($products)

            @foreach($products as $product)

                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->text}}</td>
                    <td><a href="{{route('prod.edit',$product->id)}}">Update Product</a></td>
                    <td>
                        {!! Form::open(['method' => 'DELETE' ,'action'=>['ProductController@destroy',$product->id]]) !!}


                        <div class="form-group">

                            {!! Form::submit('Delete Product', ['class' => 'btn btn-danger']) !!}

                        </div>
                        {!! Form::close() !!}

                    </td>
                </tr>

            @endforeach
        @endif
        </tbody>
    </table>


@stop