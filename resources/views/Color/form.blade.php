@extends('admin.layouts.app')

@section('title', 'Form Color')

@section('contents')
<form action="{{ isset($Color) ? route('color.add.update', $Color->id) : route('color.add.save') }}" method="post">
@csrf
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{{ isset($Color) ? 'Form Edit Color' : 'Form Add Color'}}</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Color Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ isset($Color) ? $Color->name : '' }}">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
