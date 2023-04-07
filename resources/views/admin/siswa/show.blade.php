@extends('admin.parent')

@section('content')

<label for="" class="label form-label">Nama Siswa</label>
<input type="text" class="form-control" value="{{ $siswa->name }}" readonly>

<label for="" class="label form-label mt-3">Nomor Siswa</label>
<input type="text" class="form-control" value="{{ $siswa->phone }}" readonly>

<label for="" class="label form-label mt-3">Alamat siswa</label>
<textarea class="form-control" name="" id="" cols="30" rows="10" readonly>
    {!! $siswa->address !!}
</textarea>

<a href="{{ route('siswa.index') }}" class="btn btn-outline-primary mt-3">
    Back
</a>

@endsection