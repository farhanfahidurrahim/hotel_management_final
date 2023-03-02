@extends('layouts.simple.master')
@section('title', 'Basic DataTables')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Customer List</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Customer</li>
<li class="breadcrumb-item active">Customer List</li>
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
									<th>Email</th>
									<th>Phone</th>
									<th>Gender</th>
									<th>Address</th>
									<th>Status</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($customers as $customer)
								<tr>
									<td>{{$customer->name}}</td>
									<td>{{$customer->email}}</td>
									<td>{{$customer->phone}}</td>
									<td>
										@if($customer->gender==1)<span>Male</span>@endif
										@if($customer->gender==2)<span>Female</span>@endif
									</td>
									<td>{{$customer->address}}</td>
									<td>
										@if($customer->status==1)<i class="btn btn-success">Active</i>@endif
										@if($customer->status==0)<i class="btn btn-danger">In-Active</i>@endif
									</td>
									<td class="d-flex">
										<a class="btn btn-primary active" href="{{route('customer.edit',$customer->id)}}">Edit</a>
										<form class="px-3" onclick="return confirm('Are you sure you want to delete this contact?')" method="POST" action="{{route('customer.destroy',$customer->id)}}">
												@csrf
												@method('DELETE')
												<button class="btn btn-secondary active">Delete</button>
										</form>
									</td>
								</tr>
								@endforeach
              				</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div>
			<a href="{{route('customer.create')}}" class="btn btn-primary btn-lg"><i class="fa fa-plus"></i>  Add New Customer</a>
		</div>
		<!-- Default ordering (sorting) Ends-->

	</div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection