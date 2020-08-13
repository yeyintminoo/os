@extends('backendtemplate')

@section('content')

<!-- Begin Page Content -->
 <div class="container-fluid mb-3">

 	<!-- Page Heading -->
 	<div class="d-sm-flex align-items-center justify-content-between mb-4">
 		<h1 class="h3 mb-0 text-gray-800">Brand Create</h1>
 		<a href="{{route('categories.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Go Back </a>
 	</div>

 	<div class="row">
 		<div class="offset-md-2 col-md-8">
 			<form method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data">
 				@csrf
 				<div class="form-group">
 					<label>Name</label>
 					<input type="text" name="name" class="form-control">
 				</div>
 				<div class="form-group">
 					<label>Photo</label>
 					<input type="file" name="photo" class="form-control-file">
 				</div>
 				<input type="submit" value="+ Add" class="btn btn-outline-primary">
 			</form>
 		</div>
 	</div>

 </div>
 @endsection