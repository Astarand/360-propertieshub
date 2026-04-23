<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpertQuery extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'subject',
        'query'
    ];
}
