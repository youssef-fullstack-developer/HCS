<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yarn extends Model
{
    use HasFactory;

    protected $fillable = [
        'count',
        'ply',
        'filaments',
        'type',
        'unit',
        'tpm',
        'color',
        'variety',
        'reorder',
        'buy_uom',
        'blend',
        'danger',
        'is_apply',
        'name',
        'conversion',
        'display_name',
        'hsn',
        'igst',
        'cgst',
        'sgst',
        'cess',
        'status'
    ];

    public function count() {
        return $this->belongsTo(Count::class, 'count');
    }
}
