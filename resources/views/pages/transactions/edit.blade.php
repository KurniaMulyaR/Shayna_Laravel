@extends('layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
        <strong>Ubah Transaksi</strong>
        <small>{{ $item->uuid }}</small>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('transactions.update', $item->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name" class="form-control-label">Nama Pemesan</label>
                <input type="text" 
                       value="{{ old('name') ? old('name') : $item->name  }}" 
                       class="form-control @error('name') is-invalid @enderror" 
                       name="name">
                @error('name') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="email" class="form-control-label">Email</label>
                <input type="email" 
                       value="{{ old('email') ? old('type') : $item->email}}" 
                       class="form-control @error('email') is-invalid @enderror" 
                       name="email">
                @error('email') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="number" class="form-control-label">Nomor Hp</label>
                <input type="text" 
                        name="number"
                       value="{{ old('number') ? old('number') : $item->number}}" 
                       class="form-control @error('number') is-invalid @enderror" 
                       >
                @error('number') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="address" class="form-control-label">Alamat Pemesan</label>
                <input type="text" 
                       value="{{ old('address') ? old('address') : $item->address}}" 
                       class="form-control @error('address') is-invalid @enderror" 
                       name="address">
                @error('address') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">
                    Ubah Transaksi
                </button>
            </div>
        </form>
    </div>
</div>
@endsection