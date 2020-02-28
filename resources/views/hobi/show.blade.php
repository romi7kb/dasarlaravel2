@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Data hobi
                </div>
                <div class="card-body">
                    <form action="{{route('hobi.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama hobi</label>
                            <input type="text" name="hobi" id="" class="form-control" value="{{$hobi->hobi}}" readonly>
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
