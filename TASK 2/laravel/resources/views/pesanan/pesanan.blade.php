@extends('layout.main')

@section('content')
<div class="col-lg-9 mt-4">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h3>Daftar Pesanan Penjualan</h3>
                </div>
            </div>
            <div class="table-responsive mt-3">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col" style="white-space: nowrap;">Nama Pelanggan</th>
                        <th scope="col" style="white-space: nowrap;">Email Pelanggan</th>
                        <th scope="col" style="white-space: nowrap;">Produk</th>
                        <th scope="col" style="white-space: nowrap;">Harga Produk</th>
                        <th scope="col" style="white-space: nowrap;">Tanggal Pembelian</th>
                        <th scope="col" style="white-space: nowrap;">Created At</th>
                        <th scope="col" style="white-space: nowrap;">Updated At</th>
                        <th scope="col" style="white-space: nowrap;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach($penjualan as $pj)
                        <tr>
                            <th>{{ $i++ }}</th>
                            <td style="white-space: nowrap;">{{ $pj->nama_pelanggan }}</td>
                            <td style="white-space: nowrap;">{{ $pj->email_pelanggan }}</td>
                            <td style="white-space: nowrap;">{{ $pj->produk }}</td>
                            <td style="white-space: nowrap;">Rp {{ $pj->harga_produk }}</td>
                            <td style="white-space: nowrap;">{{ Carbon\carbon::parse($pj->tanggal_pembelian)->format('d M Y') }}</td>
                            <td style="white-space: nowrap;">{{ $pj->created_at->format('d M Y') }}</td>
                            <td style="white-space: nowrap;">{{ $pj->updated_at->format('d M Y') }}</td>
                            <td style="white-space: nowrap;">
                                <a href="{{ route('penjualan.destroy', $pj->id) }}" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i> Hapus</a>
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
    
