<?php

namespace App\Http\Controllers;

use Doctrine\ORM\Query\Expr\Select;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
   // guest/indexにアクセスしたときの表示
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

   public function add(Request $request) {
      return view('guest.add');
   }

   public function create(Request $request) {
      $param = [
         'guest_id' => $request->guest_id,
         'name' => $request->name,
         'address' => $request->address,
         'tel' => $request->tel,
      ];
      DB::insert('insert into guests (guest_id, name, address, tel) values(:guest_id, :name, :address, :tel)', $param);
      return redirect('/guest');
   }

   public function edit(Request $request) {
      $param = ['guest_id' => $request->guest_id];
      $item = DB::select('select * from guests where guest_id = :guest_id', $param);
      return view('guest.edit', ['form' => $item[0]]);
   }

   public function update(Request $request) {
      $param = [
         'guest_id' => $request->guest_id,
         'name' => $request->name,
         'address' => $request->address,
         'tel' => $request->tel,
      ];
      DB::update('update guests set name =:name, address =:address, tel =:tel where guest_id = :guest_id', $param);
      return redirect('guest');
   }

   public function del(Request $request) {
      $param = ['guest_id' => $request->guest_id];
      $item = DB::select('select * from guests where guest_id = :guest_id, $param');
      return view('guest.del', ['form' => $item[0]]);
   }

   public function remove(Request $request) {
      
   }
}
