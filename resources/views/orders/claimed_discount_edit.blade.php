@extends('layouts.simple.master')
@section('title', 'Base Inputs')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Restaurant Claimed Discount Edit</h3>
@endsection


@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>Edit Claimed Discount</h5>
				</div>
				<form class="form theme-form" method="POST" action="{{ route('claimed.discount.update',$data->id) }}">
					@csrf
					<div class="card-body">
						<div class="row">
							<div class="col">

            				<div class="mb-3 row">
								<label class="col-sm-3 col-form-label">Select Claimed Status</label>
								<div class="col-sm-9">
									<select class="custom-select form-select" name="status">
										<option disabled>Open this select menu</option>
										<option value="received"{{$data->status=='received'?'selected':''}}>Received</option>
										<option value="approved"{{$data->status=='approved'?'selected':''}}>Approved</option>
									</select>
								</div>
							</div>

				                <div class="text-center">
									<button class="mb-5 btn btn-primary text-center" type="submit">Update</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection