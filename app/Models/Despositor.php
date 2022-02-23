<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Despositor extends Model
{
    use HasFactory;

    protected $fillable = [  //'course_code', 'level', 'semester',
        'depositor','next_of_kin','kin_address','description','date_received','monthly_charges','storage_cost','code'
    ];
}
