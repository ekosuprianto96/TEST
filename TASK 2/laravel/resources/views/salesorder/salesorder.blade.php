@extends('layout.main')

@section('content')
<div class="col-lg-9 mt-4">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('salesorder.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Daftar Pelanggan</label>
                    <select class="form-select" name="pelanggan" aria-label="Default select example">
                        <option selected>Pilih Pelanggan</option>
                        @foreach($pelanggan as $pl)
                        <option value="{{ $pl->id }}">{{ $pl->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Daftar Produk</label>
                    <select class="form-select" name="produk" aria-label="Default select example">
                        <option selected>Pilih Produk</option>
                        @foreach($produk as $pr)
                        <option value="{{ $pr->id }}">{{ $pr->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection