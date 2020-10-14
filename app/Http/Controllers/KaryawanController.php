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
        $data['jkaryawan'] = $info->getJKaryawan();
        $data['jjabatan'] = $info->getJJabatan();
        $data['jgaji'] = $info->getTGaji();
        return view('home', $data);
    }

    public function tampil()
    {
        $info = new KaryawanModel();
        $data = array();
        $data['info'] = $info->getKaryawan();

        return view('index', $data);
    }
    
    public function tambah()
    {
        $info = new KaryawanModel();
        $data = array();
        $data['jabatan'] = $info->getJabatan();
        return view('tambah', $data);
    }

    public function store(Request $request)
    {

        DB::table('karyawan')->insert([
            'karyawan_id' => rand(100, 1999),
            'jabatan_id' => $request->k_jabatan,
            'karyawan_nama' => $request->k_nama,
            'karyawan_gender' => $request->k_gender,
            'karyawan_tgl' => $request->k_tanggal,
            'karyawan_alamat' => $request->k_alamat

        ]);
        return redirect('/karyawan/tampil');
    }

    public function edit($id)
    {
        // $karyawan = DB::table('karyawan')->where('karyawan_id', $id)->get();
        $info = new KaryawanModel();
        $data = array();
        $data['jabatan'] = $info->getJabatan();
        $data['karyawan'] = DB::table('karyawan')->where('karyawan_id', $id)->get();
        return view('edit', $data);
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
    
	return redirect('/karyawan/tampil');
}

public function hapus($id)
{
	DB::table('karyawan')->where('karyawan_id',$id)->delete();
	return redirect('/karyawan/tampil');
}
   
}
