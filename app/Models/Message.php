<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    //assignment field define here
    protected $fillable=[
        'name',
        'email',
        'subject',
        'message',
    ];
}
