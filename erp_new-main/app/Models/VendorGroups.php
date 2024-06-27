<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorGroups extends Model
{
    use HasFactory;

    protected $fillable = array(
        'group',
        'code',
        'group_type',
        'is_internal',
        'status'
    );
}
