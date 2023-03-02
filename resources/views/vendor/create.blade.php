@extends('layouts.simple.master')
@section('title', 'Base Inputs')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Create Vendor</h3>
@endsection


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form class="form theme-form" action="{{ route('vendor.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h5>Enter Vendor Info</h5>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col">

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="name" placeholder="Name">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Phone</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="phone" placeholder="Phone">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="email" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="password" name="password" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Upload Photo</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="file" name="image">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Address</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="address" placeholder="Address">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 text-center">
                                    MANAGE PERMISSION
                                </h5>
                            </div>

                            <div class="collapse show" id="collapseicon2" data-bs-parent="#accordion"
                                aria-labelledby="collapseicon2">
                                <div class="card-body animate-chk">
                                    <div class="row">
                                        <div class="auth-module">
                                            <p for="" class="header text-center display-6">MANAGE HOTEL</p>
                                            <div class="row">
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]" class="form-check-input"
                                                            id="exampleCheck1" value="create_hotel,1"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck1">CREATE
                                                            HOTEL</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]" class="form-check-input"
                                                            id="exampleCheck2"  value="hotel_list,2"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck2">HOTEL
                                                            LIST</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]" class="form-check-input"
                                                            id="exampleCheck3" value="hotel_delete,3"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck3">DELETE
                                                            HOTEL</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]" class="form-check-input"
                                                            id="exampleCheck4" value="edit_hotel,4"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck4">EDIT HOTEL</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck10" value="create_hotel_room,5"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck10">CREATE HOTEL
                                                            ROOM </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck11" value="room_list,6"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck11">ALL ROOM LIST</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck12" value="edit_room,7"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck12">EDIT ROOM</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck13" value="delete_room,8"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck13">DELETE ROOM</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck14" value="hotel_rating_list,9"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck14">HOTEL RATING LIST
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck15" value="create_hotel_rating,10"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck15">CREATE HOTEL RATING</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck15" value="edit_hotel_rating,11"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck15">EDIT HOTEL RATING</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck21" value="all_hotel_booking_list,12"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck21">SEE BOOKING LISTS</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck21" value="create_hotel_booking,13"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck21">CREATE HOTEL BOOKING</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck25" value="edit_hotel_booking,14"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck25">EDIT HOTEL BOOKING</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck25" value="delete_hotel_booking,15"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck25">DELETE HOTEL BOOKING</label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck25" value="booking_status,16"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck25">CHANGE BOOKING STATUS</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="auth-module">
                                            <p for="" class="header text-center display-6">MANAGE RESTAURENT</p>
                                            <div class="row">
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck5" value="see_all_restaurant,17"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck5">SEE ALL RESTAURANTS </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck5" value="create_restaurant,18"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck5">CREATE RESTAURANT </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck6" value="edit_restaurant,19"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck6">EDIT RESTAURANT</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck7" value="delete_restaurant,20"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck7">DELETE RESTAURANT</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck8" value="all_restaurant_menus,21"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck8">ALL RESTAURANT MENU</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck16" value="create_restaurant_menu,22"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck16">CREATE RESTAURANT MENU</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck17" value="edit_restaurant_menu,23"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck17">EDIT RESTAURENT MENU</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck18" value="delete_restaurant_menu,24"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck18">DELETE RESTAURENT MENU </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck19" value="all_restaurant_star,25"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck19">ALL RESTAURENT STAR</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck20" value="create_restaurant_star,26"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck20">CREATE RESTAURENT STAR </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck22" value="edit_restaurant_star,27"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck22">EDIT RESTAURANT STAR</label>
                                                    </div>
                                                </div>
                                                {{-- <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck26" value="edit_restaurant,23"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck26">EDIT
                                                            RESTAURENT</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck27" value="add_restaurant_menu,24"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck27">ADD
                                                            RESTAURANT MENU</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck28" value="restaurant_menu_list,25"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck28">RESTAURANT
                                                            MENU LIST</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck29" value="edit_restaurant_menu,26"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck29">EDIT RESTAURANT MENU</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck30" value="delete_restaurant_menu,27"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck30">DELETE
                                                            RESTAURANT MENU</label>
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck31" value="add_food,27"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck31">ADD
                                                            FOOD</label>
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck32" value="32"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck32">FOOD
                                                            LIST</label>
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck33" value="33"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck33">EDIT
                                                            FOOD</label>
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="col-sm-4 pl-0">
                                                    <div class="form-group form-check ">
                                                        <input type="checkbox" name="auth_items[]"
                                                            class="form-check-input" id="exampleCheck34" value="34"
                                                            style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
                                                        <label class="form-check-label" for="exampleCheck34">DELETE
                                                            FOOD</label>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
										{{-- <div class="auth-module">
											<p for="" class="header text-center display-6">DASHBOARD</p>
											<div class="row">
												<div class="col-sm-4 pl-0">
													<div class="form-group form-check ">
														<input type="checkbox"  class="form-check-input"
															id="exampleCheck9" value="9"
															style="opacity: 1;visibility:visible;position: absolute;left: 24px;top: 2px;">
														<label class="form-check-label" for="exampleCheck9">DASHBOARD</label>
													</div>
												</div>
											</div>
										</div> --}}
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
@endsection

@section('script')
@endsection
