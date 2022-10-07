@extends('layout.main')

@section('content')
<div class="col-lg-9 mt-4">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h3>Daftar Produk</h3>
                </div>
                <div class="col-6 text-end">
                    <a class="btn btn-primary" href="{{ route('produk.show') }}">Tambah Produk</a>
                </div>
            </div>
            <div class="table-responsive mt-3">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Di Tambahkan</th>
                        <th scope="col">Di Edit</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach($produk as $prd)
                        <tr>
                            <th>{{ $i++ }}</th>
                            <td>{{ $prd->nama }}</td>
                            <td>Rp {{ $prd->harga }}</td>
                            <td>{{ $prd->created_at->format('d M Y') }}</td>
                            <td>{{ $prd->updated_at->format('d M Y') }}</td>
                            <td style="white-space: nowrap;">
                                <a href="{{ route('produk.showedit', $prd->id) }}" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                                <a href="{{ route('produk.destroy', $prd->id) }}" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i> Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection   
    
