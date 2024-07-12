<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit_measurement extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'stock',
    ];

    public static function add($id, $newStock)
    {
        $unit_measurement = self::find($id);
        if ($unit_measurement) {
            $unit_measurement->stock += $newStock;
            $unit_measurement->save();
        } else {
            throw new \Exception("Unit_measurement not found.");
        }
    }

    public static function res($id, $newStock)
    {
        $unit_measurement = self::find($id);
        if ($unit_measurement) {
            $unit_measurement->stock -= $newStock;
            $unit_measurement->save();
        } else {
            throw new \Exception("Unit_measurement not found.");
        }
    }
}
