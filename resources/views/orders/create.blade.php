@extends('layouts.simple.master')
@section('title', 'Base Inputs')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Restaurant Order</h3>
@endsection


@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>Enter Order Info</h5>
				</div>
				<form class="form theme-form">
					<div class="card-body">
						<div class="row">
							<div class="col">

                <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select User</label>
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
									<label class="col-sm-3 col-form-label">City / Town</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" placeholder="Enter City Name">
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Address 1</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" placeholder="Village name /area name/street City Name">
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Address 2</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" placeholder="Apartment name, floor/ House no">
									</div>
								</div>

                <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select Restaurant</label>
									<div class="col-sm-9">
										<select class="custom-select form-select">
											<option selected="">Open this select menu</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div>
								</div>

                <div class="col-sm-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="display dataTable" id="basic-3">
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Original Price</th>
                              <th>Discount (%)</th>
                              <th>Discount Price</th>
                              <th>QTY</th>
                              <th>Price</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Tiger Nixon</td>
                              <td>System Architect</td>
                              <td>Edinburgh</td>
                              <td>61</td>
                              <td>2011/04/25</td>
                              <td>$320,800</td>
                              <td>$320,800</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Select Restaurent Food</label>
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
								</div>

                <div class="mb-3 row">
									<label class="col-sm-3 col-form-label">QTY</label>
									<div class="col-sm-9">
										<input class="form-control" type="number" placeholder="Location">
									</div>
								</div>


								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Original Price</label>
									<div class="col-sm-9">
										<input class="form-control digits" type="number" step="0.01" placeholder="price" >
									</div>
								</div>

								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Discount</label>
									<div class="col-sm-9">
										<input class="form-control digits" type="number" placeholder="discount" >
									</div>
								</div>


								<div class="mb-3 row">
									<label class="col-sm-3 col-form-label">Discount Price</label>
									<div class="col-sm-9">
										<input class="form-control digits" type="number" step="0.01" placeholder="offer price" >
									</div>
								</div>
                <div class="mb-3 col">
                  <button class="btn btn-primary" type="button"> + </button>
                </div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="text-center">
				<button class="mb-5 btn btn-primary text-center" type="button">Save</button>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection
