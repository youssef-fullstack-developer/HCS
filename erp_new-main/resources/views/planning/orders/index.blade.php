@extends('main')
@section('content')
    <div class="card card-custom" style="box-shadow: none">
        <div class="card-header flex-wrap border-0 pt-0 pb-0">
            <div class="card-title">
                <h3 class="card-label">
                    Certifications List
                </h3>
            </div>
        </div>
        <hr>
        <div class="card-body">
            <table class="table table-bordered table-hover" id="table_invoice_settings">
                <thead>
                    <tr class="text-uppercase">
                        <th>id</th>
                        <th class="pl-7"><span class="text-dark-75">Order Type</span></th>
                        <th class="pl-7"><span class="text-dark-75">Order Date</span></th>
                        <th class="pl-7"><span class="text-dark-75">Order No</span></th>
                        <th class="pl-7"><span class="text-dark-75">Sort No</span></th>
                        <th class="pl-7"><span class="text-dark-75">Quality</span></th>
                        <th class="pl-7"><span class="text-dark-75">Party Name</span></th>
                        <th class="pl-7"><span class="text-dark-75">Quantity</span></th>
                        <th class="pl-7"><span class="text-dark-75">Delivery Date</span></th>
                        <th class="pl-7"><span class="text-dark-75">Yarn Require</span></th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($certifications))
                        @foreach ($certifications as $key => $certification)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $certification->name }}</td>
                                <td>{{ $certification->status }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('certification.edit', $certification->id) }}"
                                        class="btn btn-warning btn-sm btn-clean btn-icon" title="Edit details">
                                        <i class="la la-edit"></i>
                                    </a>
                                    {{ html()->form('DELETE', '/certification/' . $certification->id)->open() }}
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
        {{ html()->form('POST', '/certification')->open() }}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Certification</h5>
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
    <script src="assets/js/datatables/certifications.js"></script>
@endpush
