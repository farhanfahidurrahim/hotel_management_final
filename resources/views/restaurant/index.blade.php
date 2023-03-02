@extends('layouts.simple.master')
@section('title', 'Basic DataTables')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Restuarant List</h3>
@endsection

@section('breadcrumb-items')
    @if (checkPermission('create_restaurant', 18))
        <a href="{{ route('restaurant.create') }}" class="btn btn-primary btn-sm">Add New Restuarant</a>
    @else
    @endif
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">

            <!-- Default ordering (sorting) Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display dataTable" id="basic-3">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Location</th>
                                        <th>Discount</th>
                                        <th>Contact No</th>
                                        <th>Status</th>
                                        <th>popular Deals</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $row)
                                        <tr>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->location }}</td>
                                            <td>{{ $row->discount }}</td>
                                            <td>{{ $row->contact_no }}</td>
                                            <td>
                                                @if ($row->status == 1)
                                                    <i class="btn btn-sm btn-success">Active</i>
                                                @endif
                                                @if ($row->status == 0)
                                                    <i class="btn btn-sm btn-danger">Inactive</i>
                                                @endif
                                            </td>
                                            <td>
                                                <i
                                                    class="btn btn-sm btn-{{ $row->popular_deal == 'popular' ? 'success' : 'primary' }}">{{ $row->popular_deal }}</i>
                                            </td>
                                            <td>
                                                @if (checkPermission('edit_restaurant', 19))
                                                    <a href="{{ route('restaurant.edit', $row->id) }}"
                                                        class="btn btn-primary btn-sm">Edit</a>
                                                @else
                                                @endif
                                                @if (checkPermission('delete_restaurant', 20))
                                                    <a href="{{ route('restaurant.delete', $row->id) }}"
                                                        class="btn btn-danger btn-sm">Delete</a>
                                                @else
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
@endsection
