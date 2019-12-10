
    @extends('layouts.template')
    @section('content')
    <table>
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </thead>
    </table>
    <tbody>
        @foreach($makanans as $makanan)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>
            <a href="{{url('makanan/'.$makanan->id.'/edit')}}">Edit</a>
                <form action="{{url('makanan/'.$makanan->id)}}" method="POST">
                    @csrf
                    {{method_field('DELETE')}}
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    @endsection