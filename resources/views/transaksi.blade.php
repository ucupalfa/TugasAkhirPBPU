@extends('layouts.app')


@section('content')
<?php

$buktiPembayaran = $_POST["buktiPembayaran"];

?>

<div class="container">
    <div class="row">
        <div class="col">
            <a href="/transaksi/{{$buktiPembayaran}}" class="btn btn-warning">Konfirmasi</a>
        </div>
    </div>
</div>




@endsection