<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;

class HomeController extends Controller
{
    public function index()
    {
        $inventories = Inventory::latest()->paginate(5);
         
        return view('home',compact('inventories'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        return view('createInventory');
    }
  
    public function store(Request $request)
    {
        $inventories = new Inventory();
        $inventories->nama_barang = $request->nama_barang;
        $inventories->kode_barang = $request->kode_barang;
        $inventories->jumlah_barang = $request->jumlah_barang;
        $inventories->save();

        return redirect()->route('home')->with('success','Barang berhasil ditambahkan.');
    }
  
    public function edit($id)
    {
        $inventories = Inventory::find($id);

        return view('updateInventory',compact('inventories'));
    }
  
    public function update(Request $request, $id)
    {
        $inventories = Inventory::where('id', $id)->first();
        $inventories->nama_barang = $request->nama_barang;
        $inventories->kode_barang = $request->kode_barang;
        $inventories->jumlah_barang = $request->jumlah_barang;
        $inventories->save();

        return redirect()->route('home')->with('success','Barang berhasil diupdate.');
    }
  
    public function search(Request $request)
	{
		$search = $request->search;
 
    	$inventories = Inventory::where('nama_barang','like',"%".$search."%")->paginate();
 
    	return view('home',compact('inventories'))->with('i', (request()->input('page', 1) - 1) * 5);
 
	}
}
