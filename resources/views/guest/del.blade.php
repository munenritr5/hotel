@extends('layouts.hotel')

@section('title', 'Delete')
{{-- @section('title')
    Index // 上と同じ --}}

@section('content')
<h3>利用者テーブル</h3>
<form action="/guest/del" method="post">

    <table>
        @csrf
        <input type="hidden" name="guest_id" value="{{$form->guest_id}}">
        {{-- <tr><th>guest_id: </th><td><input type="text" name="guest_id"></td></tr> --}}
        <tr><th>name: </th><td><input type="text" name="name" value="{{$form->name}}"></td></tr>
        <tr><th>address: </th><td><input type="text" name="address" value="{{$form->address}}"></td></tr>
        <tr><th>tel: </th><td><input type="text" name="tel" value="{{$form->tel}}"></td></tr>
        <tr><th></th><td><input type="submit" value="更新"></td></tr>
    </table>
</form>
@endsection