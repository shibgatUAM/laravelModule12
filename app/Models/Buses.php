<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buses extends Model
{
    use HasFactory;

    protected $table = 'buses';
    protected $fillable = [
        'bus_name',
        'bus_code',
        'operator_id',
        'total_seats',
        'status',
        ];

    protected $primaryKey = 'bus_id';
}
