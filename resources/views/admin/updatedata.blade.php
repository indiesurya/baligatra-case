@extends('layouts.layout')
@section('container')
    <div class="container mt-4">
        <form action="{{ url('/updatedata/'.$data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="mb-3">
                <label for="desc" class="form-label">Description</label>
                <input type="text" class="form-control" name="desc" autofocus autocomplete="off" value="{{ $data->desc}}">
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" class="form-control" name="photo" value="{{ $data->photo}}">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" name="harga" autocomplete="off" value="{{ $data->harga}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection