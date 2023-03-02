@extends('layouts.simple.master')
@section('title', 'Base Inputs')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Edit Hotel</h3>
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
                    <form class="form theme-form" action="{{ route('hotels.update', $data->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col">

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Hotel Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="name"
                                                value="{{ $data->name }}">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Select Division</label>
                                        <div class="col-sm-9">
                                            <select class="custom-select form-select" id="division" name="division_id">
                                                <option value="">Select Division</option>
                                                @foreach ($div as $row)
                                                    <option value="{{ $row->id }}"
                                                        @if ($row->id == $data->division_id) selected="" @endif>
                                                        {{ $row->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Location</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="location"
                                                value="{{ $data->location }}">
                                        </div>
                                    </div>

                                    <div class="mb-3 row mb-0">
                                        <label class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="description" rows="5" cols="5" placeholder="Default textarea">{{ $data->description }}</textarea>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Price</label>
                                        <div class="col-sm-9">
                                            <input class="form-control digits" name="price" type="number" step="0.01"
                                                value="{{ $data->price }}">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Offere Price</label>
                                        <div class="col-sm-9">
                                            <input class="form-control digits" name="offer_price" type="number"
                                                step="0.01" value="{{ $data->offer_price }}">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Discount</label>
                                        <div class="col-sm-9">
                                            <input class="form-control digits" name="discount" type="number"
                                                value="{{ $data->discount }}">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Latitude</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="latitude"
                                                value="{{ $data->latitude }}">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Longitude</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="longitude"
                                                value="{{ $data->longitude }}">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Contact no.</label>
                                        <div class="col-sm-9">
                                            <input class="form-control m-input digits" name="contact_no" type="tel"
                                                value="{{ $data->contact_no }}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Facebook Page</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="url" name="facebook_page"
                                                value="{{ $data->facebook_page }}">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Website Link</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="url" name="website_link"
                                                value="{{ $data->website_link }}">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">YouTube Channel</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="url" name="youtube_link"
                                                value="{{ $data->youtube_link }}">
                                        </div>
                                    </div>

                                    {{-- <div class="mb-3 row">
								<label class="col-sm-3 col-form-label">Upload Photo</label>
								<div class="col-sm-9">
									<input class="form-control" name="photo" type="file" accept="image/*">
								</div>
							</div> --}}

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Tags</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="tags"
                                                value="{{ $data->tags }}">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Services</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="services"
                                                value="{{ $data->services }}">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Select Status</label>
                                        <div class="col-sm-9">
                                            <select name="status" class="custom-select form-select">    
                                                <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>Active
                                                </option>
                                                <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>Inactive
                                                </option>
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

									<div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Photo</label>
                                        <div class="col-sm-9">
											<input class="form-control" name="photo" type="file" accept="image/*">
											<img src="{{ asset('hotel/images/'.$data->photo) }}" alt="" width="150" height="100" srcset="">
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
