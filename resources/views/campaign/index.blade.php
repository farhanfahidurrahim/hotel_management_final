@extends('layouts.simple.master')
@section('title', 'Basic DataTables')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Campaign Management</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Campaign</li>
<li class="breadcrumb-item active">Campaign Management</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">

		<!-- Default ordering (sorting) Starts-->
		<div class="col-sm-12">
			<div class="card">
				<div class="text-end">
					<a href="{{route('campaign.create')}}" class="btn mt-2 btn-primary btn-sm"><i class="fa fa-plus"></i>  Add New Campaign</a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="display dataTable" id="basic-3">
							<thead>
								<tr>
									<th>Title</th>
									<th>Campaign Type</th>
									<th>Campaign Start Date</th>
									<th>Campaign End Date</th>
									<th>Banner Photo</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($data as $row)
								<tr>
									<td>{{$row->title}}</td>
									<td>{{$row->type}}</td>
									<td>{{$row->start_date}}</td>
									<td>{{$row->end_date}}</td>
									<td><img src="{{ asset('campaigns/images/'.$row->photo) }}" height="150" width="150" alt="" srcset=""></td>
									<td class="d-flex">
										<a class="btn btn-primary active" href="{{route('campaign.edit',$row->id)}}">Edit</a>
										<form class="px-3" onclick="return confirm('Are you sure you want to delete?')" method="POST" action="{{route('campaign.destroy',$row->id)}}">
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
