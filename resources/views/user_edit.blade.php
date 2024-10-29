@extends('master')

@section('content')

<h2>Edit</h2>

<form action="{{ route('users.update',['user' => $user->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="FirstName" value="{{ $user->FirstName }}">
    <input type="text" name="LastName" value="{{ $user->LastName }}">
    <input type="text" name="email" value="{{ $user->email }}">
    <button type="submit">Update</button>
</form>

@endsection