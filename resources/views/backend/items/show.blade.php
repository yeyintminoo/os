@extends('backendtemplate')

@section('content')
  <div class="container-fluid">
  	<h2>Item Detail(Your URI)</h2>
  </div>
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-6">
  			<img src="{{asset($item->photo)}}" class="img-fluid">
  		</div>
  		<div class="col-6">
  			<table>
  				<tr>
  					<th>
  						<td>Product Name : {{$item->name}} </td>
  					</th>
  				</tr>
  				<tr>	
  					<th>
  						<td>Product Code No: {{$item->codeno}} </td>
  					</th>
  				</tr>
  				<tr>
  					<th>
  						<td>Product Price : {{$item->price}} </td>
  					</th>
  				</tr>
  				<tr>
  					<th>
  						<td>Product Description :{{$item->description}} </td>
  					</th>
  				</tr>
  			</table>
  		</div>
  	</div>
  </div>
@endsection