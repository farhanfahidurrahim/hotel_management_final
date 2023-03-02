@extends('layouts.simple.master')
@section('title', 'Basic DataTables')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Hotel Booked</h3>
@endsection

@section('breadcrumb-items')

    @if (checkPermission('create_hotel_booking', 13))
        <a href="{{ route('booking.create') }}" class="btn btn-danger">Hotel Booking Create</a>
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
                        @if ($success = \Session::get('success'))
                            <div class="alert alert-success">{{ $success }}</div>
                        @endif
                        <div class="table-responsive">
                            <table class="display dataTable" id="basic-3">
                                <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>Customer Name</th>
                                        <th>Customer Phone</th>
                                        <th>Hotel Name</th>
                                        <th>Room Title</th>
                                        <th>Check-in</th>
                                        <th>Check-out</th>
                                        <th>Distance</th>
                                        <th>Original Price</th>
                                        <th>Discount(%)</th>
                                        <th>Final Price</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $row)
                                        <tr>
                                            <td>
                                                @if (checkPermission('booking_status', 16))
                                                    <div class="dropdown">
                                                        <button class="btn btn-warning dropdown-toggle" type="button"
                                                            id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            @if ($row->status == 0)
                                                                Pending
                                                            @elseif ($row->status == 1)
                                                                Booked
                                                            @else
                                                                Rejected
                                                            @endif
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            @if ($row->status == 0)
                                                                {{-- if pending --}}
                                                                <li><a class="dropdown-item"
                                                                        href="{{ route('statusupdate', ['id' => $row->id, 'status' => '1']) }}">Booked</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="{{ route('statusupdate', ['id' => $row->id, 'status' => '2']) }}">Rejected</a>
                                                                </li>
                                                            @elseif ($row->status == 1)
                                                                {{-- if Booked --}}
                                                                <li><a class="dropdown-item"
                                                                        href="{{ route('statusupdate', ['id' => $row->id, 'status' => '0']) }}">Pending</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="{{ route('statusupdate', ['id' => $row->id, 'status' => '2']) }}">Rejected</a>
                                                                </li>
                                                            @elseif ($row->status == 2)
                                                                <li><a class="dropdown-item"
                                                                        href="{{ route('statusupdate', ['id' => $row->id, 'status' => '1']) }}">Booked</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="{{ route('statusupdate', ['id' => $row->id, 'status' => '0']) }}">Pending</a>
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                @else
                                                    @if ($row->status == 0)
                                                        <span class="badge badge-primary">Pending</span>
                                                    @elseif ($row->status == 1)
                                                        <span class="badge badge-success">Booked</span>
                                                    @else
                                                        <span class="badge badge-danger">Rejected</span>
                                                    @endif
                                                @endif


                                            </td>
                                            <td>{{ $row->username->name }}</td>
                                            <td>{{ $row->customer_phone }}</td>
                                            <td>{{ $row->hotel->name }}</td>
                                            <td>{{ $row->hotelroom->title }}</td>
                                            <td>{{ $row->check_in }}</td>
                                            <td>{{ $row->check_out }}</td>
                                            <td>{{ $row->distance }}</td>
                                            <td>{{ $row->hotelroom->price }}</td>
                                            <td>{{ $row->hotelroom->discount }}</td>
                                            <td>{{ $row->hotelroom->discount_price }}</td>

                                            <td class="d-flex">
                                                @if (checkPermission('edit_hotel_booking', 14))
                                                    <a class="btn btn-primary btn-sm"
                                                        href="{{ route('booking.edit', $row->id) }}">Edit</a>
                                                @else
                                                @endif
                                                @if (checkPermission('delete_hotel_booking', 15))
                                                    <form class="px-3"
                                                        onclick="return confirm('Are you sure you want to delete this contact?')"
                                                        method="POST" action="{{ route('booking.delete', $row->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                @else
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach
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
