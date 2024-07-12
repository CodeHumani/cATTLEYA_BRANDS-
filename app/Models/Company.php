<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'address_comp',
        'email_comp',
        'name_comp',
        'name_owner',
        'phone_comp',
    ];
}
