@extends('layouts.app')
@section('title', 'Product Index Page')
@section('content')
    <h5 class="mb-4">Tambah Product</h5>
    <form action="{{ route('product.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>

            <input type="text" name="name" class="form-control" id="name">

        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>

            <input type="number" name="price" class="form-control" id="price">

        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>

            <input type="number" name="stock" class="form-control" id="stock">

        </div>
        <div class="d-flex">
            <button type="submit" class="btn btn-primary me-3">Simpan</button>

            <a href="{{ route('product.index') }}" type="button" class="btn btn-danger">Batal</a>
        </div>
    </form>
@endsection
