@extends('main')
@section('content')
    <div class="card card-custom" style="box-shadow: none">
        <div class="card-header flex-wrap border-0 pt-0 pb-0">
            <div class="card-title">
                <h3 class="card-label">
                    Yarn Type List
                </h3>
            </div>
            <div class="card-toolbar">
                <button data-toggle="modal" data-target="#addInvoiceSettingModal"
                    class="btn btn-primary font-weight-bolder mr-2">
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
                        <th class="pl-7"><span class="text-dark-75">Yarn Type</span></th>
                        <th class="pl-7"><span class="text-dark-75">UOM</span></th>
                        <th class="pl-7"><span class="text-dark-75">Conversion</span></th>
                        <th class="pl-7"><span class="text-dark-75">System</span></th>
                        <th class="pl-7"><span class="text-dark-75">Active</span></th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($types))
                        @foreach ($types as $key => $type)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $type->type }}</td>
                                <td>{{ $type->unit }}</td>
                                <td>{{ $type->factor }}</td>
                                <td>{{ $type->system }}</td>
                                <td>{{ $type->status }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('invoice_settings.edit', $type->id) }}"
                                        class="btn btn-warning btn-sm btn-clean btn-icon" title="Edit details">
                                        <i class="la la-edit"></i>
                                    </a>
                                    {{ html()->form('DELETE', '/invoice_settings/' . $type->id)->open() }}
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

    <div class="modal fade" id="addInvoiceSettingModal" tabindex="-1" role="dialog"
        aria-labelledby="addInvoiceSettingModalLabel" aria-hidden="true">
        {{ html()->form('POST', '/yarn_type')->acceptsFiles()->open() }}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Yarn Type</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-12">
                            <label>Type:</label>
                            <input type="text" name="type" class="form-control" id="type" autocomplete="off"
                                placeholder="Enter Type" value="{{ old('type') }}" required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label>Yarn Unit:</label>
                            <select class="form-control" name="unit" required>
                                <option value="">Select UOM Type</option>
                                @foreach ($uom as $u)
                                    <option value="{{ $u->id }}">{{ $u->code }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label>Conversion Factor:</label>
                            <input type="text" name="factor" class="form-control" id="factor"
                                autocomplete="off" placeholder="Enter Conversion Factor" value="{{ old('factor') }}"
                                required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label>Weight Loss%:</label>
                            <input type="text" name="loss" class="form-control" id="loss"
                                autocomplete="off" placeholder="Enter Weight Loss%" value="{{ old('loss') }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label>System:</label>
                            <select class="form-control" name="system" required>
                                <option value="">Select Type</option>
                                <option value="direct">Direct</option>
                                <option value="indirect">Indirect</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label>Yarn Code:</label>
                            <input type="text" name="code" class="form-control" id="code"
                                autocomplete="off" placeholder="Enter Yarn Code" value="{{ old('code') }}"
                                required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
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
    <script src="assets/js/datatables/invoice_settings.js"></script>
@endpush
