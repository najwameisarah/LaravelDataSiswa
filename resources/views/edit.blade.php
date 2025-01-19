@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header" style="background-color: #001f3f; color: white;">
        <div class="row">
            <div class="col">
                <h1>Form Mengedit</h1>
            </div>
            <div class="col d-flex justify-content-end align-items-center">
                <a href="{{ route('Hallo') }}" class="btn btn-secondary" style="background-color: rgb(70, 62, 62); color: white;">Back</a>
            </div>
        </div>
    </div>
    <form method="POST" action="{{ route('update', $student->id) }}">
        @csrf
        @method('PUT')
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" value="{{ $student->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="umur">Umur</label>
                <input type="number" class="form-control" name="umur" value="{{ $student->umur }}" required>
            </div>
            <div class="mb-3">
                <label for="class">Kelas</label>
                <input type="text" class="form-control" name="kelas"value="{{ $student->kelas }}" required>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" style="background-color: #001f3f; color: white;">SUBMIT</button>
        </div>
    </form>
</div>
@endsection
