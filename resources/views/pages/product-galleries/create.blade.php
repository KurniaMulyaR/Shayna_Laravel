@extends('layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
        <strong>Tambah Foto Barang</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('product-galleries.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name" class="form-control-label">Nama Barang</label>
                <select name="products_id" class="form-control @error('products_id') is_invalid @enderror" id="">
                    @foreach ($products as $products)
                <option value="{{ $products->id }}">{{ $products->name }}</option>
                    @endforeach
                </select>
                @error('products_id') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="photo" class="form-control-label">Foto barang</label>
                <input type="file" 
                       accept="image/*"
                       value="{{ old('photo') }}" 
                       class="form-control @error('photo') is-invalid @enderror" 
                       name="photo">
                @error('photo') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="is_default" class="form-control-label">Jadikan Default</label>
                <br>
                <label>
                    <input type="radio" style="width: 21px"
                       value="1" 
                       class="form-control @error('is_default') is-invalid @enderror" 
                       name="is_default" /> Ya
                </label>
                &nbsp;
                <label>
                    <input type="radio" style="width: 21px"
                       value="1" 
                       class="form-control @error('is_default') is-invalid @enderror" 
                       name="is_default" /> Tidak
                </label>
                @error('is_default') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">
                    Tambah Foto Barang
                </button>
            </div>
        </form>
    </div>
</div>
@endsection