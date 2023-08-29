<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    // use HasFactory;
    use App\Models\TableName;

// Retrieve all records
    $records = user::all();

// Retrieve a specific record by its primary key
    $record = user::find($id);

// Retrieve records based on conditions
    $filteredRecords = user::where('column_name', $value)->get();
}
