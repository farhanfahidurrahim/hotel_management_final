@extends('layouts.simple.master')
@section('title', 'Base Inputs')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Privacy Policy</h3>
@endsection


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Privacy Policy</h5>
                    </div>

					@if (!empty($data->id))
					<form method="POST" action="{{ route('privacy-policy.update', $data->id) }}" class="form theme-form">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col">

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Privacy Policy</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="title"
                                                value="{{ $data->title }}">
                                        </div>
                                    </div>

                                    <div class="mb-3 row mb-0">
                                        <label class="col-sm-3 col-form-label">Text</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="description" rows="5">
												{{ $data->description }}
											</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="mb-5 btn btn-primary text-center" type="submit">Save</button>
                            </div>
                    </form>
					@else
					<form method="POST" action="{{ route('privacy-policy.store') }}" class="form theme-form">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col">

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Privacy Policy</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="title">
                                        </div>
                                    </div>

                                    <div class="mb-3 row mb-0">
                                        <label class="col-sm-3 col-form-label">Text</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="description" rows="5" cols="5" placeholder="Write Privacy Policy">
												
											</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="mb-5 btn btn-primary text-center" type="submit">Save</button>
                            </div>
                    </form>
					@endif
                    
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')
@endsection
