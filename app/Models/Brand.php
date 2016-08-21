<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name','description'];

    public function Products()
    {
    	return $this->hasMany(Product::class);
    }
}
