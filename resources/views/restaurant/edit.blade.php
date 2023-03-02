@extends('layouts.simple.master')
@section('title', 'Base Inputs')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Edit Restaurant</h3>
@endsection


@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>Edit Restaurant</h5>
					<a href="{{ route('restaurant.index') }}" class="" style="float: right;">All Restuarant List</a>
				</div>
				<form class="form theme-form" action="{{route('restaurant.update',$data->id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('POST')
					<div class="card-body">
						<div class="row">
							<div class="col">

                				<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Restaurant Name</label>
									<div class="col-sm-9">
										<input class="form-control" name="name" type="text" value="{{ $data->name }}">
									</div>
								</div>

               					<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select Division</label>
									<div class="col-sm-9">
										<select class="custom-select form-select" id="division" name="division_id" required>
										    <option value="" selected disabled>Choose Division</option>
												@foreach($division as $row)
												<option value="{{ $row->id }}" @if($row->id==$data->id) selected @endif>{{ $row->name }}</option>
												@endforeach
										</select>
									</div>
								</div>

                				{{-- <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select District</label>
									<div class="col-sm-9">
										<select id="district" name="district" class="custom-select form-select">
											<option value="">Select District</option>
										</select>
									</div>
								</div>

                				<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select Upozilla</label>
									<div class="col-sm-9">
										<select id="upozilla" name="upozilla" class="custom-select form-select">
											<option value="">Select Upozilla</option>
										</select>
									</div>
								</div> --}}

                				<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Location</label>
									<div class="col-sm-9">
										<input class="form-control" name="location" type="text" value="{{ $data->location }}">
									</div>
								</div>

				                <div class="mb-3 row mb-0">
				                    <label class="col-sm-3 col-form-label">Description</label>
				                    <div class="col-sm-9">
				                      <textarea class="form-control" name="description" rows="5" cols="5" value="Description">{{ $data->description }}</textarea>
				                    </div>
				                </div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Discount</label>
									<div class="col-sm-9">
										<input class="form-control digits" name="discount" type="number" value="{{ $data->discount }}">
									</div>
								</div>

			         	       <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Latitude</label>
									<div class="col-sm-9">
										<input class="form-control" name="latitude" type="text" value="{{ $data->latitude }}">
									</div>
								</div>

                				<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Longitude</label>
									<div class="col-sm-9">
										<input class="form-control" name="longitude" type="text" value="{{ $data->longitude }}">
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Contact No.</label>
									<div class="col-sm-9">
										<input class="form-control m-input digits" type="number" name="contact_no" value="{{ $data->contact_no }}">
									</div>
								</div>
								
								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Facebook Page</label>
									<div class="col-sm-9">
										<input class="form-control" type="url" name="facebook_page" value="{{ $data->facebook_page }}">
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Website Link</label>
									<div class="col-sm-9">
										<input class="form-control" name="website_link" type="url" value="{{ $data->website_link }}">
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">YouTube Channel</label>
									<div class="col-sm-9">
										<input class="form-control" name="youtube_link" type="url" value="{{ $data->youtube_link }}">
									</div>
								</div>

								<div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Photo</label>
                                    <div class="col-sm-9">
										<input class="form-control" name="photo" type="file" accept="image/*">
										<img src="{{ asset('file/restaurant/images/'.$data->photo) }}" alt="" width="150" height="100" srcset="">
                                    </div>
                                </div>

                 				<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Tags</label>
									<div class="col-sm-9">
										<input class="form-control" name="tags" type="text" value="{{ $data->tags }}">
									</div>
								</div>

                				<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select Status</label>
									<div class="col-sm-9">
										<select name="status" class="custom-select form-select">
											<option disabled>Open this select menu</option>
											<option value="1"{{ $data->status==1 ? 'selected' : '' }}>Active</option>
											<option value="0"{{ $data->status==0 ? 'selected' : '' }}>In Active</option>
										</select>
									</div>
								</div>
								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Add in Popular Deal?</label>
									<div class="col-sm-9">
										<select name="popular_deal" class="custom-select form-select">
											<option value="popular" {{ $data->popular_deal == 'popular' ? 'selected' : '' }}>Yes</option>
											<option value="not_popular" {{ $data->popular_deal == 'not_popular' ? 'selected' : '' }} >No</option>
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

<script>
    $(document).ready(function() {
        $('#division').on('change', function() {
            let divisionId = $(this).val();
            if(divisionId) {
                $.ajax({
                    url: '{{ route("get.districts") }}',
                    type: 'POST',
                    data: {
											division: divisionId,
											_token: '{{csrf_token()}}'
										},
                    dataType: 'json',
                    success: function(data) {
                        $('#district').empty();
                        $('#district').append('<option value="">Select District</option>');
                        $.each(data, function(key, value) {
                            $('#district').append('<option value="'+ key +'">'+ value['name'] +'</option>');
                        });
                    }
                });
            } else {
                $('#district').empty();
                $('#upozilla').empty();
            }
        });
        $('#district').on('change', function() {

            let districtId = $(this).val();
						console.log(districtId);

            if(districtId) {
                $.ajax({
                    url: '{{ route("get.upozillas") }}',
                    type: 'POST',
                    data: {
											district: districtId + 1,
											_token: '{{csrf_token()}}'
										},
                    dataType: 'json',
                    success: function(data) {
											$('#upozilla').empty();
											$('#upozilla').append('<option value="">Select Upozilla</option>');
											$.each(data, function(key, value) {
                            $('#upozilla').append('<option value="'+ key +'">'+ value['name'] +'</option>');
                        });
                    }
                });
            } else {
                $('#upozilla').empty();
            }
        });
			});

</script>

@endsection

@section('script')
@endsection
