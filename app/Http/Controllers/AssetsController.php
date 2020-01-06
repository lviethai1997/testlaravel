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

   public function openchat(Request $request)
   {
      $assets = assets::first();
      $assets->openchat = $request->openchat;
      $assets->save();
      return \response()->json(['message'=>'Change sidebar completed.']);
   }

   public function activelist(Request $request)
   {
      $assets = assets::first();
      $assets->openchat1 = $request->activelist;
      $assets->save();
      return \response()->json(['message'=>'Change sidebar completed.']);
   }


}
