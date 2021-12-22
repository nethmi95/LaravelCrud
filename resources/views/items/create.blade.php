@extends('layouts.itemapp')

@section('content')

<h1>Item Create</h1>
<hr/>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('items.store') }}" method="post">
    @csrf
    <input type="text" name="ItemName" class="form-control mb-3" placeholder="Item Name"/>
    
    <input type="number" name="Price" class="form-control mb-3" placeholder="Price $$"/>
    
    
    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
</form>

@endsection   
