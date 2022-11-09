<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StockController extends Controller
{
  /*editing controller*/

    public function store(Request $request)
    {   /**validation */

        $request->validate([
            'title'=>'required|max:11',
            'description'=>'required|max:50',
        ]);


        /**'' */

        $stocks = new stocks;
        $stocks->title =$request->title;
        $stocks->description =$request->description;
        $stocks->save();
        return response()->json(['message'=>'signal added successfully'], 200);
    }


}
