@extends('main')
@section('content')
    {{ html()->form('POST', '/consignee')->open() }}
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom " id="kt_page_sticky_card">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            Add Sizing Plan
                        </h3>   
                    </div>
                    <div class="card-toolbar">
                        <a href="{{ route('planning.sizing_plan.index') }}" class="btn btn-light-primary font-weight-bolder mr-2">
                            <i class="ki ki-long-arrow-back icon-sm"></i>
                            Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-4">
                            <label>Sizing For:</label>
                            <select name="date" class="form-control">
                                <option value="">Select Sizing For</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Sizing Name:</label>
                            <select name="date" class="form-control">
                                <option value="">Select Sizing Name</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Planning Date:</label>
                            <input type="date" name="address" class="form-control" id="address" autocomplete="off"
                                placeholder="Enter Planning Date" value="{{ old('address') }}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4">
                            <label>Sizing Amount (Rs / Kg):</label>
                            <input type="text" name="address" class="form-control" id="address" autocomplete="off"
                                placeholder="Enter Sizing Amount (Rs / Kg)" value="{{ old('address') }}" />
                        </div>

                        <div class="col-4">
                            <label>Remarks:</label>
                            <textarea name="date" class="form-control"></textarea>
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
                            <label>Machine No.:</label>
                            <select name="state" class="form-control">
                                <option value="">Select Machine No</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Marchendiser:</label>
                            <select name="state" class="form-control">
                                <option value="">Select Merchandiser</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Ref No:</label>
                            <input type="text" name="address" class="form-control" id="address" autocomplete="off"
                                placeholder="Enter Ref No" value="{{ old('address') }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Beam Receive Date:</label>
                            <input type="date" name="address" class="form-control" id="address" autocomplete="off"
                                placeholder="Enter Beam Receive Date" value="{{ old('address') }}" />
                        </div>

                        <div class="col-4">
                            <label>Vendor:</label>
                            <select name="state" class="form-control">
                                <option value="">Select Vendor</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mt-5">
                        <div class="col-12">
                            <table class="table-hover table table-bordered">
                                <tr>
                                    <th>Yarn</th>
                                    <th>Sort No</th>
                                    <th>Sort Ends</th>
                                    <th>Sizing Ends</th>
                                    <th>Width</th>
                                    <th>Parts</th>
                                    <th>Ends per Parts</th>
                                    <th>DBF</th>
                                    <th>Weave Type</th>
                                    <th>Loom Type</th>
                                    <th>Meters</th>
                                    <th>Warp Meters</th>
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
