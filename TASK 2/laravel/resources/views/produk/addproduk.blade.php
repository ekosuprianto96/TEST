@extends('layout.main')

@section('content')
<div class="col-lg-9 mt-4">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('produk.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Produk</label>
                    <input type="text" name="nama" class="form-control" id="nama" required>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" name="harga" id="harga" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection