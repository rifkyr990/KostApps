<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use App\Models\Status;
use App\Models\Confirm;
use App\Models\Reservasi;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = Status::with('reservasi')->get();
        $pembayaran = Pembayaran::with('reservasi')->get();
        $reservasi = Reservasi::with('status','pembayaran')->get();

        return view('dashboard', compact('status', 'pembayaran', 'reservasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Kost $kost)
    {
        
        return view('reservasi.create', compact('kost'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addreserv(Request $request, $id)
    {
        $kost = Kost::find($id);

        $reservasi = new Reservasi;
        $reservasi->kost_id = $kost->id;
        $reservasi->nama_pemesan = $request->nama_pemesan;
        $reservasi->alamat_pemesan = $request->alamat_pemesan;
        $reservasi->telp = $request->telp;
        $reservasi->tanggal = $request->tanggal;
        $reservasi->total_cost = $kost->harga;
        $reservasi->user_id = auth()->id();
        $reservasi->save();

        return redirect()->route('payment', $reservasi->id)->with('success', 'berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function show(Reservasi $reservasi)
    {
        return view('show', compact('reservasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function ganti(Reservasi $reservasi)
    {
        $status = Status::all();
        $pembayaran = Pembayaran::all();

        return view('reservasi.edit', compact('reservasi', 'status', 'pembayaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function perbaharui(Request $request, Reservasi $reservasi)
    {
        $input = $request->all();
        $reservasi->update($input);

        return redirect()->route('home')->with('success', 'Orderan berhasil diupdate');
    }

    public function myorder()
    {
        $reservasi = Reservasi::where('user_id', Auth::id())->get();

        return view('myorder', compact('reservasi'));
    }

    public function confirm()
    {
        return view('confirm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addconfirm(Request $request) {
        $request->validate([
            'foto' => 'required|file|mimes:png,jpg,svg|max:2048',
        ]);

        $gambar = $request->file('foto');
        $destinationPath = 'konfir/';
        $gambarImage = date('YmdHis') . "." .$gambar->getClientOriginalExtension();
        $gambar->move($destinationPath, $gambarImage);
        $input['foto'] = "$gambarImage";

        $data = $request->all();

        $confirms = new Confirm;
        $confirms->id_pesanan = $data['id_pesanan'];
        $confirms->nama_pengirim = $data['nama_pengirim'];
        $confirms->foto = $gambarImage;

        $confirms->save();
        return redirect()->route('home')->with('status', 'success');
    }

    public function payment(Reservasi $reservasi)
    {
        return view('reservasi.payment', compact('reservasi'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function hapus(Reservasi $reservasi)
    {
        $reservasi->delete();

        return redirect()->route('order')->with('success', 'orderan berhasil dihapus');
    }

    public function remove($id) {

        $reservasi = Reservasi::find($id);
        $reservasi->delete();

        return redirect()->back()->with('success', 'berhasil');
    }
}
