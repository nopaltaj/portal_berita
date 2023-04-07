@extends('admin.parent')

@section('content')
    <form action="{{ route('siswa.store') }}" method="post">
        @csrf
        @method('POST')

        <label for="" class="form-label">Nama Siswa</label>
        <input type="text" class="form-control " name="name">

        <label for="" class="form-label mt-3">Nomor siswa</label>
        <input type="number" class="form-control" name="phone">

        <label for="" class="form-label mt-3">Alamat Siswa</label>
        <textarea name="address" class="form-control" id="" cols="30" rows="10"></textarea>

        <button type="submit" class="btn btn-primary mt-3">Add Siswa</button>
    </form>
@endsection
