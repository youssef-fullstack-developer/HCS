@extends('main')
@section('content')
    <div class="card card-custom" style="box-shadow: none">
        <div class="card-header flex-wrap border-0 pt-0 pb-0">
            <div class="card-title">
                <h3 class="card-label">
                    Sizing Reconciliation Report
                </h3>
            </div>
        </div>
        <hr>
        <div class="card-body">
            <table class="table table-bordered table-hover" id="table_invoice_settings">
                <thead>
                    <tr class="text-uppercase">
                        <th>SL NO</th>
                        <th class="pl-7"><span class="text-dark-75">DATE</span></th>
                        <th class="pl-7"><span class="text-dark-75">SET NO.</span></th>
                        <th class="pl-7"><span class="text-dark-75">SIZING NAME</span></th>
                        <th class="pl-7"><span class="text-dark-75">COUNT</span></th>
                        <th class="pl-7"><span class="text-dark-75">MILL NAME</span></th>
                        <th class="pl-7"><span class="text-dark-75">TOTAL ENDS</span></th>
                        <th class="pl-7"><span class="text-dark-75">BAG</span></th>
                        <th class="pl-7"><span class="text-dark-75">CONE</span></th>
                        <th class="pl-7"><span class="text-dark-75">WEIGHT</span></th>
                        <th class="pl-7"><span class="text-dark-75">MEASURE GIVEN</span></th>
                        <th class="pl-7"><span class="text-dark-75">TARA</span></th>
                        <th class="pl-7"><span class="text-dark-75">PART</span></th>
                        <th class="pl-7"><span class="text-dark-75">BILL</span></th>
                        <th class="pl-7"><span class="text-dark-75">WEAVER NAME</span></th>
                        <th class="pl-7"><span class="text-dark-75">AGEING</span></th>
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
