@extends('layouts.simple.master')
@section('title', 'Base Inputs')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Edit Customer</h3>
@endsection


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit a Customer</h5>
                        <a href="{{ route('customer.index') }}" class="" style="float: right;">All Customer List</a>
                    </div>
                    <form class="form theme-form" action="{{ route('customer.update', $customer->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="row">
                                <div class="col">

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Cusomer Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="name" type="text"
                                                value="{{ old('name', $customer->name) }}">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Gender</label>
                                        <div class="col-sm-9">
                                            <select name="gender" class="custom-select form-select">
                                                <option value="admin" {{ $customer->status == 1 ? 'selected' : '' }}>Admin
                                                </option>
                                                <option value="vendor" {{ $customer->status == 0 ? 'selected' : '' }}>Venodr
                                                </option>
                                                <option value="customer" {{ $customer->status == 0 ? 'selected' : '' }}>
                                                    customer</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Customer Password</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="password" type="text"
                                                value="{{ old('password', $customer->password) }}">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Customer Phone</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="phone" type="text"
                                                value="{{ old('phone', $customer->phone) }}">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Gender</label>
                                        <div class="col-sm-9">
                                            <select name="gender" class="custom-select form-select">
                                                <option value="1" {{ $customer->status == 1 ? 'selected' : '' }}>Male
                                                </option>
                                                <option value="2" {{ $customer->status == 0 ? 'selected' : '' }}>Female
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Date of Birth</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="dob" type="text"
                                                value="{{ old('dob', $customer->dob) }}" required>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Address</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="address" type="text"
                                                value="{{ old('address', $customer->address) }}" required>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Prefer</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="prefer" type="text"
                                                value="{{ old('prefer', $customer->prefer) }}" required>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Upload Photo</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="image" type="file" accept="image/*">
                                            <img src="{{ asset('file/customer/images/' . $customer->image) }}" alt=""
                                                width="150" height="100" srcset="">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <select name="status" class="custom-select form-select">
                                                <option value="1" {{ $customer->status == 1 ? 'selected' : '' }}>
                                                    Active</option>
                                                <option value="0" {{ $customer->status == 0 ? 'selected' : '' }}>
                                                    In-Active</option>
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
