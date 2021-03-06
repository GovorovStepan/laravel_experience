@section('header')
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">GSP</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="{{route('home')}}">Home</a>
    <a class="p-2 text-dark" href="{{route('about')}}">About us</a>
    <a class="p-2 text-dark" href="{{route('contacts')}}">Contacts</a>
    <a class="p-2 text-dark" href="{{route('contacts_data')}}">Messages</a>
  </nav>
</div>
