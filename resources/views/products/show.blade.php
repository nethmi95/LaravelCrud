@extends('layouts.app')

@section('content')
    <h1>Products Show</h1>
    <hr/>

    <div class="bg-dark text-white rounded p-3">
        <h5 class="text-warning">Name</h5>
        <p class="fw-bold">{{ $product->Name }}</p>

        <h5 class="text-warning">Price</h5>
        <p class="fw-bold">$ {{ $product->Price }}</p>

        <h5 class="text-warning">Description</h5>
        <p class="fw-bold">{{ $product->Description }}</p>
    </div>

@endsection