@extends('layouts.app')


@section('content')

<div class="container">
    @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
         </button>
    </div>
    @endif
    <div class="row">
        @foreach($dataBuku as $buku)
        <div class="col">
            <div class="card mb-3" style="width: 18rem;">
                <img src="{{$buku->gambar}}" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">{{ $buku->judul }}</h4>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $buku->penulis }}</h6>
                    <p class="card-text">{{ $buku->deskripsi }}</p>
                    <h7 class="card-subtitle mb-2 text-dark"><strong>Rp. {{ $buku->harga }}</strong></h7>
                    <br>
                    <a href="/tambah/{{$buku->buku_id}}/beli" class="btn btn-primary">Beli</a>
                    
                    <a href="/tambah/{{$buku->buku_id}}/keranjang" class="btn btn-warning">Tambah</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
            
    
@endsection


