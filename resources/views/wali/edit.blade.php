@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Edit Data Wali
                </div>
                <div class="card-body">
                    <form action="{{route('wali.update',$wali->id)}}" method="post">
                        @csrf
                        <!-- <input type="hidden" name="_method" value="PUT"> -->
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Wali</label>
                            <input type="text" name="nama" id="" class="form-control" value="{{$wali->nama}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Nama Mahasiswa</label>
                            <select class="form-control" name="id_mahasiswa" id="exampleFormControlSelect1">
                                @foreach($mhs as $data)
                                <option value="{{$data->id}}" {{$data->id == $wali->id_mahasiswa ? "selected":""}}>
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
