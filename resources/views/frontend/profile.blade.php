@extends('frontendtemplate')
@section('content')
  <div class="col-lg-9">
  	<h2>Customer Profile Page</h2>
  	{{Auth::user()->name}};
  </div>
@endsection