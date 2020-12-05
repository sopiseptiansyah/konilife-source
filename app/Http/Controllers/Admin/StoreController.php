<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Regency;
use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store(){
        $stores = Store::with('regencie')->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.page.store', compact('stores'));
    }

    public function newStore(){
        $regencies = Regency::all();
        return view('admin.page.new-store', compact('regencies'));
    }

    public function addStore(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'regencie_id' => 'required',
            'phone' => 'required|numeric|unique:stores',
            'lat' => ['required','regex:/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/'],
            'lng' => ['required','regex:/^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/']
        ]);

        // dd($validatedData);

        $store = Store::create([
            'name' => $validatedData['name'],
            'address' => $validatedData['address'],
            'regencie_id' => $validatedData['regencie_id'],
            'phone' => $validatedData['phone'],
            'lat' => $validatedData['lat'],
            'lng' => $validatedData['lng'],
        ]);
        
        return redirect()->route('admin.stores')->with(['add.success' =>'Merchant berhasil ditambahkan']);;
    }

    public function editStore($id, Request $request){
        $store = Store::findOrFail($id);
        $regencies = Regency::all();
        return view('admin.page.edit-store', compact('store', 'regencies'));
    }


    public function updateStore($id, Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'regencie_id' => 'required',
            'phone' => 'required|numeric|unique:stores',
            'lat' => ['required','regex:/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/'],
            'lng' => ['required','regex:/^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/']
         ]);
 
         $store = Store::where('id', $id)
                 ->update([
                    'name' => $validatedData['name'],
                    'address' => $validatedData['address'],
                    'regencie_id' => $validatedData['regencie_id'],
                    'phone' => $validatedData['phone'],
                    'lat' => $validatedData['lat'],
                    'lng' => $validatedData['lng'],
         ]);
         
         return redirect()->route('admin.stores')->with(['edit.success' =>'Merchant berhasil diperbarui']);;
     }
     public function dropStore($id){
        $store = Store::findOrFail($id);
        $store->delete();
        
        return redirect()->route('admin.stores')->with(['delete.success' =>'Artikel berhasil dihapus']);
    }
}
