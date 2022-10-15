<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use View;
use App\Models\ModelFormCustomer;

class FormCustomerController extends Controller
{
    public function viewdatacus()
    {
        $data = DB::table('customer')->get();
        return View::make('customer')->with('customer', $data);
    }
    public function TampilEditCustomer($id_customer){
	    $customer = DB::table('customer')->where('id_customer',$id_customer)->get();
	    return view('editcus',['customer' => $customer]);
    }
    public function updatecustomer(Request $request){
	// update data 
	DB::table('customer')->where('id_customer',$request->id_customer)->update([
		'nama_customer' => $request->nama_customer,
		'notelp' => $request->notelp,
		'alamat' => $request->alamat
	]);
	return redirect('/customer');
    }

    public function viewcus(){
    	return view ('insertcus');
    }

    public function storecustomer(Request $request){
        $this->validate($request,[
            'id_customer' => 'required',
            'nama_customer' => 'required',
            'notelp' => 'required',
            'alamat' => 'required'
        ]);

        ModelFormCustomer::create([
            'id_customer' => $request->id_customer,
            'nama_customer' => $request->nama_customer,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat
        ]);
        return redirect('/customer');
    }
    public function deletedatacus($id_customer)
    {
        DB::table('customer')->where('id_customer','=',$id_customer)->delete();
        return Redirect::to('/customer')->with('message','Berhasil Menghapus Data');
    }
}
