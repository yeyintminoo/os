@extends('backendtemplate')

@section('content')
  <div class="container-fluid">
  	<h2>Order Detail</h2>
  </div>
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-6">
  			{{-- <img src="{{asset($item->photo)}}" class="img-fluid"> --}}
  		</div>
  		<div class="col-6">
  			<table>
  				<tr>
  					<th>
  						<td>Voucher No : {{$order->voucherno}} </td>
  					</th>
  				</tr>
  				<tr>	
  					<th>
  						<td>Order Date: {{$order->orderdate}} </td>
  					</th>
  				</tr>
  				<tr>
  					<th>
  						<td>Status : {{$order->status}} </td>
  					</th>
  				</tr>
  				<tr>
  				<tr>
            <th>
              <td>User Id :{{$order->user_id}} </td>
            </th>    
          </tr>
          <tr>
             <th>
                <td>Note : {{$order->note}}</td>
            </th>
          </tr>
          <tr>
            <th>
                <td>Total : {{$order->total}}</td>
            </th>
  				</tr>
  			</table>
  		</div>
  	</div>
  </div>
@endsection