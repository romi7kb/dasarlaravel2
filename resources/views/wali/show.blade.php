@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Data Mahasiswa
                </div>
                <div class="card-body">

                    @csrf
                    <div class="form-group">
                        <label for="">Nama Wali</label>
                        <input type="text" name="nama" id="" class="form-control" value="{{$wali->nama}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Mahasiswa</label>
                        <input type="text" name="nama_mahasiswa" id="" class="form-control"
                            value="{{$wali->mahasiswa->nama}}" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url()->previous()}}" class="btn btn-primary">kembali</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
