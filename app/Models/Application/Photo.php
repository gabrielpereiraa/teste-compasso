<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $directory = "/images/";

    protected $fillable = ['path'];

    public function imageable(){
        return $this->morphTo();
    }

    public function getPathAttribute($path){
        return $this->directory . $path;
    }
}
