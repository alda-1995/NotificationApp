<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlantillaController extends Controller
{
    public function index()
    {
        return view('plantillas.index');
    }
}