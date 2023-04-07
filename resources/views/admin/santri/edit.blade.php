@extends('admin.parent')

@section('content')
    <form action="{{ route('santri.update', $santri->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="" class="form-label">Nama santri</label>
        <input type="text" class="form-control " name="name" value="{{ $santri->name }}">

        <label for="" class="form-label mt-3">Nomor santri</label>
        <input type="number" class="form-control" name="phone" value="{{ $santri->phone }}">

        <label for="" class="form-label mt-3">Alamat santri</label>
        <textarea name="address" class="form-control" id="" cols="30" rows="10">{{ $santri->address }}</textarea>

        <label for="" class="form-label">Nama santri</label>
        <input type="text" class="form-control " name="city" value="{{ $santri->city }}">

        <label for="" class="form-label mt-3">Nomor santri</label>
        <input type="date" class="form-control" name="date" value="{{ $santri->date }}">


        <button type="submit" class="btn btn-primary mt-3">Edit Santri</button>
    </form>
@endsection
