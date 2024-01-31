@extends('layouts.app')

@section('content')
    <h1>Edit Data Peserta Sertifikasi</h1>
    <form method="POST" action="{{ route('peserta.update', $peserta->id) }}">
        @csrf
        @method('PUT')
        <label for="Nm_peserta">Nama Peserta:</label>
        <input type="text" name="Nm_peserta" value="{{ $peserta->Nm_peserta }}" required>
        <br>
        <label for="Jekel">Jenis Kelamin:</label>
        <input type="text" name="Jekel" value="{{ $peserta->Jekel }}" required>
        <br>
        <label for="Alamat">Alamat:</label>
        <input type="text" name="Alamat" value="{{ $peserta->Alamat }}" required>
        <br>
        <label for="No_hp">Nomor HP:</label>
        <input type="text" name="No_hp" value="{{ $peserta->No_hp }}" required>
        <br>
        <button type="submit">Simpan Perubahan</button>
    </form>
@endsection
