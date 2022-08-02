@extends('layouts.app')

@section('content')

<h1>edit product</h1>

<form action="{{ route('products.update', $product->id) }}" method="post">

    @method('put')
    @csrf

    <input placeholder="name" name="name" value="{{ $product->name }}" type="text" class="form-control">

    <br>

    <textarea name="description" name="description" id="" cols="30" rows="10" class="form-control">{{ $product->description }}</textarea>

    <br>

    <input  placeholder="price" name="price" type="text" value="{{ $product->price }}" name="price" id="" class="form-control">

    <br>

    <button class="btn btn-success">edit Product</button>

</form>

@endsection