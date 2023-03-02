@extends('layouts.simple.master')
@section('title', 'Basic DataTables')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Popular Deals Management</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Hotels</li>
<li class="breadcrumb-item active">Popular Deals Management</li>
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
									<th>ID</th>
									<th>Name</th>
									<th>Type</th>
									<th>Email</th>
									<th>Location</th>
									<th>Price</th>
									<th>Offer Price</th>
									<th>Discount</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $key=>$row)
								<tr>
									<td>{{ ++$key }}</td>
									<td>{{ $row->name }}</td>
									<td>{{ $row->type }}</td>
									<td>{{ $row->email }}</td>
									<td>{{ $row->location }}</td>
									<td>{{ $row->price }}</td>
									<td>{{ $row->offer_price }}</td>
									<td>{{ $row->discount }}</td>
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
