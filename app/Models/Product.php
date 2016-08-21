<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description','price_cost','price_resale','measurement_unit_id','current_inventory','minimum_stock','category_id','brand_id','provider_id'];

    
    public function brand(){
       return $this->belongsTo(Brand::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function provider(){
        return $this->belongsTo(Provider::class);
    }

    public function unit(){
    	return $this->belongsTo(Unit::class);
    }
}
