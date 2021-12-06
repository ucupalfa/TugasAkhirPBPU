@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
           
        </div>

        <div class="row">
        @foreach($dataTransaksi as $buku)
        <div class="col">
            <div class="card mb-3" style="width: 18rem;">
                <div class="card-body">
                    <h4 class="card-title">{{ $buku->users->name }}</h4>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $buku->tanggal }}</h6>
                    <a target="blank" href="{{ $buku->status }}">{{ $buku->status }}</a>
                    <br>
                    <a href="konfirmasi/{{$buku->id}}" class="btn btn-warning">Konfirmasi</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</div>
@endsection