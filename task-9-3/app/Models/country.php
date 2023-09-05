<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\capital;


class country extends Model
{
    use HasFactory;

    public function capital()
    {
        return $this->hasOne(capital::class);
    }

}
