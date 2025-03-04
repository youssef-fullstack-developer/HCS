@extends('main')
@section('content')
    {{ html()->form('POST', '/gst')->open() }}
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom " id="kt_page_sticky_card">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            Add GST
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
                        <div class="col-6 form-group">
                            <label>GST Type:</label>
                            <select name="gst_type" id="gst_type" class="form-control" required onchange="checkFields()">
                                <option value="">Select GST TYPE</option>
                                <option value="1">IGST</option>
                                <option value="2">CGST/SGST</option>
                            </select>
                        </div>

                        <div class="col-6 form-group" id="igst_div" style="display: none">
                            <label>IGST%:</label>
                            <input type="text" name="igst" id="igst" class="form-control"  autocomplete="off"
                                placeholder="Enter IGST%" value="{{ old('igst') }}"  />
                        </div>

                        <div class="col-6 form-group" id="sgst_div" style="display: none">
                            <label>SGST:</label>
                            <input type="text" name="sgst" id="sgst" class="form-control"  autocomplete="off"
                                   placeholder="Enter SGST" value="{{ old('sgst') }}"  />
                        </div>

                        <div class="col-6 form-group" id="cgst_div" style="display: none">
                            <label>CGST:</label>
                            <input type="text" name="cgst" id="cgst" class="form-control"  autocomplete="off"
                                   placeholder="Enter CGST" value="{{ old('cgst') }}"  />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <label>status:</label>
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
@push('scripts')
    <script>
        const checkFields = () => {
            var gst_type = $('#gst_type').val();
            if (gst_type == 1){
                $('#igst_div').css('display', 'block');
                $('#sgst_div').css('display', 'none');
                $('#cgst_div').css('display', 'none');
            }else if (gst_type == 2){
                $('#igst_div').css('display', 'none');
                $('#sgst_div').css('display', 'block');
                $('#cgst_div').css('display', 'block');
            }
        }
    </script>
@endpush
