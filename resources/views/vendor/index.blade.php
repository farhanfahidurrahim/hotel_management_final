@extends('layouts.simple.master')
@section('title', 'Basic DataTables')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Vendor | Role Management</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Vendor</li>
<li class="breadcrumb-item active">Role Management</li>
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
									<th>SL</th>
									<th>Name</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach($roles as $role)
								<tr>
									<td>{{ $loop->index+1 }}</td>
									<td>{{ $role->name }}</td>
									<td class="d-flex">
										<a class="btn btn-primary active" href="{{route('customer.edit',$role->id)}}">Edit</a>
										<form class="px-3" onclick="return confirm('Are you sure you want to delete this contact?')" method="POST" action="{{route('customer.destroy',$role->id)}}">
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
		<!-- Default ordering (sorting) Ends-->

	</div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection
