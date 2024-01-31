@extends('layouts.app')

@section('content')
    <h1>Daftar Skema Sertifikasi</h1>
    <form action="{{ route('skema.search') }}" method="GET" class="form-inline mb-3">
        <div class="form-group mr-2">
            <input type="text" name="search" class="form-control" placeholder="Cari skema">
        </div>
        <button type="submit" class="btn btn-primary">Cari</button>
    </form>

    <a href="{{ route('skema.create') }}">Tambah Skema Baru</a>

    <table border ="1">
        <tr>
            <th>Kode Skema</th>
            <th>Nama Skema</th>
            <th>Jenis</th>
            <th>Jumlah Unit</th>
            <th>Aksi</th>
        </tr>
        @foreach($skemas as $skema)
        <tr>
            <td>{{ $skema->Kd_skema }}</td>
            <td>{{ $skema->Nm_skema }}</td>
            <td>{{ $skema->Jenis }}</td>
            <td>{{ $skema->Jml_unit }}</td>
            <td>
                <a href="{{ route('skema.edit', $skema->id) }}">Edit</a>
                <form action="{{ route('skema.destroy', $skema->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $skemas->links() }}

@endsection
