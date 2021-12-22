@extends('layouts.itemapp')

@section('content')

<h1>Items</h1>
<a class="btn btn-link float-end"  href="{{ route('items.create') }}">Create Item</a>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table class="table table-striped table-hover">
    <thead>
        <tr></tr>
        <tr>
            <th scope="col">Item ID</th>
            <th scope="col">Item Name</th>
            <th scope="col">Item Price</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($items as $item) {{-- Loop products --}}
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $item->Name }}</td>
            <td>$ {{ $item->Price }}</td>
            <td>

                <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="actionDropdown"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <li><a class="dropdown-item" href="{{ route('items.show', $item->id) }}">View</a></li> {{-- View --}}
                        <li><a class="dropdown-item" href="{{ route('items.edit', $item->id) }}">Edit</a></li> {{-- Edit --}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('items.destroy', $item->id) }}" method="post"> {{-- Delete --}}
                                @csrf
                                @method('delete')
                                <button type="submit" class="dropdown-item">Delete</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

@endsection