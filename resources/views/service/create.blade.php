@extends('layouts.simple.master')
@section('title', 'Base Inputs')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Terms of Services</h3>
@endsection


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Terms of Services</h5>
                    </div>
                    <form method="POST" class="form theme-form" action="{{ route('service.update') }}">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="row">
                                <div class="col">

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Terms of Services Title</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="title"
                                                value="{{ old('title', $term->title) }}">
                                        </div>
                                        @error('title')
                                            <p class="text-red">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="row mb-0">
                                        <label class="col-sm-3 col-form-label">Text</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="description" rows="5" cols="5">
												{{ old('description', $term->description) }}
											</textarea>
                                        </div>
                                        @error('description')
                                            <p class="text-red">{{ $message }}</p>
                                        @enderror
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
    </div>
@endsection

@section('script')
@endsection
