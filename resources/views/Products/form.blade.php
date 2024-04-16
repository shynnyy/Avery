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
                    <label for="category_id">Product Category</label>
                    <select name="category_id" id="category_id" class="custom-select">
                        @foreach ($Category as $row)
                        <option value="{{ $row->id }}">{{ $row->name }}</option>
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
                <div class="form-group">
                    <label for="size_id">Product Size</label>
                    <select name="size_id" id="size_id" class="custom-select">
                        @foreach ($Size as $row)
                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="color_id">Product Color</label>
                    <select name="color_id" id="color_id" class="custom-select">
                        @foreach ($Color as $row)
                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                        @endforeach
                    </select>
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
<!-- Tambahkan script ini di bagian bawah halaman Anda -->
<script>
    // Mendapatkan elemen input harga dan kuantitas
    var priceInput = document.getElementById('price');
    var quantityInput = document.getElementById('quantity');

    // Menambahkan event listener untuk input harga
    priceInput.addEventListener('input', function(event) {
        // Menghapus karakter selain angka dari input
        this.value = this.value.replace(/\D/g, '');
    });

    // Menambahkan event listener untuk input kuantitas
    quantityInput.addEventListener('input', function(event) {
        // Menghapus karakter selain angka dari input
        this.value = this.value.replace(/\D/g, '');
    });
</script>
