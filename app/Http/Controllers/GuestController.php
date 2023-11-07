<?php

namespace App\Http\Controllers;

use Doctrine\ORM\Query\Expr\Select;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
   public function index(Request $request)
   {
      $items = DB::select('select * from guests');
    //   $items = DB::table('people')->orderBy('age', 'asc')->get();
      return view('guest.index', ['items' => $items]);
   }

   public function post(Request $request)
   {
      $items = DB::select('select * from guests');
      return view('guest.index', ['items' => $items]);
   }

}
