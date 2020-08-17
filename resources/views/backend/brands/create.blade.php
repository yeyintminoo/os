@extends('backendtemplate')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid mb-3">
 	<!-- Page Heading -->
 	<div class="row">
 		<div class="offset-md-2 col-md-8">

 			@if ($errors->any())
 			<div class="alert alert-danger">
 				<ul>
 					@foreach($errors->all() as $error)
 					<li>{{$error}}</li>
 					@endforeach
 				</ul>
 			</div>
 			@endif
 			<form method="POST" action="{{route('brands.store')}}" enctype="multipart/form-data">
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