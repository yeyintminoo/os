@extends('backendtemplate')

@section('content')
  <div class="container-fluid">
  	<h2>Brands</h2>
  </div>

  <div class="container-fluid">
  	<div class="row">
  		<div class="col-6">
  			<img src="{{asset($brand->photo)}}" class="img-fluid">
  		</div>
  		<div class="col-6">
  			<table>
  				<tr>
  					<th>
  						<td>Product Name : {{$item->name}} </td>
  					</th>
  				</tr>
  			</table>
  		</div>
  	</div>
  </div>
@endsection