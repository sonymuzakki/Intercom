<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function input()
    {
        $data = Inventory::with('users','lokasi','divisi');
        return view ('administrator.forminventaris',compact('data'));
    }

    // public function tambah(Request $request)
    // {
    //     // dd($request->all());
    //     $data = users::all();
    //     // inventory::create($request->all());
    //     return redirect()->route('data.datainven');
    // }

    public function tambah(Request $request){
        $data =Inventory::with('users','lokasi','divisi');
        // $data = users::all();
        // dd($data);
        inventory::create($request->all());
        return Redirect()->route('datainven',compact ('data'));
        // return view('data.datainven',compact('data'));
    }

    public function datainven() {
        $data = Inventory::paginate(10);
        // dd($data);
        return view('data.datainven',compact('data'));

    }
}