<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Region extends Model
{
    use HasFactory;

    protected $table = 'sub_regions';
    protected $fillable = [
        'sub_region_name',
        'sub_region_code',
        'region_id',
        'status',
    ];

    protected $primaryKey = 'sub_region_id';
}
