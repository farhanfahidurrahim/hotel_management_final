@extends('layouts.simple.master')
@section('title', 'Base Inputs')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Hotel Room Offer Edit</h3>
@endsection


@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>Edit Hotel Room Offer Info</h5>
				</div>
				<form class="form theme-form" action="{{ route('hotels.rooms.update',$data->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="card-body">
						<div class="row">
							<div class="col">

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select Hotel</label>
									<div class="col-sm-9">
										<select class="custom-select form-select" id="division" name="hotel_id">
										    <option value="" disabled>Select Hotel</option> 
												@foreach($hdata as $row)
												<option value="{{ $row->id }}" @if($row->id==$data->id) selected @endif>{{ $row->name }}</option>
												@endforeach
										</select>
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Title</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" name="title" value="{{ $data->title }}">
									</div>
								</div>

						        <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Sub Title</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" name="subtitle" value="{{ $data->subtitle }}">
									</div>
								</div>

						        <div class="mb-3 row mb-0">
						            <label class="col-sm-3 col-form-label">Description</label>
						            <div class="col-sm-9">
						              <textarea class="form-control" name="description" rows="3" cols="5">{{ $data->description }}"</textarea>
						            </div>
						        </div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Offer Start Date</label>
									<div class="col-sm-9">
										<input class="form-control digits" name="offer_start_date" type="date" step="0.01" value="{{ $data->offer_start_date }}">
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Offer End Date</label>
									<div class="col-sm-9">
										<input class="form-control digits" name="offer_end_date" type="date" step="0.01" value="{{ $data->offer_end_date }}">
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Beds</label>
									<div class="col-sm-9">
										<input class="form-control digits" name="beds" type="text" step="0.01" value="{{ $data->beds }}">
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Baths</label>
									<div class="col-sm-9">
										<input class="form-control digits" name="baths" type="text" step="0.01" value="{{ $data->baths }}">
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Price</label>
									<div class="col-sm-9">
										<input class="form-control digits" name="price" type="number" value="{{ $data->price }}">
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Discount (%)</label>
									<div class="col-sm-9">
										<input class="form-control digits" name="discount" type="number" value="{{ $data->discount }}">
									</div>
								</div>

								{{-- <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Discount Price</label>
									<div class="col-sm-9">
										<input class="form-control digits" name="discount_price" type="number" value="{{ $data->discount_price }}">
									</div>
								</div> --}}

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Max Occupancy</label>
									<div class="col-sm-9">
										<input class="form-control m-input digits" name="max_occupancy" type="text" value="{{ $data->max_occupancy }}">
									</div>
								</div>

								<div class="mb-3 row mb-0">
						            <label class="col-sm-3 col-form-label">Private Policy</label>
						            <div class="col-sm-9">
						              <textarea class="form-control" name="private_policy" rows="2" cols="5">{{ $data->private_policy }}"</textarea>
						            </div>
						        </div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Info</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" name="info" value="{{ $data->info }}">
									</div>
								</div>

                				<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Upload Photo</label>
									<div class="col-sm-9">
										<input class="form-control" name="image" type="file" accept="image/*">
										<img src="{{ asset('hotel/rooms/'.$data->image) }}" height="100"  width="150" alt="" srcset="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center">
						<button class="mb-5 btn btn-primary text-center" type="submit">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
@endsection
