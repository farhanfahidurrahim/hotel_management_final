@extends('layouts.simple.master')
@section('title', 'Base Inputs')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Emergency Contact</h3>
@endsection


@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>Create Emergency Contact</h5>
				</div>
				<form action="{{route('emergency.store')}}" method="POST" class="form theme-form">
					@csrf
					@method('POST')
					<div class="card-body">
						<div class="row">
							<div class="col">

                <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Name</label>
									<div class="col-sm-9">
										<input class="form-control" name="name" type="text" placeholder="Name">
									</div>
								</div>

                <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Contact</label>
									<div class="col-sm-9">
										<input class="form-control" name="contact" type="text" placeholder="Contact">
									</div>
								</div>

                <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Note</label>
									<div class="col-sm-9">
										<input class="form-control" name="note" type="text" placeholder="Note">
									</div>
								</div>

                <button class="btn btn-primary" type="submit">Save </button>
							</div>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

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
									<th>Contact</th>
									<th>Note</th>
									<th>Action</th>

								</tr>
							</thead>
							<tbody>
								@foreach ($emergencyContact as $item)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$item->name}}</td>
									<td>{{$item->contact}}</td>
									<td>{{$item->note}}</td>
									<td class="d-flex">
										<a class="btn btn-primary active" href="{{route('emergency.edit',$item->id)}}">Edit</a>
										<form class="px-3" onclick="return confirm('Are you sure you want to delete this contact?')" method="POST" action="{{route('emergency.destroy',$item->id)}}">
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
