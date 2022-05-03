@extends('layouts.layout')
@section('container')
    <div class="container mt-4">
        <div class="row justify-content-between">
            <div class="col-md-3">
                <p><a class="btn btn-primary" href="/inputdata">Insert Data</a></p>
            </div>
            <div class="col-md-3">
                <p class="float-end "><a href="/logout" class="btn btn-primary">Logout <i class="bi bi-box-arrow-right"></i></a></p>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i=0; @endphp
                @foreach($data as $item)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{$item->desc}}</td>
                    <td><img src="{{ asset('storage/'.$item->photo) }}" alt="" style="width: 200px;"></td>
                    <td>{{$item->harga}}</td>
                    <td><a href="/updatedata/{{$item->id}}"><i class="bi bi-pencil btn-sm btn-primary"></i> </a>|<a href="/hapus/{{ $item->id }}"> <i class="bi bi-trash btn-sm btn-danger"></i></a></td>
                </tr>
                @php $i++@endphp
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container mt-4">
        {{ $data->links() }}
    </div>
@endsection