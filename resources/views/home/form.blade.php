@extends('layout.master')
@section('title','form')
@section('content')
<h1>Formulir tes</h1>
<hr>

<form action="/home" method="POST">
    @csrf
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input name="username" type="text" value="{{ $user->username}}"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input name="password" type="password" value="{{ $user->password}}"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input value="Save" type="submit"></td>
        </tr>
    </table>
</form>
@endsection
