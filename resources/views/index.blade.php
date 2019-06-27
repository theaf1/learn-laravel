@extends('layouts.app')

@section('title','Task')

@section('content')
    <!-- {{  $title  }}
    <br>
    @foreach($genders as $gender)
        {{ $gender['id']}} {{ $gender['name'] }} <br/>
    @endforeach -->
    <form action="/store" method="post">
    <input type="hidden" name="_token" value= "{{ csrf_token()}}">
    Username : <input type="text" name="username"><br>
    Password : <input type="password" name="password"><br>
    <input type="submit" value ="submit">
    </form>
@endsection