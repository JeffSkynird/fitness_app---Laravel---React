<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Step extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name',
        'step_type_id',
        'event_id',
        'user_id'
    ];
}
