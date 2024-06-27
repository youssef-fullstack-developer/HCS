@extends('main')
@section('content')
    {{ html()->form('POST', '/consignee')->open() }}
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom " id="kt_page_sticky_card">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            Add Sales Order
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
                            <label>Invoice Type:</label>
                            <select name="state" class="form-control">
                                <option value="">Select Invoice Type</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Contract Type:</label>
                            <select name="state" class="form-control">
                                <option value="">Select Contract Type</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Order Route:</label>
                            <select name="city" class="form-control">
                                <option value="">Select Order Route</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4">
                            <label>Order Date:</label>
                            <input type="date" name="address" class="form-control" id="address" autocomplete="off"
                                placeholder="Enter Order Date" value="{{ old('address') }}" />
                        </div>

                        <div class="col-4">
                            <label>PO No:</label>
                            <input type="text" name="gstn" class="form-control" id="gstn" autocomplete="off"
                                placeholder="Enter PO No" value="{{ old('gstn') }}" />
                        </div>

                        <div class="col-4">
                            <label>PO Date:</label>
                            <input type="date" name="pin" class="form-control" id="pin" autocomplete="off"
                                placeholder="Enter PO Date" value="{{ old('pin') }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Buyer Name:</label>
                            <select name="city" class="form-control">
                                <option value="">Select Buyer Name</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Address:</label>
                            <input type="text" name="pan" class="form-control" id="pan" autocomplete="off"
                                placeholder="Enter Address" value="{{ old('pan') }}" />
                        </div>

                        <div class="col-4">
                            <label>Tax ID No.:</label>
                            <input type="text" name="pan" class="form-control" id="pan" autocomplete="off"
                                placeholder="Enter Tax ID No." value="{{ old('pan') }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Sourcing Executive:</label>
                            <select name="city" class="form-control">
                                <option value="">Select Sourcing Executive</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Ship To:</label>
                            <select name="city" class="form-control">
                                <option value="">Select Ship To</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Ship to Address:</label>
                            <input type="text" name="pan" class="form-control" id="pan" autocomplete="off"
                                placeholder="Enter Ship to Address" value="{{ old('pan') }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Tax ID No.:</label>
                            <input type="text" name="pan" class="form-control" id="pan" autocomplete="off"
                                placeholder="Enter Tax ID No." value="{{ old('pan') }}" />
                        </div>

                        <div class="col-4">
                            <label>Sales Contract No.:</label>
                            <input type="text" name="pan" class="form-control" id="pan" autocomplete="off"
                                placeholder="Enter Sales Contract No." value="{{ old('pan') }}" />
                        </div>

                        <div class="col-4">
                            <label>Agent / Broker:</label>
                            <select name="city" class="form-control">
                                <option value="">Select Agent / Broker</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Agent Percent:</label>
                            <input type="text" name="pan" class="form-control" id="pan" autocomplete="off"
                                placeholder="Enter Agent Percent" value="{{ old('pan') }}" />
                        </div>

                        <div class="col-4">
                            <label>Port of Loading:</label>
                            <input type="text" name="pan" class="form-control" id="pan" autocomplete="off"
                                placeholder="Enter Port of Loading" value="{{ old('pan') }}" />
                        </div>

                        <div class="col-4">
                            <label>Port of Destination:</label>
                            <input type="text" name="pan" class="form-control" id="pan" autocomplete="off"
                                placeholder="Enter Port of Destination" value="{{ old('pan') }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Insurance:</label>
                            <input type="text" name="pan" class="form-control" id="pan" autocomplete="off"
                                placeholder="Enter Insurance" value="{{ old('pan') }}" />
                        </div>

                        <div class="col-4">
                            <label>Shipping Method:</label>
                            <select name="city" class="form-control">
                                <option value="">Select Shipping Method</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Shipping Terms:</label>
                            <select name="city" class="form-control">
                                <option value="">Select Shipping Terms</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Shipping Terms Detail:</label>
                            <input type="text" name="pan" class="form-control" id="pan" autocomplete="off"
                                placeholder="Enter Shipping Terms Detail" value="{{ old('pan') }}" />
                        </div>

                        <div class="col-4">
                            <label>Bank:</label>
                            <select name="city" class="form-control">
                                <option value="">Select Bank</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Container Size:</label>
                            <select name="city" class="form-control">
                                <option value="">Select Container Size</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Payment Terms:</label>
                            <select name="city" class="form-control">
                                <option value="">Select Payment Terms</option>
                            </select>
                        </div>


                        <div class="col-4">
                            <label>Terms & Conditions:</label>
                            <select name="city" class="form-control">
                                <option value="">Select Terms & Conditions</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>User:</label>
                            <select name="city" class="form-control">
                                <option value="">Select User</option>
                            </select>
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
