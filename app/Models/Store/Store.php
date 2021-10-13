<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'city',
        'district',
        'state',
        'user_id'
    ];

    public function users(){
        return $this->belongsTo('App\Models\Store\Store');
    }

    public function products(){
        return $this->hasMany('App\Models\Product\Product');
    }

}
