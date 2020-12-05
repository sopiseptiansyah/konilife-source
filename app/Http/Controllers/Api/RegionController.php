<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\Regency;
use Illuminate\Http\Request;
use App\Http\Resources\RegionCollection;

class RegionController extends Controller
{
    //
    public function getProvince(){
        $provinces = Province::orderBy('name', 'asc')->get();
        
        return new RegionCollection($provinces);
    }

    public function getCity(Province $province){
        $cities = Regency::has('stores')->where('province_id', $province->id)->orderBy('name', 'asc')->get();
        return new RegionCollection($cities);
    }
}
