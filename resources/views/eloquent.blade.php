@extends('layouts.template')
@section('konten')
@foreach($mahasiswa as $data)
<h3>{{$data->nama}}<small>[{{$data->nim}}]</small></h3>
<h5>Hobi :
    @foreach($data->hobi as $val)
    <li>
        {{$val->hobi}}
    </li>
    @endforeach
</h5>
<h4>
    <li>
        Nama wali : <strong>{{$data->wali->nama}}</strong>
    </li>
    <li>Dosen Pembimbing : <strong>{{$data->dosen->nama}}</strong></li>
</h4>
<hr>
@endforeach

@endsection
