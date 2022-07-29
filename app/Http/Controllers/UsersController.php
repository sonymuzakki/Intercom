<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\lokasi;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
        $data = users::with('divisi','lokasi')->get();
        // $data = users::all();
        // dd($data);
        return view('administrator.formusers', compact('data'));
    }
    // $data = users::find($id_users);
        // // $data->delete();
        // $data->delete();
        // return redirect('data.datausers')->with('toast_success', 'Data Berhasil Dihapus');

        // $data =users::where('id_users')->delete();

        // return redirect()->route('datausers',compact('data'));

    public function tambah(Request $request) {
        // dd($request->all());

        users::create($request->all());
        return redirect('datausers');
    }

    public function datausers(){
        $data = users::paginate(10);

        return view('data.datausers',compact('data'));
    }
    public function delete($id){
        $users = users::find($id);
        $users->delete();
        return redirect()->route('datausers')->with('success','Data Berhasil di Delete');
    }
    public function details($id){
        $data = users::find($id);
        return view ('data.datausersdetails',compact ('data'));
    }
}