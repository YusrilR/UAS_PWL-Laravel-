<?php

namespace App\Http\Controllers;

use App\Models\ModelFormProduk;
use App\Models\ModelFormSupplier;
use App\Models\ModelFormPembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormBeliController extends Controller
{
    public function TampilBeli()
    {
        // mengambil data dari table daftar transaksi Pembelian
        $transaksi_beli = ModelFormPembelian::all();

        // mengirim data beli ke view daftar transaksi
        return view('/daftartransaksibeli', ['transaksi_beli' => $transaksi_beli]);
    }

    public function formbelibahan($id_roti)
    {
        $produk = DB::table('produk')->where('id_roti', $id_roti)->get();
        $supplier = ModelFormSupplier::all();
        return view('transaksibeli', ['produk' => $produk],['supplier'=>$supplier]);
    }

    public function storepembelian(Request $request)
    {
        // update data

        $this->validate($request, [
            'id_beli' => 'required',
            'id_roti' => 'required',
            'id_supplier' => 'required',
            'nama_roti' => 'required',
            'CBNama_Supplier' => 'required',
            'harga' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
            'bayar' => 'required'
        ]);

        ModelFormPembelian::create([
            'id_beli' => $request->id_beli,
            'id_roti' => $request->id_roti,
            'id_supplier' => $request->id_supplier,
            'nama_roti' => $request->nama_roti,
            'nama_supplier' => $request->CBNama_Supplier,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'total_harga' => $request->total_harga,
            'bayar' => $request->bayar
        ]);

        DB::table('produk')->where('id_roti', $request->id_roti)->update([
            'stok' => $request->Jumlah_Akhir
        ]);

        return redirect('/restok');
    }

    // public function delpembelian($id_pembelian)
    // {
    //     // menghapus data pegawai berdasarkan id yang dipilih
    //     DB::table('transaksi_pembelian')->where('id_transaksi_pembelian', $id_pembelian)->delete();
    //     return redirect('/daftartransaksipembelian');
    // }
}
