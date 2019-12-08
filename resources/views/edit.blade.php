@extends('layouts.template')
@section('content')
    <form action="{{url('makanan/'.$makanan->id)}}" method="POST">
        @csrf
        {{method_field('PUT')}}
        <label>Nama</label>
        <input type="text" name="name" value="{{$makanan->name}}"/>
        {{$errors->first('name')}}
        <label>Deskripsi</label>
        <input type="text" name="description" value="{{$makanan->description}}"/>
        {{$errors->first('description')}}
        <label>Harga</label>
        <input type="text" name="price" value="{{$makanan->price}}"/>
        {{$errors->first('price')}}
        <button type="submit">Save</button>
    </form>
@endsection