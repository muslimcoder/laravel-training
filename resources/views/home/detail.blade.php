@extends('layout.master')
@section('title', 'Detail')

@section('content')
<h1>Halaman Detail</h1>
<hr>
<ul>
   <table>
       <tr><td>username</td>
        <td>:</td>
        <td>{{$user->username}}</td></tr>
        <td>password</td>
       <td>:</td>
       <td>{{$user->password}}</td>

   </table>
@endsection
