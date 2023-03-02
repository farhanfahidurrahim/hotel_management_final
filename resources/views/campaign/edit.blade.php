@extends('layouts.simple.master')
@section('title', 'Base Inputs')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Edit Campagn</h3>
@endsection


@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>Edit Campagn</h5>
				</div>
				<div>
					<a href="{{route('campaign.index')}}" class="btn btn-primary btn-sm" style="float: right;">All Campaign</a>
				</div>
				<form class="form theme-form" action="{{route('campaign.update',$data->id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('put')
					<div class="card-body">
						<div class="row">
							<div class="col">

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Campaign Title</label>
									<div class="col-sm-9">
										<input class="form-control" name="title" type="text" placeholder="Campaign Title" value="{{$data->title}}" required>
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Campaign Type</label>
									<div class="col-sm-9">
										<input class="form-control" name="type" type="text" placeholder="Campaign Type" value="{{$data->type}}">
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Campaign Start Date</label>
									<div class="col-sm-9">
										<input class="form-control" name="start_date" type="date" placeholder="Campaign phone" value="{{$data->start_date}}" required>
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Campaign End Date</label>
									<div class="col-sm-9">
										<input class="form-control" name="end_date" type="date" placeholder="Campaign phone" value="{{$data->end_date}}" required>
									</div>
								</div>

                				<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Banner Photo</label>
									<div class="col-sm-9">
										<input class="form-control" name="photo" type="file" accept="image/*" required />
                                        <img src="{{ asset('campaigns/images/'.$data->photo) }}" height="150" width="150" alt="" srcset="">
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="text-center">
						<button class="mb-5 btn btn-primary text-center" type="submit">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
@endsection
