<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notis extends Model
{
    use HasFactory;
    public function premis()
    {
        return $this->hasMany(Premis::class);
        // note: we can also include comment model like: 'App\Models\Comment'
    }
}
