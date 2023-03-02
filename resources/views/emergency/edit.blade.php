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
				<form action="{{route('emergency.update',$emergencyContact->id)}}" method="POST" class="form theme-form">
					@csrf
					@method('PATCH')
					<div class="card-body">
						<div class="row">
							<div class="col">

                <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Name</label>
									<div class="col-sm-9">
										<input class="form-control" name="name" value="{{ old('name', $emergencyContact->name) }}" type="text" placeholder="Name">
									</div>
								</div>

                <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Contact</label>
									<div class="col-sm-9">
										<input class="form-control" name="contact" value="{{ old('contact', $emergencyContact->contact) }}" type="text" placeholder="Contact">
									</div>
								</div>

                <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Note</label>
									<div class="col-sm-9">
										<input class="form-control" name="note" value="{{ old('note', $emergencyContact->note) }}" type="text" placeholder="Note">
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

@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection
