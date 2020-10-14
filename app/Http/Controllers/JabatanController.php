<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KaryawanModel;

class JabatanController extends Controller
{
    public function index()
    {
        $info = new KaryawanModel();
        $data = array();
        $data['info'] = $info->getJabatan();

        return view('jabatan_v', $data);
    }
    
    public function tambah()
    {
        return view('jabatan_t');
    }

    public function store(Request $request)
    {

        DB::table('jabatan')->insert([
            'jabatan_id' => rand(100, 199),
            'jabatan_nama' => $request->j_nama,
            'jabatan_kode' => $request->j_kode,
            'jabatan_gaji' => $request->j_gaji,

        ]);
        return redirect('/jabatan');
    }

    public function edit($id)
    {
        $jabatan = DB::table('jabatan')->where('jabatan_id', $id)->get();
        
        return view('jabatan_e', ['jabatan' => $jabatan]);
    }

    public function update(Request $request)
{
	DB::table('jabatan')->where('jabatan_id',$request->id)->update([
        'jabatan_nama' => $request->j_nama,
        'jabatan_kode' => $request->j_kode,
        'jabatan_gaji' => $request->j_gaji,
    ]);
    
	return redirect('/jabatan');
}

public function hapus($id)
{
	DB::table('jabatan')->where('jabatan_id',$id)->delete();
	return redirect('/jabatan');
}
   
}
