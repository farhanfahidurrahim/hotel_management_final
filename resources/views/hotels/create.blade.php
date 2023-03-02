@extends('layouts.simple.master')
@section('title', 'Base Inputs')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Create New Hotel</h3>
@endsection


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Enter Hotel Info</h5>
                        <a href="{{ route('hotels.index') }}" class="" style="float: right;">All Hotel List</a>
                    </div>
                    <form class="form theme-form" action="{{ route('hotels.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col">

                                    {{-- <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select Vendor</label>
									<div class="col-sm-9">
										<select class="custom-select form-select">
											<option selected="">Open this select menu</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div>
								</div> --}}

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Hotel Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="name" placeholder="Name">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Select Division</label>
                                        <div class="col-sm-9">
                                            <select class="custom-select form-select" id="division" name="division_id">
                                                <option value="">Select Division</option>
                                                @foreach ($data as $division)
                                                    <option value="{{ $division->id }}">{{ $division->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    {{-- <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select District</label>
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
									<label class="col-sm-3 col-form-label">Select Upozilla</label>
									<div class="col-sm-9">
										<select class="custom-select form-select">
											<option selected="">Open this select menu</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div>
								</div> --}}

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Location</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="location"
                                                placeholder="Location">
                                        </div>
                                    </div>

                                    <div class="mb-3 row mb-0">
                                        <label class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="description" rows="5" cols="5" placeholder="Default textarea"></textarea>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Price</label>
                                        <div class="col-sm-9">
                                            <input class="form-control digits" name="price" type="number" step="0.01"
                                                placeholder="price">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Offere Price</label>
                                        <div class="col-sm-9">
                                            <input class="form-control digits" name="offer_price" type="number"
                                                step="0.01" placeholder="offer price">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Discount</label>
                                        <div class="col-sm-9">
                                            <input class="form-control digits" name="discount" type="number"
                                                placeholder="discount">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Laditude</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="latitude"
                                                placeholder="Latitude">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Longitude</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="longitude"
                                                placeholder="Longitude">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Contact no.</label>
                                        <div class="col-sm-9">
                                            <input class="form-control m-input digits" name="contact_no" type="tel"
                                                placeholder="01234567891">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Facebook Page</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="url" name="facebook_page"
                                                placeholder="https://facebook.com">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Website Link</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="url" name="website_link"
                                                placeholder="https://example.com">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">YouTube Channel</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="url" name="youtube_link"
                                                placeholder="https://youtube.com">
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
                                            <input class="form-control" type="text" name="tags"
                                                placeholder="Enter Comma Separated Value">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Services</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="services"
                                                placeholder="Services">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Select Status</label>
                                        <div class="col-sm-9">
                                            <select name="status" class="custom-select form-select">
                                                <option value="1">Active</option>
                                                <option value="0">In Active</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Add in Popular Deal?</label>
                                        <div class="col-sm-9">
                                            <select name="popular_deal" class="custom-select form-select">
                                                <option value="popular">Yes</option>
                                                <option value="not_popular">No</option>
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
