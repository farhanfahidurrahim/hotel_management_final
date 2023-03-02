@extends('layouts.simple.master')
@section('title', 'Base Inputs')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Create Restaurant Rating</h3>
@endsection


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Hotel Rating</h5>
                    </div>
                    <form class="form theme-form" action="{{ route('hotels.ratingSubmit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="card-body">
                            <div class="row">
								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select Hotel</label>
									<div class="col-sm-9">
										<select name="hotel_id" class="custom-select form-select">
											@foreach ($data as $item)
												<option value="{{ $item->id }}">{{ $item->name }}</option>
											@endforeach
										</select>
									</div>
								</div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Select Star</label>
                                    <div class="col-sm-9">
                                        <select name="star" class="custom-select form-select">
                                            <option value="1">1 Star</option>
                                            <option value="2">2 Star</option>
                                            <option value="3">3 Star</option>
                                            <option value="4">4 Star</option>
                                            <option value="5">5 Star</option>
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
