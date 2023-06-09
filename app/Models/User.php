<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name',
        'phone_number',
        'country_id',
        'document_id'
    ];
}
