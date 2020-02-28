@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Wali
                </div>
                <div class="card-body">
                    <form action="{{route('wali.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Wali</label>
                            <input type="text" name="nama" id="" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Nama Mahasiswa</label>
                            <select class="form-control" name="id_mahasiswa" id="exampleFormControlSelect1">
                                @foreach($mhs as $data)
                                <option value="{{$data->id}}">{{$data->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
