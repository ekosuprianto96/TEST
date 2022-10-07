@extends('layout.main')

@section('content')
<div class="col-lg-9 mt-4">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h3>Daftar Pelanggan</h3>
                </div>
                <div class="col-6 text-end">
                    <a class="btn btn-primary" href="{{ route('pelanggan.add') }}">Tambah Pelanggan</a>
                </div>
            </div>
            <div class="table-responsive mt-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pelanggan</th>
                            <th scope="col">Email Pelanggan</th>
                            <th scope="col">Di Tambahkan</th>
                            <th scope="col">Di Edit</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;    
                        @endphp
                        @foreach($pelanggan as $pl)
                        <tr>
                            <th>{{ $i++ }}</th>
                            <td>{{ $pl->nama }}</td>
                            <td>{{ $pl->email }}</td>
                            <td>{{ $pl->created_at->format('d M Y') }}</td>
                            <td>{{ $pl->updated_at->format('d M Y') }}</td>
                            <td style="white-space: nowrap;">
                                <a href="{{ route('pelanggan.showedit', $pl->id) }}" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                                <a href="{{ route('pelanggan.destroy', $pl->id) }}" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i> Hapus</a>
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
    
