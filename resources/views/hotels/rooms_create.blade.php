@extends('layouts.simple.master')
@section('title', 'Base Inputs')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Create Hotel Room Offer</h3>
@endsection


@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>Enter Hotel Room  Info</h5>
				</div>
				<form class="form theme-form" action="{{ route('hotels.rooms.store') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="card-body">
						<div class="row">
							<div class="col">

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select Hotel</label>
									<div class="col-sm-9">
										<select class="custom-select form-select" name="hotel_id">
										    <option value="">Select Hotel</option> 
												@foreach($hotel_name as $row)
												<option value="{{ $row->id }}">{{ $row->name }}</option>
												@endforeach
										</select>
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Title</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" name="title" placeholder="title">
									</div>
								</div>

						        <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Sub Title</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" name="subtitle" placeholder="subtitle">
									</div>
								</div>

						        <div class="mb-3 row mb-0">
						            <label class="col-sm-3 col-form-label">Description</label>
						            <div class="col-sm-9">
						              <textarea class="form-control" name="description" rows="3" cols="5" placeholder="Default textarea"></textarea>
						            </div>
						        </div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Offer Start Date</label>
									<div class="col-sm-9">
										<input class="form-control digits" name="offer_start_date" type="date" step="0.01" placeholder="price" >
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Offer End Date</label>
									<div class="col-sm-9">
										<input class="form-control digits" name="offer_end_date" type="date" step="0.01" placeholder="price" >
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Beds</label>
									<div class="col-sm-9">
										<input class="form-control digits" name="beds" type="text" step="0.01" placeholder="bed" >
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Baths</label>
									<div class="col-sm-9">
										<input class="form-control digits" name="baths" type="text" step="0.01" placeholder="bath" >
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Price</label>
									<div class="col-sm-9">
										<input class="form-control digits" name="price" type="number" placeholder="price" >
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Discount (%)</label>
									<div class="col-sm-9">
										<input class="form-control digits" name="discount" type="number" placeholder="discount" >
									</div>
								</div>

								

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Max Occupancy</label>
									<div class="col-sm-9">
										<input class="form-control m-input digits" name="max_occupancy" type="text" placeholder="max occupancy">
									</div>
								</div>

								<div class="mb-3 row mb-0">
						            <label class="col-sm-3 col-form-label">Private Policy</label>
						            <div class="col-sm-9">
						              <textarea class="form-control" name="private_policy" rows="2" cols="5" placeholder="Default textarea"></textarea>
						            </div>
						        </div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Info</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" name="info" placeholder="info">
									</div>
								</div>

                				<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Upload Photo</label>
									<div class="col-sm-9">
										<input class="form-control" name="image" type="file" accept="image/*">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center">
						<button class="mb-5 btn btn-primary text-center" type="submit">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
@endsection
