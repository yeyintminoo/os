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
 				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
 					<thead>
 						<tr>
 							<th>Name</th>
 							<th>Photo</th>
 							<th>Actions</th>
 						</tr>
 					</thead>
 					<tfoot>
 						<tr>
 							<th>Name</th>
 							<th>Photo</th>
 							<th>Actions</th>
 						</tr>
 					</tfoot>
 					<tbody>
 						<?php 

 						

 						<tr>
 							<td><?= $name ?></td>
 							<td><img src="<?= $photo ?>" width=50 height =50></td>
 							<td>
 								<button class="btn btn-outline-primary detail btn-sm"><i class="fas fa-info"></i></button>
 								<button class="btn btn-outline-warning edit btn-sm"><i class="far fa-edit"></i></button>
 								<button class="btn btn-outline-danger delete btn-sm"><i class="fas fa-trash-alt"></i></button>
 							</td>
 						</tr>

 					</tbody>
 				</table>
 			</div>
 		</div>
 	</div>

 </div> 
 @endsection