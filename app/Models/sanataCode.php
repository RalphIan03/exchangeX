<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanataCode extends Model
{
    protected $fillable = ['code', 'active'];
    /** @use HasFactory<\Database\Factories\SanataCodeFactory> */
    use HasFactory;
}
