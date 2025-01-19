@extends('layouts.app')

@section('content')
    <h1 class="mt-4">Detail Murid</h1>

    <table class="table mt-3">
        <tr>
            <th>Nama</th>
            <td>{{ $student->nama }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $student->umur }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $student->kelas }}</td>
        </tr>
    </table>
    <a href="{{ route('Hallo') }}" class="btn btn-success btn-sm">kembali</a>
@endsection