<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = ['name','description','telephone','email','location'];

    public function Produts()
    {
    	return $this->hasMany(Product::class);
    }

    public function brands()
    {
    	return $this->hasMany(brand::class);
    }
}
