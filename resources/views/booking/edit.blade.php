@extends('layouts.simple.master')
@section('title', 'Base Inputs')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Edit Booking</h3>
@endsection


@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>Edit Booking</h5>
					<a href="{{ route('booking.index') }}" class="" style="float: right;">All Booking List</a>
				</div>
				<form class="form theme-form" method="POST" action="{{ route('booking.update',$data->id) }}">
					@csrf
					<div class="card-body">
						<div class="row">
							<div class="col">

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select Status</label>
									<div class="col-sm-9">
										<select name="status" class="custom-select form-select">
											<option disabled>Open this select menu</option>
											<option value="0"{{ $data->status==0 ? 'selected' : '' }}>Pending</option>
											<option value="1"{{ $data->status==1 ? 'selected' : '' }}>Booked</option>
											<option value="2"{{ $data->status==2 ? 'selected' : '' }}>Rejected</option>
										</select>
									</div>
								</div>

                				{{-- <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select User</label>
									<div class="col-sm-9">
										<select class="custom-select form-select">
											<option selected="">Open this select menu</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div>
								</div> --}}

								{{-- <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Customer Name</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" name="customer_name" value="{{ $data->customer_name}}">
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Customer Phone</label>
									<div class="col-sm-9">
										<input class="form-control" type="number" name="customer_phone" value="{{ $data->customer_phone}}">
									</div>
								</div> --}}

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select Hotel & Room</label>
									<div class="col-sm-9">
										<select class="custom-select form-select" name="room_id">
											<option disabled>Open this select hotel</option>
											@foreach($hotel as $row)
												@php
													$hotelroom=DB::table('hotelrooms')->where('hotel_id',$row->id)->get();
												@endphp
												<option disabled style="color: red">{{ $row->name }}</option>
												@foreach($hotelroom as $row)
													<option value="{{$row->id}}" @if($row->id==$data->room_id) selected @endif>--{{ $row->title }}</option>
												@endforeach
											@endforeach
										</select>
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Check In</label>
									<div class="col-sm-9">
										<input class="form-control digits" name="check_in" id="example-datetime-local-input" type="date" value="{{ $data->check_in }}">
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Check Out</label>
									<div class="col-sm-9">
										<input class="form-control digits" name="check_out" id="example-datetime-local-input" type="date" value="{{ $data->check_out }}">
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Distance</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" name="distance" value="{{ $data->distance }}">
									</div>
								</div>

								{{-- <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Original Price</label>
									<div class="col-sm-9">
										<input class="form-control" type="Number" name="original_price" value="{{ $data->original_price }}" step="0.01">
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Discount</label>
									<div class="col-sm-9">
										<input class="form-control" type="Number" name="discount" value="{{ $data->discount }}" step="0.01">
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Final Price</label>
									<div class="col-sm-9">
										<input class="form-control" type="Number" name="final_price" value="{{ $data->final_price }}" step="0.01">
									</div>
								</div>
 --}}
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