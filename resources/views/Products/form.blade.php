@extends('admin.layouts.app')

@section('title', 'Form Product')

@section('contents')
<form action="{{ isset($Products) ? route('products.add.update', $Products->id) : route('products.add.save') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{{ isset($Products) ? 'Form Edit Product' : 'Form Add Product'}}</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="img" class="form-label">Product Image</label>
                    <input class="form-control-file" type="file" id="img" name="img">
                    @if(isset($Products) && $Products->img)
                        <img src="{{ asset('pictures/'.$Products->img) }}" alt="Product Image" style="max-width: 200px;">
                    @endif
                </div>
                <div class="form-group">
                    <label for="product_code">Product Code</label>
                    <input type="text" class="form-control" id="product_code" name="product_code" value="{{ isset($Products) ? $Products->product_code : '' }}">
                </div>
                <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" value="{{ isset($Products) ? $Products->product_name : '' }}">
                </div>
                <div class="form-group">
                    <label>Gender</label><br>
                    <label><input type="radio" name="gender" value="Female" {{ isset($Products) && $Products->gender == 'Female' ? 'checked' : '' }}> Female</label>
                    <label><input type="radio" name="gender" value="Male" {{ isset($Products) && $Products->gender == 'Male' ? 'checked' : '' }}> Male</label>
                </div>
                <div class="form-group">
                    <label for="category_id">Product Category</label>
                    <select name="category_id" id="category_id" class="custom-select">
                        @foreach ($Category as $row)
                            <option value="{{ $row->id }}" {{ isset($Products) && $Products->category_id == $row->id ? 'selected' : '' }}>
                                {{ $row->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Product Price</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">IDR</span>
                        </div>
                        <input type="text" class="form-control" id="price" name="price"  value="{{ isset($Products) ? $Products->price : '' }}" pattern="\d+" title="Please enter numbers only">
                    </div>
                </div>
                <div class="form-group">
                    <label for="quantity">Product Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity"  value="{{ isset($Products) ? $Products->quantity : '' }}" pattern="\d+" title="Please enter numbers only">
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
<script>
    var priceInput = document.getElementById('price');
    var quantityInput = document.getElementById('quantity');

    priceInput.addEventListener('input', function(event) {
        this.value = this.value.replace(/\D/g, '');
    });

    quantityInput.addEventListener('input', function(event) {
        this.value = this.value.replace(/\D/g, '');
    });
</script>
