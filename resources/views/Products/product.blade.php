@extends('admin.layouts.app')

@section('title','Product Data')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Products Data</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('products.add.save') }}" class="btn btn-primary mb-3">Add Product</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Product IMG</th>
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Product Category</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Product Size</th>
                        <th>Product Color</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($Products as $row)
                    <tr>
                        <th> {{ $no++ }} </th>
                        <td>
                            <img src="{{ asset('pictures/'.$row->img) }}" alt="" style="width: 100px;">
                        </td>
                        <td> {{ $row->product_code }} </td>
                        <td> {{ $row->product_name }} </td>
                        <td> {{ $row->Category->name }} </td>
                        <td> {{ $row->price }} </td>
                        <td> {{ $row->quantity }} </td>
                        <td> {{ $row->Size->name }} </td>
                        <td> {{ $row->Color->name }} </td>
                        <td>
                            <a href="{{ route('products.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('products.delete', $row->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
