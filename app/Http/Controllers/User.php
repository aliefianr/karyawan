<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class User extends Controller
{
    //
    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return redirect('utama');
        }
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){

        $username = $request->username;
        $password = $request->password;

        $data = ModelUser::where('admin_username',$username)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->admin_password)){
                Session::put('id_a',$data->admin_id);
                Session::put('nama',$data->admin_nama);
                Session::put('username',$data->admin_username);
                Session::put('login',TRUE);
                return redirect('karyawan');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }

    public function register(Request $request){
        return view('register');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'nama' => 'required|min:4',
            'admin_username' => 'required|min:4|unique:admin',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        DB::table('admin')->insert([
            'admin_id' => rand(100, 199),
            'admin_nama' => $request->nama,
            'admin_username' => $request->admin_username,
            'admin_password' =>  bcrypt($request->password),

        ]);
        return redirect('/login')->with('alert-success','Kamu berhasil Register');

        // $data =  new ModelUser();
        // $data->admin_id = rand(0,99);
        // $data->admin_nama = $request->nama;
        // $data->admin_username = $request->admin_username;
        // $data->admin_password = bcrypt($request->password);
        // $data->save();
        // return redirect('login')->with('alert-success','Kamu berhasil Register');
    }
    
    public function update(Request $request){

        $data =  new ModelUser();
        $data->admin_nama = $request->a_nama;
        $data->admin_username = $request->a_username;
        $data->admin_password = bcrypt($request->a_password);
        $data->where('admin_id',$request->a_id);
        $data->update();
       
        return redirect('jabatan')->with('alert-success','Kamu berhasil Register');
    }


   
}