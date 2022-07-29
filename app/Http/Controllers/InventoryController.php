<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function input()
    {
        $data = Inventory::all();
        $datas = users::all();
        return view ('administrator.forminventaris',compact('data','datas'));
    }

    // public function tambah(Request $request)
    // {
    //     // dd($request->all());
    //     $data = users::all();
    //     // inventory::create($request->all());
    //     return redirect()->route('data.datainven');
    // }

    // public function tambah(){
    //     $data = users::all();
    //     return view('data.datainven',compact('data'));
    // }

    public function datainven() {
        $data = Inventory::paginate(10);;
        return view('data.datainven',compact('data'));
    }
}
