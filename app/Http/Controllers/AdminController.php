<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\KaryawanModel;

class AdminController extends Controller
{
    
    public function edit($id)
    {
        $admin= DB::table('admin')->where('admin_id', $id)->get();
        return view('admin_e', ['admin' => $admin]);
    }

    public function update(Request $request)
    {
        if($request->a_password==""){
            DB::table('admin')->where('admin_id',$request->id)->update([
                'admin_nama' => $request->a_nama,
                'admin_username' => $request->a_username 
            ]);
        }else{
            DB::table('admin')->where('admin_id',$request->id)->update([
                'admin_nama' => $request->a_nama,
                'admin_username' => $request->a_username,
                'admin_password' => bcrypt($request->a_password)
            ]);
        }
        Session::put('nama',$request->a_nama);
        Session::put('username', $request->a_username);
        return redirect('/utama');

        
    
    }

    public function hapus($id)
{
    Session::flush();
	DB::table('admin')->where('admin_id',$id)->delete();
	return redirect('login')->with('alert','Kamu sudah menghapus akun anda.');
}
}