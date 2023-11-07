@extends('layouts.hotel')

@section('title', 'Index')
{{-- @section('title')
    Index // 上と同じ --}}

@section('content')
<h3>利用者テーブル</h3>
    <table>
        <tr><th>Guest_id</th><th>Name</th><th>Address</th><th>Tel</th></tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item->guest_id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->tel}}</td>
            </tr>
        @endforeach
    </table>
</form>
@endsection