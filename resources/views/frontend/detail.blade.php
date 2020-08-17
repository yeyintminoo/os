@extends('frontendtemplate')
@section('content')
  <div class="col-lg-9">
  	   Item Detail Page
  	   <!-- Begin Page Content -->
 <div class="container-fluid">

 	<!-- Page Heading -->
 	<div class="d-sm-flex align-items-center justify-content-between mb-4">
 		<h1 class="h3 mb-0 text-gray-800">Items Detail</h1>
 		<a href="/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Go Back </a>
 	</div>

    <div class="row">
    	<div class="col-md-4">
            <img src="{{asset($item->photo)}}" class="img-fluid">    		
    	</div>
    	<div class="col-md-8 px-5 text-justify">
    		<h4 class="text-dark">Name: <span>{{$item->name}}</span></h4>
    		<h4 class="text-dark">Brand Name: <span><?= $item['brand_name']?></span></h4>
    		<h4 class="text-dark">Price: <span><?= $item['price']?></span></h4>
    		<h4 class="text-dark">SubCategory: <span><?= $item['sub_name']?></span></h4>
    	  

    	     <h5 class="text-dark">Description: <?= $item['description']?></h5>
    	     
    	</div>
    </div>
</div>
	</div>
  </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('frontend/js/count.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
@endsection