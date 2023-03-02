@extends('layouts.simple.master')
@section('title', 'Base Inputs')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Create Customer Reward</h3>
@endsection


@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<form class="form theme-form">
					<div class="card-body">
						<div class="row">
							<div class="col">

                <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select Customer</label>
									<div class="col-sm-9">
										<select class="custom-select form-select">
											<option selected="">Open this select menu</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div>
								</div>

                <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select Type</label>
									<div class="col-sm-9">
										<select class="custom-select form-select">
											<option selected="">Open this select menu</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div>
								</div>
                <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select Hotel / Restaurant</label>
									<div class="col-sm-9">
										<select class="custom-select form-select">
											<option selected="">Open this select menu</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Discount</label>
									<div class="col-sm-9">
										<input class="form-control" type="Number" placeholder="Discount">
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="text-center">
						<button class="mb-5 btn btn-primary text-center" type="button">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
@endsection
