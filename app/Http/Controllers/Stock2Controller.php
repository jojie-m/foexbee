<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Stock2Controller extends Controller
{
    public function store2()
    {
        $stock2s = stock2s::all();
        return response()->json(['message'=>'signal retreived successfully'], 200);
        //return PostResource::collection($stock2s);
    }
}
