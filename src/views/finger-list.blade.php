@extends('layouts.dpfp_layout')

@section('title')
Fingerprint List
@endsection

@section('page_title')
Fingerprint List
@endsection

@section('content')
<h3>User Fingerprint List : {{$user->name}}</h3>
<button style="margin-bottom: 1%;" class="add_finger"  data-id="{{$user->id}}">Add Fingerprint</button>

<table border="1">
    <tr>
        <th>id</th>
        <th>fingerprint name</th>
        <th>fingerprint image</th>
        <th></th>
    </tr>
    <tbody>
        @foreach($finger_list as $finger)
        <tr>
            <td>{{$finger->id}}</td>
            <td>{{$finger->finger_name}}</td>
            <td style="text-align: center">
                <img  style="width: 30px;" src="{{asset($finger->image)}}"/>
            </td>
            <td>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection