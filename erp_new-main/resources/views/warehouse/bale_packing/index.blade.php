@extends('main')
@section('content')
    <div class="card card-custom" style="box-shadow: none">
        <div class="card-header flex-wrap border-0 pt-0 pb-0">
            <div class="card-title">
                <h3 class="card-label">
                    Bale Packing List
                </h3>
            </div>
        </div>
        <hr>
        <div class="card-body">
            <table class="table table-bordered table-hover" id="table_invoice_settings">
                <thead>
                    <tr class="text-uppercase">
                        <th>id</th>
                        <th class="pl-7"><span class="text-dark-75">Packaging Slip No.</span></th>
                        <th class="pl-7"><span class="text-dark-75">Bale / Roll Manual No</span></th>
                        <th class="pl-7"><span class="text-dark-75">Piece No.</span></th>
                        <th class="pl-7"><span class="text-dark-75">Order No.</span></th>
                        <th class="pl-7"><span class="text-dark-75">Sort No.</span></th>
                        <th class="pl-7"><span class="text-dark-75">Quality</span></th>
                        <th class="pl-7"><span class="text-dark-75">Location</span></th>
                        <th class="pl-7"><span class="text-dark-75">Buyer</span></th>
                        <th class="pl-7"><span class="text-dark-75">No of Pieces</span></th>
                        <th class="pl-7"><span class="text-dark-75">Piece Meters</span></th>
                        <th class="pl-7"><span class="text-dark-75">Yard Meters</span></th>
                        <th class="pl-7"><span class="text-dark-75">Net Weight</span></th>
                        <th class="pl-7"><span class="text-dark-75">GSM</span></th>
                        <th class="pl-7"><span class="text-dark-75">Grade</span></th>
                        <th class="pl-7"><span class="text-dark-75">Rack Location</span></th>
                        <th class="pl-7"><span class="text-dark-75">Date</span></th>
                        <th class="pl-7"><span class="text-dark-75">Action</span></th>
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
@endsection

@push('scripts')
    <script src="assets/custom/datatables/datatables.bundle.js"></script>
    <script src="assets/js/datatables/certifications.js"></script>
@endpush
