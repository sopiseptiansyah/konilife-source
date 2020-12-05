<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\Regency;
use App\Http\Resources\StoreCollection;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    public function index(){
        $stores = Store::paginate(10);
        return new StoreCollection($stores);
    }

    public function byCity(Regency $city){
        $stores = Store::where('regencie_id', $city->id)->paginate(10);
        return new StoreCollection($stores);
    }
}
