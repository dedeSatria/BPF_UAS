@extends('template/admin')

@section('content')
<br>
<div class="col">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Ubah Data Produk</h3>
        </div>
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <!-- Nama Produk -->
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $product->product_name }}" placeholder="Masukkan Nama Produk">
                    </div>
                </div>
                <!-- Deskripsi -->
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Deskripsi</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ $product->description }}" placeholder="Masukkan Deskripsi Produk">
                    </div>
                </div>
                <!-- Harga -->
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}" placeholder="Masukkan Harga">
                    </div>
                </div>
                <!-- Type -->
                <div class="row">
                    <div class="col col-md-12 form-group">
                        <label>Type</label>
                        <select class="form-control" name="type">
                            <option value="Joki Rank">Joki Rank</option>
                            <option value="Joki Classic">Joki Classic</option>
                            <option value="Joki MCL">Joki MCL</option>
                            <option value="Paket Joki">Paket Joki</option>
                        </select>
                    </div>
                </div>
                <!-- Gambar -->
                <div class="row">
                    <div class="co col-md-12 form-group">
                        <label for="exampleInputFile">Gambar</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image_url" name="image_url">
                                <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{ url('plugins/summernote/summernote-bs4.min.css') }}">
@endsection

@section('js')
<script src="{{ url('plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
$(function() {
    $('#deskripsi_form').summernote()
})
</script>
@endsection
