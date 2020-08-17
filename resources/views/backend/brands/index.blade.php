@extends('backendtemplate')

@section('content')
 	 <!-- Begin Page Content -->
 <div class="container-fluid">

 	<!-- Page Heading -->
 	<div class="d-sm-flex align-items-center justify-content-between mb-4">
 		<h1 class="h3 mb-0 text-gray-800">Brands</h1>
 		<a href="{{route('brands.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Brands </a>
 	</div>

 	<!-- Brand List Tablee -->
 	<div class="card shadow mb-4">
 		<div class="card-header py-3">
 			<h6 class="m-0 font-weight-bold text-primary">Brand List Table</h6>
 		</div>
 		<div class="card-body">
 			<div class="table-responsive">
 				<table class="table table-bordered">
  		<thead>
  			<tr>
  				<th>No</th>
  				<th>Name</th>
  				<th>Photo</th>
  				<th>Actions</th>
  			</tr>
  		</thead>
  		<tbody>
        @php $i=1; @endphp
        @foreach($brands as $brand)
  			<tr>
  				<th>{{$i++}}</th>
  				<th>{{$brand->name}}</th>
  				<th>
            <img src="{{$brand->photo}}" class="img-fluid">    
          </th>
  				<th>
  					<a href="{{route('brands.edit',$brand->id)}}" class="btn btn-primary">Edit</a>

            <form method="post" action="{{route('brands.destroy',$brand->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
              @csrf
              @method('DELETE')
              <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
            </form>

  					{{-- <a href="#" class="btn btn-warning">Delete</a> --}}
  				</th>
  			</tr>
        @endforeach
  		</tbody>
  	</table>
 			</div>
 		</div>
 	</div>

 </div> 
 @endsection