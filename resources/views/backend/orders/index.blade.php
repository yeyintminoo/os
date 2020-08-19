@extends('backendtemplate')

@section('content')
  <div class="container-fluid">
  	<h2>Order List(Table)</h2>
  	<a href="{{route('orders.create')}}" class="btn btn-success"> Orders </a>
  	<table class="table table-bordered">
  		<thead>
  			<tr>
  				<th>No</th>
  				<th>Voucher No</th>
  				<th>Order Date</th>
  				<th>Status</th>
          <th>User ID</th>
          <th>Note</th>
          <th>Total</th>
  				<th>Actions</th>
  			</tr>
  		</thead>
  		<tbody>
        @php $i=1; @endphp
        @foreach($orders as $order)
  			<tr>
  				<th>{{$i++}}</th>
  				{{-- <th>
  					{{$order->codeno}}
  					<a href="{{route('orders.show',$order->id)}}">
                    	<span class="badge badge-primary badge-pill">Detail</span>
                    </a>

            <a href="#" class="box" data-name="{{$oreder->name}}" data-photo="{{asset($oreder->photo)}}" data-price="{{$order->price}}" data-desc="{{$order->description}}">
                <span class="badge badge-primary badge-pill">Modal</span>
            </a>
  				</th> --}}
  				<th>{{$order->voucherno}}</th>
  				<th>{{$order->orderdate}}</th>
          <th>{{$order->status}}</th>
          <th>{{$order->user_id}}</th>
          <th>{{$order->note}}</th>
          <th>{{$order->total}}</th>
  				<th>
            <a href="{{route('orders.show',$order->id)}}" class="btn btn-success">Detail</a>
  					<a href="{{route('orders.edit',$order->id)}}" class="btn btn-primary">Edit</a>


            <form method="post" action="{{route('orders.destroy',$order->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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

  <div class="modal fade" id="detailModal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title"></h3>
            <button class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <img src="{{asset($order->photo)}}" class="img-fluid">
                </div>
                <div class="col-md-6">
                  Price : {{$order->price}}<strong id="price"></strong>
                  Description :{{$order->description}}<strong id="desc"></strong>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
  </div>





@endsection

