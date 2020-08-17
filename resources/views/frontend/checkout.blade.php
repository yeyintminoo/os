@extends('frontendtemplate')
@section('content')
<div class="col-lg-9">
	<h1>Checkout</h1>
<div class="container-fluid">
	<div class="container">
		<table class="table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Item Name</th>
					<th>Photo</th>
					<th>Price</th>
					<th>QTY</th>
					<th>Amount</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
	
	<a href="{{route('homepage')}}" class="btn btn-success">Containue Shopping</a>
	<textarea class="notes" placeholder="Your note.."></textarea>
@role('customer')
	
	<a class="btn btn-primary float-right buy_now">Check Out</a>
@else
	<a href="{{route('login')}}" class="btn btn-info float-right">Login to Check Out</a>
@endrole
</div>

</div>
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('frontend/js/count.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
@endsection