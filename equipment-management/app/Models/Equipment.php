<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $table = 'equipment';
    protected $primaryKey = 'equipment_id'; // Set primary key
    public $incrementing = true; // Auto-incrementing primary key

    protected $casts = [
        'first_service' => 'datetime:Y-m-d',
        'second_service' => 'datetime:Y-m-d',
        'third_service' => 'datetime:Y-m-d',
    ];

    protected $fillable = [
        'equipment_name',
        'serial_number',
        'first_service',
        'second_service',
        'third_service',
        'price',
        'year_made',
        'year_installed',
        'remark'
    ];
}
