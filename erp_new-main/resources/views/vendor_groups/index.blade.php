@extends('main')
@section('content')
    <div class="card card-custom" style="box-shadow: none">
        <div class="card-header flex-wrap border-0 pt-0 pb-0">
            <div class="card-title">
                <h3 class="card-label">
                    Vendor Groups List
                </h3>
            </div>
            <div class="card-toolbar">
                <button data-toggle="modal" data-target="#addVendorGroupModel" class="btn btn-primary font-weight-bolder mr-2">
                    <span class="svg-icon svg-icon-md">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <circle fill="#000000" cx="9" cy="15" r="6" />
                                <path
                                    d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                    fill="#000000" opacity="0.3" />
                            </g>
                        </svg>
                    </span> Add
                </button>
            </div>
        </div>
        <hr>
        <div class="card-body">
            <table class="table table-bordered table-hover" id="table_invoice_settings">
                <thead>
                    <tr class="text-uppercase">
                        <th>id</th>
                        <th class="pl-7"><span class="text-dark-75">Group</span></th>
                        <th class="pl-7"><span class="text-dark-75">Group Code</span></th>
                        <th class="pl-7"><span class="text-dark-75">Group Type</span></th>
                        <th class="pl-7"><span class="text-dark-75">Active</span></th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($vendor_groups))
                        @foreach ($vendor_groups as $key => $vendor_group)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $vendor_group->group }}</td>
                                <td>{{ $vendor_group->code }}</td>
                                <td>{{ $vendor_group->group_type }}</td>
                                <td>{{ $vendor_group->status }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('vendor_groups.edit', $vendor_group->id) }}"
                                        class="btn btn-warning btn-sm btn-clean btn-icon" title="Edit details">
                                        <i class="la la-edit"></i>
                                    </a>
                                    {{ html()->form('DELETE', '/vendor_groups/' . $vendor_group->id)->open() }}
                                    <button type="submit" class="btn btn-danger btn-sm btn-clean btn-icon ml-3"
                                        title="Delete">
                                        <i class="la la-trash"></i>
                                    </button>
                                    {{ html()->form()->close() }}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="addVendorGroupModel" tabindex="-1" role="dialog"
        aria-labelledby="addVendorGroupModelLabel" aria-hidden="true">
        {{ html()->form('POST', '/vendor_groups')->open() }}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Vendor Group</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-12">
                            <label>Group:</label>
                            <input type="text" name="group" class="form-control" id="group" autocomplete="off"
                                placeholder="Enter Group" value="{{ old('group') }}" required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label>Group Type:</label>
                            <select name="group_type" class="form-control" id="group_type" value="{{ old('group_type') }}"
                                required>
                                <option>Select Group Type</option>
                                <option value="yarn_supplier">Yarn Supplier</option>
                                <option value="item_supplier">Item Supplier</option>
                                <option value="weaver">Weaver</option>
                                <option value="sizing">Sizing</option>
                                <option value="winding">Winding</option>
                                <option value="buyer">Buyer</option>
                                <option value="fabric_supplier">Fabric Supplier</option>
                                <option value="process_jw">Process JW</option>
                                <option value="all">All</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label>Group Code:</label>
                            <input type="text" name="code" class="form-control" id="group_code" autocomplete="off"
                                placeholder="Enter Group Code" value="{{ old('group_code') }}" required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-6">
                            <label>Internal Group:</label>
                            <div class="col-form-label">
                                <div class="radio-inline">
                                    <label class="radio radio-success">
                                        <input type="radio" name="is_internal" checked="checked" value="1" />
                                        <span></span>
                                        Yes
                                    </label>
                                    <label class="radio radio-danger">
                                        <input type="radio" name="is_internal" value="0" />
                                        <span></span>
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <label>Status:</label>
                            <div class="col-form-label">
                                <div class="radio-inline">
                                    <label class="radio radio-success">
                                        <input type="radio" name="status" checked="checked" value="1" />
                                        <span></span>
                                        Active
                                    </label>
                                    <label class="radio radio-danger">
                                        <input type="radio" name="status" value="0" />
                                        <span></span>
                                        Inactive
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold"
                        data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary font-weight-bold">Save changes</button>
                </div>
            </div>
        </div>
        {{ html()->form()->close() }}
    </div>
@endsection

@push('scripts')
    <script src="assets/custom/datatables/datatables.bundle.js"></script>
    <script src="assets/js/datatables/vendor_groups.js"></script>
@endpush
