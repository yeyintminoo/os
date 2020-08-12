@extends('backendtemplate')

@section('content')
  <div class="container-fluid">
  	<h2>Item List(Table)</h2>
  	<a href="{{route('items.create')}}" class="btn btn-success"> Add Items </a>
  	<table class="table table-bordered">
  		<thead>
  			<tr>
  				<th>No</th>
  				<th>Codeno</th>
  				<th>Name</th>
  				<th>Price</th>
  				<th>Actions</th>
  			</tr>
  		</thead>
  		<tbody>
  			<tr>
  				<th>1</th>
  				<th>
  					001
  					<a href="{{route('items.show',1)}}">
                    	<span class="badge badge-primary badge-pill">Detail</span>
                    </a>
  				</th>
  				<th>Item One</th>
  				<th>5500 MMK</th>
  				<th>
  					<a href="{{route('items.edit',1)}}" class="btn btn-primary">Edit</a>
  					<a href="#" class="btn btn-warning">Delete</a>
  				</th>
  			</tr>
  		</tbody>
  	</table>
  </div>
@endsection