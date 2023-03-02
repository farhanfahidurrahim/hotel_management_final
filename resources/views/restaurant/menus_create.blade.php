@extends('layouts.simple.master')
@section('title', 'Base Inputs')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Create New Restaurant Menu</h3>
@endsection


@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>Create Restaurant Menu</h5>
					<a href="{{ route('restaurant.menus') }}" class="" style="float: right;">All Restuarant Menus List</a>
				</div>
				<form class="form theme-form" action="{{route('restaurant.menus.store')}}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('POST')
					<div class="card-body">
						<div class="row">
							<div class="col">

               					<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select Restaurant</label>
									<div class="col-sm-9">
										<select class="custom-select form-select" id="division" name="restaurant_id" required>
										    <option value="" selected disabled>Choose Restaurant</option>
												@foreach($restaurant as $row)
												<option value="{{ $row->id }}">{{ $row->name }}</option>
												@endforeach
										</select>
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Name</label>
									<div class="col-sm-9">
										<input class="form-control" name="name" type="text" placeholder="Name">
									</div>
								</div>

				                <div class="mb-3 row mb-0">
				                    <label class="col-sm-3 col-form-label">Description</label>
				                    <div class="col-sm-9">
				                      <textarea class="form-control" name="description" rows="3" cols="5" placeholder="Description"></textarea>
				                    </div>
				                </div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Discount</label>
									<div class="col-sm-9">
										<input class="form-control digits" name="discount" type="number" placeholder="Discount">
									</div>
								</div>
								
                				<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Upload Photo</label>
									<div class="col-sm-9">
										<input class="form-control" name="photo" type="file" accept="image/*">
									</div>
								</div>

                 				<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Tags</label>
									<div class="col-sm-9">
										<input class="form-control" name="tags" type="text" placeholder="Enter Comma Separated Value">
									</div>
								</div>

                				<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select Status</label>
									<div class="col-sm-9">
										<select name="status" class="custom-select form-select">
											<option selected="" disabled>Choose a status</option>
											<option value="1">Active</option>
											<option value="0">In Active</option>
										</select>
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
