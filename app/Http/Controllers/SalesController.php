<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    public function viewSales(){
        $item = DB::table('item')->get();
        $customer = DB::table('customer')->get();
        $sales = DB::table('sales')
                ->join('item','item.id_item','=','sales.id_item')
                ->join('customer','customer.id_cust','=','sales.id_cust')
                ->select('sales.code_trans',
                        'sales.tanggal',
                        'customer.nama_cust',
                        'item.nama',
                        'sales.qty',
                        'sales.total_diskon',
                        'sales.total_harga',
                        'sales.total_bayar')
                ->get();
        
        return view('sales',['item'=>$item],['customer'=>$customer],['sales'=>$sales]);
    }
    
    public function saveSales(Request $request){
        DB::table('sales')->insert([
            'tanggal' => now(),
            'id_cust' => $request->customer,
            'id_item' => $request->item,
            'qty' => $request->qty,
            'total_diskon' => $request->diskon,
            'total_harga' => $request->harga,
            'total_bayar' => $request->bayar
        ]);
        
        return redirect()->back();
    }
}
