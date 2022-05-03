
@extends('layouts.layout')
@section('container')
    <div class="container mt-4">
        <div class="row">
            @foreach($data as $item)
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('storage/'.$item->photo) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->desc }}</h5>
                        <p class="card-text">{{ $item->harga}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container mt-4">
    {{ $data->links() }}
    </div>
@endsection
