@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Ubah Data hobi
                </div>
                <div class="card-body">
                    <form action="{{route('hobi.update',$hobi->id)}}" method="post">
                        @csrf
                        <!-- <input type="hidden" name="_method" value="PUT"> -->
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama hobi</label>
                            <input type="text" name="nama" id="" class="form-control" value="{{$hobi->hobi}}" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
