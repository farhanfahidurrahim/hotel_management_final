@extends('layouts.simple.master')
@section('title', 'Base Inputs')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Create Booking</h3>
@endsection


@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Book A Hotel Room</h5>
                        <a href="{{ route('booking.index') }}" class="" style="float: right;">All Booking List</a>
                    </div>
                    <form class="form theme-form" method="POST" action="{{ route('booking.store') }}">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col">

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Customer Phone</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="customer_phone"
                                                id="customer_phone" placeholder="Search Customer Phone..." required>
                                            <div id="customer_list"></div>
                                        </div>
                                    </div>

                                    {{-- <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Customer Name</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" name="customer_name" id="customer_name">
									</div>
								</div> --}}

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Customer Name</label>
                                        <div class="col-sm-9">
                                            <select class="custom-select form-select" name="user_id" id="customer_name"
                                                required>

                                            </select>
                                        </div>
                                    </div>


                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Select Hotel & Room</label>
                                        <div class="col-sm-9">
                                            <select class="custom-select form-select" name="room_id" id="hotelroom"
                                                required>
                                                <option selected disabled value="">Open this select hotel</option>
                                                @foreach ($hotel as $row)
                                                    @php
                                                        $hotelroom = DB::table('hotelrooms')
                                                            ->where('hotel_id', $row->id)
                                                            ->get();
                                                    @endphp
                                                    <option disabled style="color: red">{{ $row->name }}</option>
                                                    @foreach ($hotelroom as $row)
                                                        <option value="{{ $row->id }}">---{{ $row->title }}</option>
                                                    @endforeach
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Original Price</label>
                                        <div class="col-sm-9">
                                            <select class="custom-select form-select" name="original_price"
                                                id="original_price" required>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Discount (%)</label>
                                        <div class="col-sm-9">
                                            <select class="custom-select form-select" name="discount" id="discount"
                                                required>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Final Price</label>
                                        <div class="col-sm-9">
                                            <select class="custom-select form-select" name="final_price" id="final_price"
                                                required>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Check In</label>
                                        <div class="col-sm-9">
                                            <input class="form-control digits" name="check_in"
                                                id="example-datetime-local-input" type="date" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Check Out</label>
                                        <div class="col-sm-9">
                                            <input class="form-control digits" name="check_out"
                                                id="example-datetime-local-input" type="date" required>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Distance</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="distance"
                                                placeholder="Distance" required>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Select Status</label>
                                        <div class="col-sm-9">
                                            <select name="status" class="custom-select form-select" required>
                                                <option selected="" disabled value="">Open this select menu
                                                </option>
                                                <option value="0">Pending</option>
                                                <option value="1">Booked</option>
                                                <option value="2">Rejected</option>
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


    <script>
        //Ajax for Customer Phone
        $(document).ready(function() {
            $("#customer_phone").on('keyup', function() {
                var value = $(this).val();
                $.ajax({
                    url: "{{ route('booking.create') }}",
                    type: "GET",
                    data: {
                        'customer_phone': value
                    },
                    success: function(data) {
                        $("#customer_list").html(data);
                    }
                })
            });

            $(document).on('click', 'li', function() {
                var value = $(this).text();
                $('#customer_phone').val(value);
                $("#customer_list").html("");
            });

        });

        //ajax request : collect customer name
        $("#customer_phone").change(function() {
            var id = $(this).val();
            //alert(id);
            $.ajax({
                url: "{{ url('/get-customer-name/') }}/" + id,
                type: 'get',
                success: function(data) {
                    $('select[name="user_id"]').empty();
                    $.each(data, function(key, data) {
                        $('select[name="user_id"]').append('<option value="' + data.id + '">' +
                            data.name + '</option>');
                    });
                }
            });
        });

        //ajax request : collect hotel room original price
        $("#hotelroom").change(function() {
            var id = $(this).val();
            //alert(id);
            $.ajax({
                url: "{{ url('/get-hotel-original-price/') }}/" + id,
                type: 'get',
                success: function(data) {
                    $('select[name="original_price"]').empty();
                    $.each(data, function(key, data) {
                        $('select[name="original_price"]').append('<option value="' + data.id +
                            '">' + data.price + '</option>');
                    });
                }
            });
        });

        //ajax request : collect hotel room discount price
        $("#hotelroom").change(function() {
            var id = $(this).val();
            //alert(id);
            $.ajax({
                url: "{{ url('/get-hotel-discount-price/') }}/" + id,
                type: 'get',
                success: function(data) {
                    $('select[name="discount"]').empty();
                    $.each(data, function(key, data) {
                        $('select[name="discount"]').append('<option value="' + data.id + '">' +
                            data.discount + '</option>');
                    });
                }
            });
        });

        //ajax request : collect hotel room final price
        $("#hotelroom").change(function() {
            var id = $(this).val();
            //alert(id);
            $.ajax({
                url: "{{ url('/get-hotel-final-price/') }}/" + id,
                type: 'get',
                success: function(data) {
                    $('select[name="final_price"]').empty();
                    $.each(data, function(key, data) {
                        $('select[name="final_price"]').append('<option value="' + data.id +
                            '">' + data.discount_price + '</option>');
                    });
                }
            });
        });
    </script>


@endsection

@section('script')
@endsection
