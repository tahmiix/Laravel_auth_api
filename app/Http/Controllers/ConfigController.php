<?php

namespace App\Http\Controllers;

class ConfigController extends Controller
{
    public function logo()
    {
        // you could also pull this path from the database
        $path = 'logo/jointini.jpg';
        return response()->json([
            'logo_url' => url('storage/'.$path)
        ]);
    }
}