<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    Protected $fillable=[
    'memberID',
    'vehicleID',
    'startDate',
    'endDate',
    'quantity',
    'status',
    'approvedBy'
    ];

    
}
