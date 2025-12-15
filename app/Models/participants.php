<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participants extends Model
{
    protected $fillable = ['name', 'status','wishlist', 'pickedby'];

    /** @use HasFactory<\Database\Factories\ParticipantsFactory> */
    use HasFactory;
}
