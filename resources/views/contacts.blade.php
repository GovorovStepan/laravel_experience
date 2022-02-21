@extends('layouts.app')

@section('title', "Contacts")

@section('content')
  <h1>Contacts page</h1>



  <form action="{{route('contact_form')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="name">Enter name</label>
      <input type="text" name="name" placeholder="Enter your name" id="name" class="form-control">
    </div>
    <div class="form-group">
      <label for="email">Enter email</label>
      <input type="text" name="email" placeholder="Enter your email" id="email" class="form-control">
    </div>
    <div class="form-group">
      <label for="theme">Enter message theme</label>
      <input type="text" name="theme" placeholder="Enter message theme" id="theme" class="form-control">
    </div>
    <div class="form-group">
      <label for="message">Enter your message</label>
      <textarea type="text" name="message" placeholder="Enter your message..." id="message" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Send</button>
  </form>

@endsection
