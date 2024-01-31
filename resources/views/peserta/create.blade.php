@extends('layouts.app')

@section('content')
    <h1>Tambah Peserta Sertifikasi Baru</h1>
    <form method="POST" action="{{ route('peserta.store') }}">
        @csrf
                <label for="Kd_skema">Pilih Skema:</label>
                <select name="Kd_skema" class="form-control" required>
                    @foreach($skemas as $skema)
                        <option value="{{ $skema->Kd_skema }}">{{ $skema->Nm_skema }}</option>
                    @endforeach
                </select>
        <br>
        <label for="Nm_peserta">Nama Peserta:</label>
        <input type="text" name="Nm_peserta" required>
        <br>
        <label for="Jekel">Jenis Kelamin:</label>
        <input type="text" name="Jekel" required>
        <br>
        <label for="Alamat">Alamat:</label>
        <input type="text" name="Alamat" required>
        <br>
        <label for="No_hp">Nomor HP:</label>
        <input type="text" name="No_hp" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection
