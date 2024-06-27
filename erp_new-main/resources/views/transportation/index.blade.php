@extends('main')
@section('content')
    <div class="card card-custom" style="box-shadow: none">
        <div class="card-header flex-wrap border-0 pt-0 pb-0">
            <div class="card-title">
                <h3 class="card-label">
                    Transportation List
                </h3>
            </div>
            <div class="card-toolbar">
                <button data-toggle="modal" data-target="#addCertificationModel"
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
                        <th class="pl-7"><span class="text-dark-75">Name</span></th>
                        <th class="pl-7"><span class="text-dark-75">Contact No.</span></th>
                        <th class="pl-7"><span class="text-dark-75">Address</span></th>
                        <th class="pl-7"><span class="text-dark-75">GST No.</span></th>
                        <th class="pl-7"><span class="text-dark-75">Remark</span></th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($transportations))
                        @foreach ($transportations as $key => $transportation)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $transportation->name }}</td>
                                <td>{{ $transportation->contact }}</td>
                                <td>{{ $transportation->address }}</td>
                                <td>{{ $transportation->gst }}</td>
                                <td>{{ $transportation->remark }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('transportation.edit', $transportation->id) }}"
                                        class="btn btn-warning btn-sm btn-clean btn-icon" title="Edit details">
                                        <i class="la la-edit"></i>
                                    </a>
                                    {{ html()->form('DELETE', '/transportation/' . $transportation->id)->open() }}
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

    <div class="modal fade" id="addCertificationModel" tabindex="-1" role="dialog"
        aria-labelledby="addCertificationModelLabel" aria-hidden="true">
        {{ html()->form('POST', '/transportation')->open() }}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Transportation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-12">
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control" id="name" autocomplete="off"
                                placeholder="Enter Name" value="{{ old('name') }}" required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label>Contact No:</label>
                            <input type="text" name="contact" class="form-control" id="contact" autocomplete="off"
                                placeholder="Enter Contact No" value="{{ old('name') }}" required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label>Address:</label>
                            <input type="text" name="address" class="form-control" id="address" autocomplete="off"
                                placeholder="Enter Address" value="{{ old('name') }}" required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label>GST No.:</label>
                            <input type="text" name="gst" class="form-control" id="gst" autocomplete="off"
                                placeholder="Enter GST No." value="{{ old('name') }}" required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <label>Remark:</label>
                            <input type="text" name="remark" class="form-control" id="remark" autocomplete="off"
                                placeholder="Enter Remark" value="{{ old('name') }}" required />
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
    <script src="assets/js/datatables/certifications.js"></script>
@endpush
