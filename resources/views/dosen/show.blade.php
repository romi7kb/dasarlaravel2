@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Dosen
                </div>
                <div class="card-body">
                    <form action="{{route('dosen.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Dosen</label>
                            <input type="text" name="nama" id="" class="form-control" value="{{$dosen->nama}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Induk Pegawai Dosen</label>
                            <input type="text" name="nipd" id="" class="form-control" value="{{$dosen->nipd}}" readonly>
                        </div>
                        <div class="form-group">
                            <a href="{{url()->previous()}}" class="btn btn-primary">kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
