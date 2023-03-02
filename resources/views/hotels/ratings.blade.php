@extends('layouts.simple.master')
@section('title', 'Basic DataTables')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Hotel Rating</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Hotels</li>
    <li class="breadcrumb-item active">Hotel Rating</li>
    @if (checkPermission('create_hotel_rating',10))
    <a href="{{ route('hotels.ratingsMark') }}" class="btn btn-sm btn-primary pull-right">Give Star</a>
        
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
                                        <th>Sl</th>
                                        <th>Hotel Name</th>
                                        <th>Rating</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($data) > 0)
                                        @foreach ($data as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->hotel->name }}</td>
                                                <td>
                                                    @for ($i = 0; $i < $row->star; $i++)
                                                        <i class="fa fa-star"></i>
                                                    @endfor
                                                </td>
                                                <td>
                                                    @if (checkPermission('edit_hotel_rating',11))
                                                    <a href="{{ route('hotels.editHotelRating',$row->id) }}" class="btn btn-primary">Edit</a>
                                                        
                                                    @else
                                                        
                                                    @endif
                                                   
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <p>No Ratings given to any hotel</p>
                                    @endif

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Default ordering (sorting) Ends-->

        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
@endsection
