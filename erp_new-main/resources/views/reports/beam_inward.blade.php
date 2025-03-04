@extends('main')
@section('content')
    <div class="card card-custom" style="box-shadow: none">
        <div class="card-header flex-wrap border-0 pt-0 pb-0">
            <div class="card-title">
                <h3 class="card-label">
                    BEAM INWARD REPORT
                </h3>
            </div>
        </div>
        <hr>
        <div class="card-body">
            <table class="table table-bordered table-hover" id="table_invoice_settings">
                <thead>
                    <tr class="text-uppercase">
                        <th>SL NO</th>
                        <th class="pl-7"><span class="text-dark-75">ENT No</span></th>
                        <th class="pl-7"><span class="text-dark-75">Date</span></th>
                        <th class="pl-7"><span class="text-dark-75">Vendor Group</span></th>
                        <th class="pl-7"><span class="text-dark-75">Quality</span></th>
                        <th class="pl-7"><span class="text-dark-75">Sizing Set No</span></th>
                        <th class="pl-7"><span class="text-dark-75">Load</span></th>
                        <th class="pl-7"><span class="text-dark-75">Beam No</span></th>
                        <th class="pl-7"><span class="text-dark-75">Flange No</span></th>
                        <th class="pl-7"><span class="text-dark-75">Cuts</span></th>
                        <th class="pl-7"><span class="text-dark-75">L2L</span></th>
                        <th class="pl-7"><span class="text-dark-75">Beam Meters</span></th>
                        <th class="pl-7"><span class="text-dark-75">Exp. Meters</span></th>
                        <th class="pl-7"><span class="text-dark-75">Ends</span></th>
                        <th class="pl-7"><span class="text-dark-75">Pick</span></th>
                        <th class="pl-7"><span class="text-dark-75">Rs</span></th>
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
