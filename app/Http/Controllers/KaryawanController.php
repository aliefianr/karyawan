<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KaryawanModel;

class KaryawanController extends Controller
{
    public function index()
    {
        $info = new KaryawanModel();
        $data = array();
        $data['info'] = $info->getKaryawan();

        return view('index', $data);
    }
    
    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {

        DB::table('karyawan')->insert([
            'karyawan_id' => rand(100, 199),
            'jabatan_id' => $request->k_jabatan,
            'karyawan_nama' => $request->k_nama,
            'karyawan_gender' => $request->k_gender,
            'karyawan_tgl' => $request->k_tanggal,
            'karyawan_alamat' => $request->k_alamat

        ]);
        return redirect('/karyawan');
    }

    public function edit($id)
    {
        $karyawan = DB::table('karyawan')->where('karyawan_id', $id)->get();
        return view('edit', ['karyawan' => $karyawan]);
    }

    public function update(Request $request)
{
	DB::table('karyawan')->where('karyawan_id',$request->id)->update([
        'jabatan_id' => $request->k_jabatan,
        'karyawan_nama' => $request->k_nama,
        'karyawan_gender' => $request->k_gender,
        'karyawan_tgl' => $request->k_tanggal,
        'karyawan_alamat' => $request->k_alamat
    ]);
    
	return redirect('/karyawan');
}

public function hapus($id)
{
	DB::table('karyawan')->where('karyawan_id',$id)->delete();
	return redirect('/karyawan');
}
   
}
