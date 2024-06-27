@extends('main')
@section('content')
    {{ html()->form('POST', '/consignee')->open() }}
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom " id="kt_page_sticky_card">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            Add Jobwork Weaving Contract Issue
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <a href="{{ route('consignee.index') }}" class="btn btn-light-primary font-weight-bolder mr-2">
                            <i class="ki ki-long-arrow-back icon-sm"></i>
                            Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-4">
                            <label>Jobwork No:</label>
                            <select name="state" class="form-control">
                                <option value="">Select Jobwork No.</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Quality:</label>
                        </div>

                        <div class="col-4">
                            <label>Issue Date:</label>
                            <input type="date" name="address" class="form-control" id="address" autocomplete="off"
                                placeholder="Enter Issue Date" value="{{ old('address') }}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4">
                            <label>Sort No.:</label>
                            {{-- <input type="text" name="address" class="form-control" id="address" autocomplete="off"
                                placeholder="Enter Contract Year" value="{{ old('address') }}" /> --}}
                        </div>

                        <div class="col-4">
                            <label>Vendor Group:</label>
                            {{-- <input type="text" name="gstn" class="form-control" id="gstn" autocomplete="off"
                                placeholder="Enter Contract Number" value="{{ old('gstn') }}" /> --}}
                        </div>

                        <div class="col-4">
                            <label>Gate Pass No.:</label>
                            {{-- <input type="date" name="pin" class="form-control" id="pin" autocomplete="off"
                                placeholder="Enter Contract Date" value="{{ old('pin') }}" /> --}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Receiving Person:</label>
                            <input type="text" name="pan" class="form-control" id="pan" autocomplete="off"
                                placeholder="Enter Receiving Person" value="{{ old('pan') }}" />
                        </div>

                        <div class="col-4">
                            <label>Vehical No.:</label>
                            <input type="text" name="pan" class="form-control" id="pan" autocomplete="off"
                                placeholder="Enter Vehical No" value="{{ old('pan') }}" />
                        </div>

                        <div class="col-4">
                            <label>DC No.:</label>
                            <input type="text" name="pan" class="form-control" id="pan" autocomplete="off"
                                placeholder="Enter DC No." value="{{ old('pan') }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Transport:</label>
                            <select name="state" class="form-control">
                                <option value="">Select Transport</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Vendor:</label>
                            <select name="state" class="form-control">
                                <option value="">Select Vendor</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <div class="col-12">
                            <table class="table-hover table table-bordered">
                                <tr>
                                    <th>SL No.</th>
                                    <th>Quality</th>
                                    <th>Beam Meter</th>
                                    <th>Total Quantity</th>
                                    <th>Issued Quantity</th>
                                    <th>Convertion Value</th>
                                    <th>Balance Quantity</th>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <h1>Weft Yarn Issue Detail</h1>
                    <button class="btn btn-primary">Yarn Issue</button>

                    <div class="form-group row mt-5">
                        <div class="col-12">
                            <table class="table-hover table table-bordered">
                                <tr>
                                    <th>Actual Count</th>
                                    <th>Location</th>
                                    <th>Type</th>
                                    <th>Cone Tip Color</th>
                                    <th>Lot Num</th>
                                    <th>Item</th>
                                    <th>Mill</th>
                                    <th>Stock Receipt No</th>
                                    <th>Available Quantity</th>
                                    <th>Available Bags</th>
                                    <th>No of Bags Issue</th>
                                    <th>KG Per Bag</th>
                                    <th>Issued Cones</th>
                                    <th>Issued Quantity</th>
                                    <th>Conversation Value</th>
                                    <th>Action</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary font-weight-bolder">
                        <i class="ki ki-check icon-sm"></i>
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{ html()->form()->close() }}
@endsection
