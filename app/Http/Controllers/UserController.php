<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function index()
    {
    	// mengambil data dari table users
    	$user = DB::table('users')->get();
 
    	// mengirim data users ke view index
    	return View::make('/index')->with('users',$user);
 
    }

    	// method untuk menampilkan view form tambah user
	public function tambah()
	{
 
		// memanggil view tambah
		return view('tambah');
 
	}

	// method untuk insert data ke table user
	public function store(Request $request)
	{
		// insert data ke table user
		DB::table('users')->insert([
			'username' => $request->username,
			'password' => $request->password,
			'level' => $request->level
		]);
		// alihkan halaman ke halaman user
		return redirect('/user');

	}


	public function edit($id)
	{
		// mengambil data user berdasarkan id yang dipilih
		$user = DB::table('users')->where('id_user',$id)->get();
		// passing data user yang didapat ke view edit.blade.php
		return view('edit',['users' => $user]);
	 
	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('users')->where('id_user',$request->id)->update([
			'username' => $request->username,
			'password' => $request->password,
			'level' => $request->level
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/user');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('users')->where('id_user',$id)->delete();
			
		// alihkan halaman ke halaman pegawai
		return redirect('/user');
	}

	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
	// if (condition) { } if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }if (condition) { }
		

}
