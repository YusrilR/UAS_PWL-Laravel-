<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use View;
use App\Models\ModelFormSupplier;

class RotiController extends Controller
{
    public function admin(){
    	return view('admin'); 	    
   	}
   	public function viewdata()
    {
        $data = DB::table('supplier')->get();
        return View::make('supplier')->with('supplier', $data);
    }
    public function TampilEditSupplier($id_supplier){
	    $supplier = DB::table('supplier')->where('id_supplier',$id_supplier)->get();
	    return view('editsup',['supplier' => $supplier]);
    }
    public function updatesupplier(Request $request){
	// update data 
	DB::table('supplier')->where('id_supplier',$request->id_supplier)->update([
		'nama_supplier' => $request->nama_supplier,
		'notelp' => $request->notelp,
		'alamat' => $request->alamat
	]);
	return redirect('/supplier');
    }

    public function viewsup(){
    	return view ('insertsup');
    }

    public function storesupplier(Request $request){
        $this->validate($request,[
            'id_supplier' => 'required',
            'nama_supplier' => 'required',
            'notelp' => 'required',
            'alamat' => 'required'
        ]);

        ModelFormSupplier::create([
            'id_supplier' => $request->id_supplier,
            'nama_supplier' => $request->nama_supplier,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat
        ]);
        return redirect('/supplier');
    }

    public function deletedata($id_supplier)
    {
        DB::table('supplier')->where('id_supplier','=',$id_supplier)->delete();
        return Redirect::to('/supplier')->with('message','Berhasil Menghapus Data');
    }
}
