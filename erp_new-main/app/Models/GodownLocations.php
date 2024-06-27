<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GodownLocations extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'location',
        'code',
        'vendor_group_id',
        'type',
        'zone',
        'status',
        'is_default'
    ];

}
