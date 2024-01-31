@extends('layouts.app')

@section('content')
    <h1>Tambah Skema Sertifikasi Baru</h1>
    <form method="POST" action="{{ route('skema.store') }}">
        @csrf
        <label for="Kd_skema">Kode Skema:</label>
        <input type="text" name="Kd_skema" required>
        <br>
        <label for="Nm_skema">Nama Skema:</label>
        <input type="text" name="Nm_skema" required>
        <br>
        <label for="Jenis">Jenis:</label>
        <input type="text" name="Jenis" required>
        <br>
        <label for="Jml_unit">Jumlah Unit:</label>
        <input type="number" name="Jml_unit" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection
