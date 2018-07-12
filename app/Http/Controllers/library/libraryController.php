<?php

namespace App\Http\Controllers\library;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class libraryController extends Controller
{
    public function library(){
      return view('library.library');
    }
}
