<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'stock',
    ];

    public static function addStock($id, $newStock)
    {
        $brand = self::find($id);
        if ($brand) {
            $brand->stock += $newStock;
            $brand->save();
        } else {
            throw new \Exception("Brand not found.");
        }
    }

    public static function resStock($id, $newStock)
    {
        $brand = self::find($id);
        if ($brand) {
            $brand->stock -= $newStock;
            $brand->save();
        } else {
            throw new \Exception("Brand not found.");
        }
    }
}
