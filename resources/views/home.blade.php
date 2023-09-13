@extends('master')
@section('content')
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->index }}</td>
                        <td><a href="{{ $product->id }}/show">{{ $product->name }} </a> </td>
                        <td>
                            <img src="products/{{ $product->image }}" class="rounded-circle" width="50" height="50">
                        </td>
                        <td>
                            <a href="/{{ $product->id }}/edit" class="btn btn-primary">Edit</a>
                            {{-- <a href="/{{$product->id}}/delete" class="btn btn-danger">delete</a> --}}
                            <form action="/{{ $product->id }}/delete" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            {{-- {{ $product->links() }} --}}
        </table>
    </div>
@endsection
