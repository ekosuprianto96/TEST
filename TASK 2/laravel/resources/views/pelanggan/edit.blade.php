@extends('layout.main')

@section('content')
<div class="col-lg-9 mt-4">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('pelanggan.edit', $pelanggan->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Pelanggan</label>
                    <input value="{{ $pelanggan->nama }}" type="text" name="nama" class="form-control" id="nama" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Pelanggan</label>
                    <input type="email" value="{{ $pelanggan->email }}" class="form-control" name="email" id="email" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection