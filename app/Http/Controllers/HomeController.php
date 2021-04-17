<?php

namespace App\Http\Controllers;

use App\Models\Crv;

class HomeController extends Controller
{
    public function index()
    {
        return \response()->json([
            'code' => 200,
            'status' => true,
            'data' => Crv::getAll(),
        ]);
    }
}
