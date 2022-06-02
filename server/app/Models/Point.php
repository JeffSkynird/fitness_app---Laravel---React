<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;
    protected $fillable = [
        'participant_id',
        'step_id',
        'score',
        'position',
        'value'
    ];
}
