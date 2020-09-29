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
}
