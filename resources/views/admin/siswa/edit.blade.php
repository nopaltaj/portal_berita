@extends('admin.parent')

@section('content')
    <form action="{{ route('siswa.update', $siswa->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="" class="form-label">Nama Siswa</label>
        <input type="text" class="form-control " name="name" value="{{ $siswa->name }}">

        <label for="" class="form-label mt-3">Nomor siswa</label>
        <input type="number" class="form-control" name="phone" value="{{ $siswa->phone }}">

        <label for="" class="form-label mt-3">Alamat Siswa</label>
        <textarea name="address" class="form-control" id="" cols="30" rows="10">{{ $siswa->address }}</textarea>

        <button type="submit" class="btn btn-primary mt-3">Edit Siswa</button>
    </form>
@endsection
