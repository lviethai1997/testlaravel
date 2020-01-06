<?php

namespace App\Http\Controllers;

use App\assets;
use Illuminate\Http\Request;

class AssetsController extends Controller
{
   public function sidebar(Request $request)
   {
        $assets = assets::first();
        $assets->sidebar = $request->sidebar;
        $assets->save();
        return \response()->json(['message'=>'Change sidebar completed.']);
   }
}
