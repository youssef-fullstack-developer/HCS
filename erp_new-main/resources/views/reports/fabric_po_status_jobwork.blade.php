@extends('main')
@section('content')
    <div class="card card-custom" style="box-shadow: none">
        <div class="card-header flex-wrap border-0 pt-0 pb-0">
            <div class="card-title">
                <h3 class="card-label">
                    FABRIC PO STATUS (JOBWORK)
                </h3>
            </div>
        </div>
        <hr>
        <div class="card-body">
            <table class="table table-bordered table-hover" id="table_invoice_settings">
                <thead>
                    <tr class="text-uppercase">
                        <th>SL NO</th>
                        <th class="pl-7"><span class="text-dark-75">BOOKING DATE</span></th>
                        <th class="pl-7"><span class="text-dark-75">PO DATE</span></th>
                        <th class="pl-7"><span class="text-dark-75">PO NO.</span></th>
                        <th class="pl-7"><span class="text-dark-75">VENDOR GROUP</span></th>
                        <th class="pl-7"><span class="text-dark-75">AGENT</span></th>
                        <th class="pl-7"><span class="text-dark-75">SORT</span></th>
                        <th class="pl-7"><span class="text-dark-75">QUALITY</span></th>
                        <th class="pl-7"><span class="text-dark-75">PER PICK RATE (PAISE)</span></th>
                        <th class="pl-7"><span class="text-dark-75">RATE (EXCL. GST)</span></th>
                        <th class="pl-7"><span class="text-dark-75">INCO TERM</span></th>
                        <th class="pl-7"><span class="text-dark-75">PAYMENT TERM</span></th>
                        <th class="pl-7"><span class="text-dark-75">ORDER QUANTITY</span></th>
                        <th class="pl-7"><span class="text-dark-75">RECEIVED QUANTITY</span></th>
                        <th class="pl-7"><span class="text-dark-75">BALANCE QUANTITY</span></th>
                        <th class="pl-7"><span class="text-dark-75">DELIVERY DATE</span></th>
                        <th class="pl-7"><span class="text-dark-75">INV. NO.</span></th>
                        <th class="pl-7"><span class="text-dark-75">INV. DATE</span></th>
                        <th class="pl-7"><span class="text-dark-75">RECEIVED QUANTITY</span></th>
                        <th class="pl-7"><span class="text-dark-75">GRN NO.</span></th>
                        <th class="pl-7"><span class="text-dark-75">GRN DATE</span></th>
                        <th class="pl-7"><span class="text-dark-75">TRANSPORT/ COURIER</span></th>
                        <th class="pl-7"><span class="text-dark-75">LR/ AWB NO.</span></th>
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
