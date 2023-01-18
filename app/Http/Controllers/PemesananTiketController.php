<?php

namespace App\Http\Controllers;

use App\Models\tiket;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PemesananTiketController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function pesan(Request $request){
        $tiket = new tiket();
        $tiket->nama = $request->nama;
        $tiket->alamat = $request->alamat;
        $tiket->no_hp = $request->no_hp;
        $tiket->email = $request->email;
        $tiket->tanggal = $request->date;
        $tiket->status = 1;
        $tiket->save();

        return view('detailTiket', ['tiket' => $tiket]);
    }

    public function dataPesanan(){
        $data = tiket::all();

        return view('dataPesananTiket', ['data' => $data]);
    }

    public function editPesanan($tiket_id){
        $tiket = tiket::where('tiket_id', $tiket_id)->first();

        return view('editPesanan', ['tiket' => $tiket]);
    }

    public function update(Request $request){
        $tiket = tiket::where('tiket_id', $request->tiketId)->first();
        $tiket->nama = $request->nama;
        $tiket->alamat = $request->alamat;
        $tiket->no_hp = $request->no_hp;
        $tiket->email = $request->email;
        $tiket->tanggal = $request->date;
        $tiket->status = $request->status;
        $tiket->update();

        return redirect('/data-pesanan');
    }

    public function delete($id){
        $tiket = tiket::where('tiket_id', $id)->delete();

        return redirect('/data-pesanan');
    }
}
