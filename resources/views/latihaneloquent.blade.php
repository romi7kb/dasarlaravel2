@extends('layouts.template')
@section('konten')

<h3>{{$mahasiswa->nama}}</h3>
<h5>Hobi :
    @foreach($mahasiswa->hobi as $val)
    <li>
        {{$val->hobi}}
    </li>
    @endforeach
</h5>
<h4>
    <li>
        Nama wali : <strong>{{$mahasiswa->wali->nama}}</strong>
    </li>
    <li>Dosen Pembimbing : <strong>{{$mahasiswa->dosen->nama}}</strong>
    </li>
    <li>NIPD : <strong>{{$mahasiswa->dosen->nipd}}</strong></li>
</h4>
<hr>
@endsection
