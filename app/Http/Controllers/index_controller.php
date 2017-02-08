<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index_controller extends Controller
{
    //
    public function __invoke()
    {
      $results = \DB::select('select * from tweets;');
      return view('index', ['tweets'=>$results]);
    }
}
