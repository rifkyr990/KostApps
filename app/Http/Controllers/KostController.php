<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use App\Models\Type;
use App\Models\Status;
use App\Models\Category;
use App\Models\Confirm;
use App\Models\Reservasi;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class KostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $confirm = Confirm::all();
        $status = Status::with('reservasi')->get();
        $pembayaran = Pembayaran::with('reservasi')->get();
        $reservasi = Reservasi::with('status','pembayaran')->get();

        $category = Category::with('kosts')->get();
        $type = Type::with('kosts')->get();
        $kosts = Kost::with('category','type')->get();

        return view('dashboard', compact('category', 'type', 'kosts', 'reservasi', 'confirm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $type = Type::all();

        return view('create', compact('category', 'type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addkost(Request $request)
    {
        $request->validate([
            'foto' => 'required|file|mimes:png,jpg,svg|max:2048',
        ]);

        $gambar = $request->file('foto');
        $destinationPath = 'image/';
        $gambarImage = date('YmdHis') . "." .$gambar->getClientOriginalExtension();
        $gambar->move($destinationPath, $gambarImage);
        $input['foto'] = "$gambarImage";

        $data = $request->all();

        $kosts = new Kost;
        $kosts->nama_pemilik = $data['nama_pemilik'];
        $kosts->telp = $data['telp'];
        $kosts->alamat = $data['alamat'];
        $kosts->category_id = $data['category_id'];
        $kosts->total_kamar = $data['total_kamar'];
        $kosts->fasilitas = $data['fasilitas'];
        $kosts->luas = $data['luas'];
        $kosts->foto = $gambarImage;
        $kosts->type_id = $data['type_id'];
        $kosts->harga = $data['harga'];
        $kosts->user_id = auth()->id();
        $kosts->save();

        return redirect()->route('home')->with('success', 'berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kost  $kost
     * @return \Illuminate\Http\Response
     */
    public function show(Kost $kost)
    {
        
        return view('show', compact('kost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kost  $kost
     * @return \Illuminate\Http\Response
     */
    public function edit(Kost $kost)
    {
        $category = Category::all();
        $type = Type::all();

        return view('edit', compact('kost', 'category', 'type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kost  $kost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kost $kost)
    {
        $input = $request->all();
        $kost->update($input);

        return redirect()->route('home')->with('success', 'Orderan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kost  $kost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kost $kost)
    {
        $kost->delete();

        return redirect()->route('home')->with('success', 'orderan berhasil dihapus');
    }

    public function allkost()
    {
        $kosts = Kost::all();
        return view('kost', compact('kosts'));
        
    }
    public function uad()
    {
        $kosts = Kost::where('category_id', '1')->get();
        return view('kost', compact('kosts'));
        
    }
    public function umy()
    {
        $kosts = Kost::where('category_id', '2')->get();
        return view('kost', compact('kosts'));
    }

    public function ugm()
    {
        $kosts = Kost::where('category_id', '3')->get();
        return view('kost', compact('kosts'));
    }

    public function uty()
    {
        $kosts = Kost::where('category_id', '4')->get();
        return view('kost', compact('kosts'));
    }

    public function uaa()
    {
        $kosts = Kost::where('category_id', '5')->get();
        return view('kost', compact('kosts'));
    }

    public function amikom()
    {
        $kosts = Kost::where('category_id', '6')->get();
        return view('kost', compact('kosts'));
    }

    public function uii()
    {
        $kosts = Kost::where('category_id', '7')->get();
        return view('kost', compact('kosts'));
    }
}
