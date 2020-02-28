@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Edit Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="{{route('mahasiswa.update',$mhs->id)}}" method="post">
                        @csrf
                        <!-- <input type="hidden" name="_method" value="PUT"> -->
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Mahasiswa</label>
                            <input type="text" name="nama" id="" class="form-control" value="{{$mhs->nama}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Induk Mahasiswa</label>
                            <input type="text" name="nim" id="" class="form-control" value="{{$mhs->nim}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Dosen Pembimbing</label>
                            <select class="form-control" name="id_dosen" id="exampleFormControlSelect1">
                                @foreach($dosen as $data)
                                <option value="{{$data->id}}" {{$data->id == $mhs->id_dosen ? "selected":""}}>
                                    {{$data->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning">ubah</button>
                            <a href="{{url()->previous()}}" class="btn btn-primary">kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
