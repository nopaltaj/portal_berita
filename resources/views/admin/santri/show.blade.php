@extends('admin.parent')

@section('content')

<label for="" class="label form-label">Nama Santri</label>
<input type="text" class="form-control" value="{{ $santri->name }}" readonly>

<label for="" class="label form-label mt-3">Nomor Santri</label>
<input type="text" class="form-control" value="{{ $santri->phone }}" readonly>

<label for="" class="label form-label mt-3">Alamat Santri</label>
<textarea class="form-control" name="" id="" cols="30" rows="10" readonly>
    {!! $santri->address !!}
</textarea>

<label for="" class="label form-label">Kota Siswa</label>
<input type="text" class="form-control" value="{{ $santri->city }}" readonly>

<label for="" class="label form-label mt-3">Date Santri</label>
<input type="date" class="form-control" value="{{ $santri->date }}" readonly>



<a href="{{ route('santri.index') }}" class="btn btn-outline-primary mt-3">
    Back
</a>

@endsection