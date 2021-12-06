@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Keranjang</h1>
                <h6 class="card-subtitle mt-2 text-muted">Detail pembelian : </h6>
            </div>
            <div class="col-7 mt-3">
                @foreach($dataKeranjang as $data)
                <img src="{{$data->bukus->gambar}}" class="img-thumbnail">
                @endforeach
            </div>
            <div class="col-5">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-info text-center">Detail Pembelian</li>
                    
                    <li class="list-group-item"><strong>Buku : <br> </strong>@foreach($dataKeranjang as $data){{$data->bukus->judul}}<br>@endforeach</li>
                    <li class="list-group-item"><strong>Harga </strong>
                    
                    Rp. <?php  
                        $harga = 0;
                        foreach($dataKeranjang as $data){
                            $harga += $data->bukus->harga*$data->jumlah;
                        }
                        echo $harga;
                    ?>
                
                </li>
                <li class="list-group-item"><strong>Rekening : </strong>(BCA) 78013051 a/n TokoBukuOnline</li>
                </ul>
                <br>
                <h6>Note : Bukti pembayaran diupload melalui link Google Drive</h6>
                <a href="/sukses" class="btn btn-primary mt-4">Beli</a>
            </div>
            
        </div>
    </div>

@endsection