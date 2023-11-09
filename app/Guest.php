<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    // protected $guarded = array('guest_id');

    public static $rules = array(
        'guest_id' => 'required',
        'name' => 'required',
        'address' => 'required',
        'tel' => 'required',
    );

    public function getData() {
        return $this->id . ': ' . $this->title;
    }
}