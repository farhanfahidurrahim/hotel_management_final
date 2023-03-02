@extends('layouts.simple.master')
@section('title', 'Basic DataTables')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Restaurant Rating</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Hotels</li>
<li class="breadcrumb-item active">Restaurant Rating</li>
@if (checkPermission('create_restaurant_star',26))
<a href="{{ route('restaurant.ratingCreate') }}" class="btn btn-sm btn-success">Create Ratings</a>
	
@else
	
@endif
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">

		<!-- Default ordering (sorting) Starts-->
		<div class="col-sm-12">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table class="display dataTable" id="basic-3">
							<thead>
								<tr>
									<th>Sl</th>
									<th>Restaurant Name</th>
									<th>Rating</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								@foreach($data as $row)
									<td>{{ $loop->iteration }}</td>
									<td>{{ $row->restaurant->name }}</td>
									<td>
										@for ($i = 0 ; $i < $row->star ; $i++)
											<i class="fa fa-star"></i>
										@endfor
									</td>
									<td>
										@if (checkPermission('edit_restaurant_star',27))
										<a href="{{ route('restaurant.ratings.edit',$row->id) }}" class="btn btn-primary">Edit</a>
											
										@else
											
										@endif
										{{-- <a href="{{ route('restaurant.ratings.delete',$row->id) }}" class="btn btn-danger">Delete</a> --}}
									</td>
								</tr>
								@endforeach
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- Default ordering (sorting) Ends-->

	</div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection