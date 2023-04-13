<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'passport_number',
        'issued_by',
        'date_of_issue',
        'passport_id'
    ];
}
