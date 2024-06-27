@extends('main')
@section('content')
    {{ html()->form('POST', '/consignee')->open() }}
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom " id="kt_page_sticky_card">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            Add Jobwork Weaving Contract
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
                            <label>Contract Type:</label>
                            <select name="state" class="form-control">
                                <option value="">Select Contract Type</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Vendor Group:</label>
                            <select name="state" class="form-control">
                                <option value="">Select Vendor Group</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Contract No:</label>
                            <input type="text" name="address" class="form-control" id="address" autocomplete="off"
                                placeholder="Enter Contract No." value="{{ old('address') }}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4">
                            <label>Contract Year:</label>
                            <input type="text" name="address" class="form-control" id="address" autocomplete="off"
                                placeholder="Enter Contract Year" value="{{ old('address') }}" />
                        </div>

                        <div class="col-4">
                            <label>Contract Number:</label>
                            <input type="text" name="gstn" class="form-control" id="gstn" autocomplete="off"
                                placeholder="Enter Contract Number" value="{{ old('gstn') }}" />
                        </div>

                        <div class="col-4">
                            <label>Contract Date:</label>
                            <input type="date" name="pin" class="form-control" id="pin" autocomplete="off"
                                placeholder="Enter Contract Date" value="{{ old('pin') }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Sort No:</label>
                            <select name="state" class="form-control">
                                <option value="">Select Sort No</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Pick Rate:</label>
                            <input type="text" name="pan" class="form-control" id="pan" autocomplete="off"
                                placeholder="Enter Pick Rate" value="{{ old('pan') }}" />
                        </div>

                        <div class="col-4">
                            <label>Merchandiser:</label>
                            <select name="state" class="form-control">
                                <option value="">Select Merchandiser</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Delivery Date:</label>
                            <input type="date" name="pan" class="form-control" id="pan" autocomplete="off"
                                placeholder="Enter Delivery Date" value="{{ old('pan') }}" />
                        </div>

                        <div class="col-4">
                            <label>Inspection Type:</label>
                            <select name="state" class="form-control">
                                <option value="">Select Inspection Type</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Payment Terms:</label>
                            <select name="state" class="form-control">
                                <option value="">Select Payment Terms</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Wastage:</label>
                            <input type="date" name="pan" class="form-control" id="pan" autocomplete="off"
                                placeholder="Enter Wastage" value="{{ old('pan') }}" />
                        </div>

                        <div class="col-4">
                            <label>Packing Type:</label>
                            <select name="state" class="form-control">
                                <option value="">Select Packing Type</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Production Meters:</label>
                            <input type="date" name="pan" class="form-control" id="pan" autocomplete="off"
                                placeholder="Enter Production Meters" value="{{ old('pan') }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Vendor Name:</label>
                            <select name="state" class="form-control">
                                <option value="">Select Vendor Name</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Quality:</label>
                            <textarea name="state" class="form-control"></textarea>
                        </div>

                        <div class="col-4">
                            <label>Loom Type:</label>
                            <select name="state" class="form-control">
                                <option value="">Select Loom Type</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Quality:</label>
                            <input type="text" name="state" class="form-control" placeholder="Picks" />
                        </div>

                        <div class="col-4">
                            <label>Agent:</label>
                            <select name="state" class="form-control">
                                <option value="">Select Agent</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Remarks 1:</label>
                            <textarea name="state" class="form-control"></textarea>
                        </div>
                    </div>

                    <h1>Details</h1>
                    <button class="btn btn-primary">Order Details</button>

                    <div class="form-group row mt-3">
                        <div class="col-12">
                            <table class="table-hover table table-bordered">
                                <tr>
                                    <th>Order No.</th>
                                    <th>Order Quantity</th>
                                    <th>Balance Quantity</th>
                                    <th>Planned Quantity</th>
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
