@extends('backendtemplate')

@section('content')
  <div class="container-fluid">
  	<h2>Item List(Table)</h2>
  	<a href="{{route('items.create')}}" class="btn btn-success"> Add Items </a>
  	<table class="table table-bordered">
  		<thead>
  			<tr>
  				<th>No</th>
  				<th>Codeno</th>
  				<th>Name</th>
  				<th>Price</th>
  				<th>Actions</th>
  			</tr>
  		</thead>
  		<tbody>
        @php $i=1; @endphp
        @foreach($items as $item)
  			<tr>
  				<th>{{$i++}}</th>
  				<th>
  					{{$item->codeno}}
  					<a href="{{route('items.show',$item->id)}}">
                    	<span class="badge badge-primary badge-pill">Detail</span>
                    </a>

            <a href="#" class="box" data-name="{{$item->name}}" data-photo="{{asset($item->photo)}}" data-price="{{$item->price}}" data-desc="{{$item->description}}">
                <span class="badge badge-primary badge-pill">Modal</span>
            </a>
  				</th>
  				<th>{{$item->name}}</th>
  				<th>{{$item->price}}</th>
  				<th>
  					<a href="{{route('items.edit',$item->id)}}" class="btn btn-primary">Edit</a>

            <form method="post" action="{{route('items.destroy',$item->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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
                  <img src="{{asset($item->photo)}}" class="img-fluid">
                </div>
                <div class="col-md-6">
                  Price : {{$item->price}}<strong id="price"></strong>
                  Description :{{$item->description}}<strong id="desc"></strong>
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

@section('script')
  <script type="text/javascript">
   $(document).ready(function(){
     $('.box').click(function(){
      // alert('Box!');
      var name = $(this).data('name');
      var photo = $(this).data('photo');
      var price = $(this).data('price');
      var desc = $(this).data('desc');

      $('.modal-header').text(name);
      $('#photo').attr('src',photo);
      $('#price').text(price);
      $('#desc').text(desc);
      $('#detailModal').modal('show');
    })
   })
  </script>
@endsection