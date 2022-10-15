<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use View;
use App\Models\ModelFormProduk;

class FormProdukController extends Controller
{
    public function viewdataprod()
    {
        $data = DB::table('produk')->get();
        return View::make('restok')->with('produk', $data);
    }
    public function TampilEditProduk($id_roti){
	    $produk = DB::table('produk')->where('id_roti',$id_roti)->get();
	    return view('editprod',['produk' => $produk]);
    }
    public function updateproduk(Request $request){
	// update data 
	DB::table('produk')->where('id_roti',$request->id_roti)->update([
		'nama_roti' => $request->nama_roti,
		'stok' => $request->stok,
		'harga' => $request->harga
	]);
	return redirect('/restok');
    }

    public function viewprod(){
    	return view ('insertprod');
    }

    public function storeproduk(Request $request){
        $this->validate($request,[
            'id_roti' => 'required',
            'nama_roti' => 'required',
            'stok' => 'required',
            'harga' => 'required'
        ]);

        ModelFormProduk::create([
            'id_roti' => $request->id_roti,
            'nama_roti' => $request->nama_roti,
            'stok' => $request->stok,
            'harga' => $request->harga
        ]);
        return redirect('/restok');
    }
    public function deletedataprod($id_roti)
    {
        DB::table('produk')->where('id_roti','=',$id_roti)->delete();
        return Redirect::to('/restok')->with('message','Berhasil Menghapus Data');
    }
}
