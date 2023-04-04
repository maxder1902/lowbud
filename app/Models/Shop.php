<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shop';
    use HasFactory;
    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
