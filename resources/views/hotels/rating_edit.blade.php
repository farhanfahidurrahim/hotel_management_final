@extends('layouts.simple.master')
@section('title', 'Base Inputs')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Edit Hotel Rating</h3>
@endsection


@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					Raing for Hotel -  <h5>{{ App\Models\Hotel::where('id',$data->hotel_id)->pluck('name')->first() }}</h5>
				</div>
				<form class="form theme-form" action="{{ route('hotels.updateHotelRating',$data->id) }}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('put')
					<div class="card-body">
						<div class="row">
							<div class="col">
								{{-- <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select Hotel</label>
									<div class="col-sm-9">
										<select name="hotel_id" class="custom-select form-select">
											<option disabled>Open this select Hotel</option>
											@foreach ($Hoteldata as $item)
												<option value="{{ $item->id }}" {{ $data->hotel_id == $item->id ? 'selected': '' }}>{{ $item->name }}</option>
											@endforeach
										</select>
									</div>
								</div> --}}

                				<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select Star</label>
									<div class="col-sm-9">
										<select name="star" class="custom-select form-select">
											<option disabled>Open this select menu</option>
											<option value="1"{{ $data->star==1 ? 'selected' : '' }}>1 Star</option>
											<option value="2"{{ $data->star==2 ? 'selected' : '' }}>2 Star</option>
											<option value="3"{{ $data->star==3 ? 'selected' : '' }}>3 Star</option>
											<option value="4"{{ $data->star==4 ? 'selected' : '' }}>4 Star</option>
											<option value="5"{{ $data->star==5 ? 'selected' : '' }}>5 Star</option>
										</select>
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