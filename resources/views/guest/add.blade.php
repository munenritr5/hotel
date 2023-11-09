@extends('layouts.hotel')

@section('title', 'Add')
{{-- @section('title')
    Index // 上と同じ --}}

@section('content')
<h3>利用者テーブル</h3>
<form action="/guest/add" method="post">

    <table>
        @csrf
        <tr><th>guest_id: </th><td><input type="text" name="guest_id"></td></tr>
        <tr><th>name: </th><td><input type="text" name="name"></td></tr>
        <tr><th>address: </th><td><input type="text" name="address"></td></tr>
        <tr><th>tel: </th><td><input type="text" name="tel"></td></tr>
        <tr><th></th><td><input type="submit" value="追加"></td></tr>
    </table>
</form>
@endsection