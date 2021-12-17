<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function viewItem(){
        $itemBarang = DB::table('item')->get();
        return view('item',['itemBarang'=>$itemBarang]);
    }
    
    public function saveItem(Request $request){
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $file = $request->file('file');

        $nama_file = time()."_".$file->getClientOriginalName();
        
        $tujuan_upload = 'data_item';
        $file->move($tujuan_upload,$nama_file);
        
        DB::table('item')->insert([
            'nama'=>$request->nama,
            'unit'=>$request->unit,
            'stok'=>$request->stok,
            'harga'=>$request->harga,
            'barang'=>$nama_file
        ]);
        
        return redirect()->back();
    }
}
