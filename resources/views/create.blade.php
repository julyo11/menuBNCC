@extends('layouts.template')
@section('content')
    <form action="{{url('makanan')}}" method="POST">
        @csrf
        <label>Nama</label>
        <input type="text" name="name"/>
        {{$errors->first('name')}}
        <label>Deskripsi</label>
        <input type="text" name="description"/>
        {{$errors->first('description')}}
        <label>Harga</label>
        <input type="text" name="price"/>
        {{$errors->first('price')}}
        <button type="submit">Save</button>
    </form>
@endsection