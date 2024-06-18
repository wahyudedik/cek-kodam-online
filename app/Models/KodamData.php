<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KodamData extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kodam()
    {
        return $this->belongsTo(Kodam::class);
    }
}
