@extends('layouts.app')

@section('content')
    <h1>Edit Skema Sertifikasi</h1>
    <form method="POST" action="{{ route('skema.update', $skema->id) }}">
        @csrf
        @method('PUT')
        <label for="Kd_skema">Kode Skema:</label>
        <input type="text" name="Kd_skema" value="{{ $skema->Kd_skema }}" required>
        <br>
        <label for="Nm_skema">Nama Skema:</label>
        <input type="text" name="Nm_skema" value="{{ $skema->Nm_skema }}" required>
        <br>
        <label for="Jenis">Jenis:</label>
        <input type="text" name="Jenis" value="{{ $skema->Jenis }}" required>
        <br>
        <label for="Jml_unit">Jumlah Unit:</label>
        <input type="number" name="Jml_unit" value="{{ $skema->Jml_unit }}" required>
        <br>
        <button type="submit">Simpan Perubahan</button>
    </form>
@endsection
