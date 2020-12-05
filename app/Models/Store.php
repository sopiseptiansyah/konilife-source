<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //
    protected $fillable = [
        'name', 'address', 'phone', 'regencie_id', 'lat', 'lng'
    ];

    protected $casts = [
        'lat' => 'float', 'lng' => 'float'
    ];

    protected $hidden = [
        'lat',  'lng'
    ];

    public function regencie()
    {
        return $this->belongsTo(Regency::class);
    }
}
