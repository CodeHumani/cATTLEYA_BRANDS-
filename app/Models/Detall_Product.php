<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detall_Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'unit_measurement_id',
        'brand_id',
        'stock',
        'purchase_price',
        'sales_percentage',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function unitMeasurement()
    {
        return $this->belongsTo(Unit_measurement::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
