@extends('layouts.app')

@section('content')
    <h1>Daftar Peserta Sertifikasi</h1>
    <form action="{{ route('peserta.search') }}" method="GET" class="form-inline mb-3">
        <div class="form-group mr-2">
            <input type="text" name="search" class="form-control" placeholder="Cari peserta">
        </div>
        <button type="submit" class="btn btn-primary">Cari</button>
    </form>
    <a href="{{ route('peserta.create') }}">Tambah Peserta Baru</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Kode Skema</th>
                <th>Nama Peserta</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Nomor HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pesertas as $peserta)
            <tr>
                <td>{{ $peserta->Kd_skema }}</td>
                <td>{{ $peserta->Nm_peserta }}</td>
                <td>{{ $peserta->Jekel }}</td>
                <td>{{ $peserta->Alamat }}</td>
                <td>{{ $peserta->No_hp }}</td>
                <td>
                    <a href="{{ route('peserta.edit', $peserta->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('peserta.destroy', $peserta->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $pesertas->links() }}

@endsection
