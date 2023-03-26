<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;
    /* public function reply()
    {
        return $this->belongsTo(Reply::class);
    } */
    public function messages()
    {
    return $this->hasMany(Message::class);
    }
}
