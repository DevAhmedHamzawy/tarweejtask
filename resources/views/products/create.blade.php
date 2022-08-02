@extends('layouts.app')

@section('content')

<h1>add product</h1>

<form action="{{ route('products.store') }}" method="post">

    @csrf

    <input placeholder="name" name="name" type="text" class="form-control">

    <br>

    <textarea name="description" name="description" id="" cols="30" rows="10" class="form-control">description</textarea>

    <br>

    <input  placeholder="price" name="price" type="text" name="price" id="" class="form-control">

    <br>

    <button class="btn btn-success">Add Product</button>

</form>

@endsection