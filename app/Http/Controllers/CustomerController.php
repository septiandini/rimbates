<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function viewCustomer(){
        $customer = DB::table('customer')->get();
        return view('customer',['customer'=>$customer]);
    }
    
    public function saveCustomer(Request $request){
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $file = $request->file('file');

        $nama_file = time()."_".$file->getClientOriginalName();
        
        $tujuan_upload = 'data_customer';
        $file->move($tujuan_upload,$nama_file);
        
        DB::table('customer')->insert([
            'nama_cust'=>$request->nama,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'alamat'=>$request->alamat,
            'diskon'=>$request->diskon,
            'tipe_diskon'=>$request->tipe,
            'ktp'=>$nama_file
        ]);
        
        return redirect()->back();
    }
}
