<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\country;


class capital extends Model
{
    use HasFactory;

    public function country()
    {
        return $this->belongsTo(country::class);
    }
}
