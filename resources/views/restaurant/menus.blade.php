@extends('layouts.simple.master')
@section('title', 'Basic DataTables')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Restaurant Menus</h3>
@endsection

@section('breadcrumb-items')
@if (checkPermission('create_restaurant_menu',22))
<a href="{{ route('restaurant.menus.create') }}" class="btn btn-primary btn-sm">Add New Restuarant Menu</a>
	
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
									<th>Restaurant Name</th>
									<th>Menu Name</th>
									<th>Description</th>
									<th>Discount</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $row)
								<tr>
									<td>{{ $row->restaurant->name }}</td>
									<td>{{ $row->name }}</td>
									<td>{{ $row->description }}</td>
									<td>{{ $row->discount }}</td>
									<td>
										@if($row->status==1)<i class="btn btn-success">Active</i>@endif
										@if($row->status==0)<i class="btn btn-danger">In-Active</i>@endif
									</td>
									<td>
										@if (checkPermission('edit_restaurant_menu',23))
										<a href="{{ route('restaurant.menus.edit',$row->id) }}" class="btn btn-primary">Edit</a>
											
										@else
											
										@endif
										@if (checkPermission('delete_restaurant_menu',24))
										<a href="{{ route('restaurant.menus.delete',$row->id) }}" class="btn btn-danger">Delete</a>
											
										@else
											
										@endif
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
