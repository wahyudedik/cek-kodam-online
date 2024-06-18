<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kodam extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kodamData()
    {
        return $this->hasOne(KodamData::class);
    }
}
