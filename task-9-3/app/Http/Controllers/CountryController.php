<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\country;


class CountryController extends Controller
{
    public function Allcapital()
    {
        $Capitals = country::with('capital')->get();
        return view ('country-Capital', ['Capitals' => $Capitals]);
    }
}
