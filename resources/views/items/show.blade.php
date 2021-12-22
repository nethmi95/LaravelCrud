@extends('layouts.app')

@section('content')
    <h1>Items Show</h1>
    <hr/>

    <div class="bg-dark text-white rounded p-3">
        <h5 class="text-warning">Item Name</h5>
        <p class="fw-bold">{{ $item->ItemName }}</p>

        <h5 class="text-warning">Price</h5>
        <p class="fw-bold">$ {{ $item->Price }}</p>

    </div>

@endsection