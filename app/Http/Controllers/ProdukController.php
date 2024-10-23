<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Http\Requests\StoreprodukRequest;
use App\Http\Requests\UpdateprodukRequest;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function ViewProduk()
    {
        $produk = Produk::all(); //mengambil semua data tabel diproduk
        return view('produk', ['produk' => $produk]); //menampilkan view dari produk.blade.php dengan membawa variabel $produk
    }
    public function CreateProduk(request $request)
    {
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageName = time() .'_'. $imageFile->getClientOriginalName();
            $imageFile->storeAs('public/images', $imageName);
        }

        Produk::create([
            'nama_produk' =>  $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'jumlah_produk' => $request->jumlah_produk,
            'image' =>$imageName
        ]),

        return redirect('/produk');
    }
    public function ViewAddProduk()
    {
        return view('viewaddproduk'); //menampilkan view dari addproduk.blade.php
    }

    public function DeleteProduk($kode_produk)
    {
        Produk::where('kode_produk', $kode_produk)->delete();

        return redirect('/produk');
    }


}



