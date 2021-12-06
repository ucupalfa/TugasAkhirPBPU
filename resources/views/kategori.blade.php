@extends('layouts.app')

@section('navbar')
    @foreach($dataKategori as $kategori)
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/home/{{$kategori->id}}">{{$kategori->kategori}}</a>
        </li>
    @endforeach
@endsection

@section('content')

<div class="container">
    <div class="row">
        @foreach ($data->mobils as $car)
            <div class="col">
                <div class="card m-2 mb-3" style="width: 18rem;">
                        <img src="{{$car->gambar}}" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">{{ $car->nama }}</h4>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $car->kategoris->kategori }}</h6>
                            <p class="card-text">{{ $car->deskripsi }}</p>
                            <h7 class="card-subtitle mb-2 text-dark"><strong>{{ $car->harga }} Juta</strong></h7>
                            <br>
                            <a href="/keranjang/{{$car->id}}" class="btn btn-primary">Buy it</a>
                        </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
            
    
@endsection


