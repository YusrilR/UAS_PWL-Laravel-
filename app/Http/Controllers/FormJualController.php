<?php

namespace App\Http\Controllers;

use App\Models\ModelFormProduk;
use App\Models\ModelFormCustomer;
use App\Models\ModelFormPenjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use View;

class FormJualController extends Controller
{
	public function TampilJual()
    {
    	// mengambil data dari table daftar transaksi penjualan
    	$transaksi_jual = ModelFormPenjualan::all();

    	// mengirim data jual ke view daftar transaksi
    	return view('/daftartransaksijual',['transaksi_jual' => $transaksi_jual]);

    }
    public function viewdataproduk()
    {
        $data = DB::table('produk')->get();
        return View::make('/beli')->with('produk', $data);
    }
    public function formjualbahan($id_roti)
    {
        $produk = DB::table('produk')->where('id_roti', $id_roti)->get();
        $customer = ModelFormCustomer::all();
        return view('transaksijual', ['produk' => $produk],['customer'=>$customer]);
    }
    public function storepenjualan(Request $request)
    {
        // update data

        $this->validate($request, [
            'id_jual' => 'required',
            'id_roti' => 'required',
            'id_customer' => 'required',
            'nama_roti' => 'required',
            'CBNama_Customer' => 'required',
            'harga' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
            'bayar' => 'required'
        ]);

        ModelFormPenjualan::create([
            'id_jual' => $request->id_jual,
            'id_roti' => $request->id_roti,
            'id_customer' => $request->id_customer,
            'nama_roti' => $request->nama_roti,
            'nama_customer' => $request->CBNama_Customer,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'total_harga' => $request->total_harga,
            'bayar' => $request->bayar
        ]);

        DB::table('produk')->where('id_roti', $request->id_roti)->update([
            'stok' => $request->Jumlah_Akhir
        ]);

        return redirect('/beli');
    }
}
