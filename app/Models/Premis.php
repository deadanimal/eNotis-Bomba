<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Premis extends Model
{
    use HasFactory;
    public function notis()
    {
        return $this->hasMany(Notis::class);
        
    }
}
