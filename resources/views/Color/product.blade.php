@extends('admin.layouts.app')

@section('title','Color Data')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Color Data</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('color.add.save') }}" class="btn btn-primary mb-3">Add Color</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Color Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($Color as $row)
                    <tr>
                        <th> {{ $no++ }} </th>
                        <td> {{ $row->name }} </td>
                        <td>
                            <a href="{{ route('color.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('color.delete', $row->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
