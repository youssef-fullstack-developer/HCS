@extends('main')
@section('content')
    {{ html()->form('POST', '/consignee')->open() }}
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom " id="kt_page_sticky_card">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            Add Jobwork Process Contract Issue
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
                            <label>Jobwork Process No:</label>
                            <select name="date" class="form-control">
                                <option value="">Select</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Vendor Name:</label>
                            <input type="text" name="gstn" class="form-control" id="gstn" autocomplete="off"
                                placeholder="Enter Contract Number" value="{{ old('gstn') }}" />
                        </div>

                        <div class="col-4">
                            <label>Issue Date:</label>
                            <input type="date" name="gstn" class="form-control" id="gstn" autocomplete="off"
                                placeholder="Enter Issue Date" value="{{ old('gstn') }}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4">
                            <label>Transport:</label>
                            <select name="date" class="form-control">
                                <option value="">Select Transport</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Lr No:</label>
                            <input type="text" name="gstn" class="form-control" id="gstn" autocomplete="off"
                                placeholder="Enter Lr No." value="{{ old('gstn') }}" />
                        </div>

                        <div class="col-4">
                            <label>Lr Date:</label>
                            <input type="date" name="pin" class="form-control" id="pin" autocomplete="off"
                                placeholder="Enter Lr Date" value="{{ old('pin') }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Internal Lot No:</label>
                            <input type="text" name="pin" class="form-control" id="pin" autocomplete="off"
                                placeholder="Enter Internal Lot No" value="{{ old('pin') }}" />
                        </div>

                        <div class="col-4">
                            <label>Vendor Lot No:</label>
                            <input type="text" name="pin" class="form-control" id="pin" autocomplete="off"
                                placeholder="Enter Vendor Lot No" value="{{ old('pin') }}" />
                        </div>

                        <div class="col-4">
                            <label>Fabric Type:</label>
                            <select name="state" class="form-control">
                                <option value="">Select Fabric Type</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Mode of Shipment:</label>
                            <select name="state" class="form-control">
                                <option value="">Select Mode of Shipment</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Vehical No:</label>
                            <input type="date" name="pan" class="form-control" id="pan" autocomplete="off"
                                placeholder="Enter Vehical No" value="{{ old('pan') }}" />
                        </div>

                        <div class="col-4">
                            <label>Issue Type:</label>
                            <select name="state" class="form-control">
                                <option value="">Select Issue Type</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <div class="col-12">
                            <table class="table-hover table table-bordered">
                                <tr>
                                    <th>SL No.</th>
                                    <th>Quality</th>
                                    <th>Grey Quality</th>
                                    <th>Total Quantity</th>
                                    <th>Issued Quantity</th>
                                    <th>Balance Quantity</th>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <div class="col-12">
                            <table class="table-hover table table-bordered">
                                <tr>
                                    <th>Total Quantity</th>
                                    <th>Total Issued Quantity</th>
                                    <th>Total Balance Quantity</th>
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
