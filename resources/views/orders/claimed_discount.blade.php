@extends('layouts.simple.master')
@section('title', 'Basic DataTables')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Restaurant Claimed Discount</h3>
@endsection

@section('breadcrumb-items')
{{-- <li class="breadcrumb-item">Hotels</li>
<li class="breadcrumb-item active">All orders</li> --}}
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
									<th>Date</th>
									<th>Customer Name</th>
									<th>Restaurant Name</th>
									<th>Discount</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $row)
								<tr>
									<td>{{ $row->created_at }}</td>
									<td>{{ $row->user_name }}</td>
									<td>{{ $row->restaurant_name }}</td>
									<td>{{ $row->restaurant_discount }}</td>
									<td>
										@if($row->status == 'received')<i class="btn btn-success">Received</i>@endif
										@if($row->status == 'approved')<i class="btn btn-danger">Approved</i>@endif
									</td>
									<td class="d-flex">
										<a class="btn btn-primary active" href="{{route('claimed.discount.edit',$row->id)}}">Edit</a>
										{{-- <form class="px-3" onclick="return confirm('Are you sure you want to delete this contact?')" method="POST" action="{{route('booking.delete',$row->id)}}">
											@csrf
											@method('DELETE')
											<button class="btn btn-secondary active">Delete</button>
										</form> --}}
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