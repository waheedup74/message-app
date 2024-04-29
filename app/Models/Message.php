<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'identifier', 
        'content', 
        'recipient',
        'expiry_timestamp',
        'is_read'
    ];
}
