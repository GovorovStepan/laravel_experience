@extends('layouts.app')


@section('title', "Messages")

@section('content')
  <h1>All messages</h1>
  @foreach($data as $message)
    <div class="alert alert-info">
      <h3>{{$message->theme}}</h3>
      <p>Email : {{$message->email}}</p>
      <p><small>{{$message->created_at}}</small></p>
      <a href="#"> <button class="btn btn-warning">Show details</button> </a>
    </div>
  @endforeach
@endsection
