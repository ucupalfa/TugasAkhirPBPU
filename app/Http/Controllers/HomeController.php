<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\transaksi;
use App\Models\buku;
use App\Models\keranjang;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller{
    // Sistem Login
    // ------------
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin(){
        return view('admin');
    }


    
    // Nampilin semua data
    // --------------------
    public function index()
    {
        $data_user = Auth::user();
        
        if($data_user->isAdmin == 1){
            $transaksi = transaksi::all();
            return view('admin', ['dataTransaksi' => $transaksi]);
        }

        $dataBuku = buku::all();
        return view('home', ['dataBuku' => $dataBuku]);
    }




    // Nampilin satu Buku
    // -------------------
    public function keranjang()
    {
        $data_user = Auth::user();
        $dataKeranjang = keranjang::where('user_id', $data_user->id)->get();

        return view('keranjang',["dataKeranjang" => $dataKeranjang]);
    }



    // Nambah buku ke Keranjang
    // -------------------------
    public function tambahKeKeranjang(buku $id, string $ahay)
    {

        $data_user = Auth::user();
        $dataKeranjang = keranjang::where('user_id', $data_user->id)->where('buku_id', $id->buku_id)->get();

        if(!$dataKeranjang->count()){
            $keranjang = new keranjang;
            $keranjang->user_id = $data_user->id;
            $keranjang->buku_id = $id->buku_id;
            $keranjang->jumlah += 1;

            $keranjang->save();
        }else{
            DB::table('keranjang')->where('user_id', $data_user->id)->where('buku_id', $id->buku_id)->increment('jumlah');
        }

        if($ahay == "beli"){
            return redirect('/keranjang');
        }else{
            return redirect('/home');
        }

    }

    // Proses bayar
    // -------------
    public function sukses(){
        $data_user = Auth::user();
        $dataKeranjang = keranjang::where('user_id', $data_user->id)->get();

        return view('sukses',["dataKeranjang" => $dataKeranjang]);
    }



    // Masukin data ke transaksi
    // -------------------------
    public function transaksi()
    {
        $data_user = Auth::user();
        $dataBuku = buku::all();
        $tanggal = date("Y-m-d");

        $data1 = [
            'tanggal'=>$tanggal,
            'status'=>Request()->buktiPembayaran,
            'user_id' => $data_user->id
        ];

        DB::table('transaksi')->insert($data1);
        return view('home', ['dataBuku' => $dataBuku]);
    }


    // Konfirmasi admin
    // -----------------
    public function konfirmasi(transaksi $id)
    {
        DB::table('transaksi')->where('id', $id->id)->delete();
        DB::table('keranjang')->where('user_id', $id->user_id)->delete();
        return redirect('/home');
    }

    
}
