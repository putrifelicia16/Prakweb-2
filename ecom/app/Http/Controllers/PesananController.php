<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = new Pesanan();
        return view('admin.pesanan.pesanan', ['pesanan' => $pesanan->getAllData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $produk = KategoriProduk::all();

        //menampilkan seluruh
        $pesanan = Pesanan::all();
        return view('admin.pesanan.create', compact('kategori_produk','produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //buat class baru dengan nama table yang mau kita tambahkan datanya (produk)
        //ambil data yang di inputkan user dengan parameter request,
        //lalu masukkan ke dalam kolom table (produk)
        //lalu kembalikan ke tampilan produk ketika setelah user mengklik button simpan
        $pesanan = new Pesanan();
        $pesanan->tanggal = $request->tanggal;
        $pesanan->nama_pemesan = $request->nama_pemesan;
        $pesanan->alamat_pemesan = $request->alamat_pemesan;
        $pesanan->no_hp = $request->no_hp;
        $pesanan->email = $request->email;
        $pesanan->jumlah_pesanan = $request->jumlah_pesanan;
        $pesanan->deskripsi = $request->deskripsi;
        $pesanan->produk_id = $request->produk_id;
        $pesanan->save();
        return redirect('admin/pesanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}