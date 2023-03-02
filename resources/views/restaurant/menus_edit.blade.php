@extends('layouts.simple.master')
@section('title', 'Base Inputs')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Edit Restaurant Menu</h3>
@endsection


@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>Edit Restaurant Menu</h5>
					<a href="{{ route('restaurant.menus') }}" class="" style="float: right;">All Restuarant Menus List</a>
				</div>
				<form class="form theme-form" action="{{route('restaurant.menus.update',$data->id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('POST')
					<div class="card-body">
						<div class="row">
							<div class="col">

               					<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select Restaurant</label>
									<div class="col-sm-9">
										<select class="custom-select form-select" id="division" name="restaurant_id" required>
										    <option disabled>Choose Restaurant</option>
												@foreach($restaurant as $row)
												<option value="{{ $row->id }}" @if($row->id==$data->restaurant_id) selected @endif>{{ $row->name }}</option>
												@endforeach
										</select>
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Name</label>
									<div class="col-sm-9">
										<input class="form-control" name="name" type="text" value="{{ $data->name }}">
									</div>
								</div>

				                <div class="mb-3 row mb-0">
				                    <label class="col-sm-3 col-form-label">Description</label>
				                    <div class="col-sm-9">
				                      <textarea class="form-control" name="description" rows="3" cols="5">{{ $data->description }}</textarea>
				                    </div>
				                </div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Discount</label>
									<div class="col-sm-9">
										<input class="form-control digits" name="discount" type="number" value="{{ $data->discount }}">
									</div>
								</div>
								
                				<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Upload Photo</label>
									<div class="col-sm-9">
										<input class="form-control" name="photo" type="file" accept="image/*">
										<img src="{{ asset('file/restaurantmenu/images/'.$data->photo) }}" alt="" width="150" height="100" srcset="">
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
											<option disabled>Choose a status</option>
											<option value="1" {{ $data->status==1 ? 'selected' : '' }}>Active</option>
											<option value="0" {{ $data->status==0 ? 'selected' : '' }}>In Active</option>
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
