<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'stock',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public static function addcategory($id, $newStock)
    {
        $category = self::find($id);
        if ($category) {
            $category->stock += $newStock;
            $category->save();
        } else {
            throw new \Exception("Category not found.");
        }
    }

    public static function rescategory($id, $newStock)
    {
        $category = self::find($id);
        if ($category) {
            $category->stock -= $newStock;
            $category->save();
        } else {
            throw new \Exception("Category not found.");
        }
    }
}
