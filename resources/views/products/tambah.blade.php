@extends('template/admin')

@section('content')
    <div class="col">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Product</h3>
            </div>
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label for="product_name">Nama Produk</label>
                            <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Masukkan Nama Produk">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label for="image_url">Gambar</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image_url" name="image_url">
                                    <label class="custom-file-label" for="image_url">Pilih Gambar</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label for="description">Deskripsi</label>
                            <input type="text" class="form-control" id="description" name="description" placeholder="Masukkan Deskripsi">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label for="price">Harga</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Masukkan Harga">
                        </div>
                    </div>
                    <!-- Field Type -->
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label for="type">Type</label>
                            <select class="form-control" name="type">
                                <option value="Joki Rank">Joki Rank</option>
                                <option value="Joki Classic">Joki Classic</option>
                                <option value="Joki MCL">Joki MCL</option>
                                <option value="Paket Joki">Paket Joki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
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
            $('#deskripsi_form').summernote();
        });
    </script>
@endsection
