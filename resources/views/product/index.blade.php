@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Product</h1>
        <a href="{{ route('product.create') }}" class="btn btn-primary">Add Product</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-responsive table-hover">
        <thead class="table-primary">
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Title</th>
                <th class="text-center">Price</th>
                <th class="text-center">Product Code</th>
                <th class="text-center">Description</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($products->count() > 0)
                @foreach($products as $rs)
                    <tr>
                        <td class="align-middle text-center">{{ $rs->id }}</td>
                        <td class="align-middle text-center">{{ $rs->title }}</td>
                        <td class="align-middle text-center">{{ $rs->price }}</td>
                        <td class="align-middle text-center">{{ $rs->product_code }}</td>
                        <td class="align-middle text-center">{{ $rs->description }}</td>
                        <td class="align-middle d-flex justify-content-center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('product.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('product.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('product.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center fw-bold" colspan="6">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
