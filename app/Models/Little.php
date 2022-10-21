<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Little extends Model
{
    use HasFactory;
    public function auteur()
    {
        return $this->belongsTo(Auteur::class);
    }
}
