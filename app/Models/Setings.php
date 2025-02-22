<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setings extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
            'web_site_name',
            'logo',
            'address',
            'phone',
            'email',
            'about'
    ];
}
