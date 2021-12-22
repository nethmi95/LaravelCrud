@extends('layouts.app')

@section('content')

<h1>Products Update</h1>
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

<form action="{{ route('items.update', $item->id) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="ItemName" class="form-control mb-3" placeholder="Item Name" value="{{ $item->ItemName }}"/>
    
    <input type="number" name="Price" class="form-control mb-3" placeholder="Price $$" value="{{ $item->Price }}"/>
    
    
    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
</form>

@endsection