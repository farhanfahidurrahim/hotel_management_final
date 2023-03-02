@extends('layouts.simple.master')
@section('title', 'Basic DataTables')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Hotel List</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Hotels</li>
<li class="breadcrumb-item active">Hotel List</li>
<a href="{{ route('hotels.create') }}" class="btn btn-primary btn-sm">Add New Hotel</a>
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
									<th>Name</th>
									<th>Division</th>
									<th>Location</th>
									<th>Price</th>
									<th>Offer Price</th>
									<th>Discount</th>
									<th>Status</th>
									<th>Popular Deals</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $row)
								<tr>
									<td>{{ $row->name }}</td>
									<td>{{ $row->division->name }}</td>
									<td>{{ $row->location }}</td>
									<td>{{ $row->price }}</td>
									<td>{{ $row->offer_price }}</td>
									<td>{{ $row->discount }}</td>
									<td> @if($row->status==1)
											<i class="btn btn-success">Active</i>
										@endif
										@if($row->status==0)
											<i class="btn btn-danger">Inactive</i>
										@endif
									</td>
									<td>

										<i class="btn btn-{{ $row->popular_deal == 'popular' ? 'success' : 'warning' }}">{{ $row->popular_deal }}</i>

										
									</td>
									<td>
										@if (checkPermission('edit_hotel',4))
										<a href="{{ route('hotels.edit',$row->id) }}" class="btn btn-primary btn-sm">Edit</a>
										@else
											
										@endif
										@if (checkPermission('hotel_delete',3))
										<a href="{{ route('hotels.delete',$row->id) }}" class="btn btn-danger btn-sm">Delete</a>
										@else
											
										@endif
										
									</td>
								</tr>
								@endforeach
							</tbody>
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
