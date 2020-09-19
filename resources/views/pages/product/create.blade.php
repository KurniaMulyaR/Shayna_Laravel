@extends('layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
        <strong>Tambah Barang</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="form-control-label">Nama Barang</label>
                <input type="text" 
                       value="{{ old('name') }}" 
                       class="form-control @error('name') is-invalid @enderror" 
                       name="name">
                @error('name') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="type" class="form-control-label">Tipe Barang</label>
                <input type="text" 
                       value="{{ old('type') }}" 
                       class="form-control @error('type') is-invalid @enderror" 
                       name="type">
                @error('type') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="description" class="form-control-label">Deskripsi Barang</label>
                <textarea class="ckeditor form-control @error('description') is-invalid @enderror" 
                       name="description">{{ old('description') }}</textarea>
                @error('description') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="price" class="form-control-label">Harga barang</label>
                <input type="text" 
                       value="{{ old('price') }}" 
                       class="form-control @error('price') is-invalid @enderror" 
                       name="price">
                @error('price') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="quantity" class="form-control-label">Kuantitas Barang</label>
                <input type="text" 
                       value="{{ old('quantity') }}" 
                       class="form-control @error('quantity') is-invalid @enderror" 
                       name="quantity">
                @error('quantity') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">
                    Tambah Barang
                </button>
            </div>
        </form>
    </div>
</div>
@endsection