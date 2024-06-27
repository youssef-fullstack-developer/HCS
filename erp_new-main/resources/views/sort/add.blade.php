@extends('main')
@section('content')
    {{ html()->form('POST', '/sort')->open() }}
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom " id="kt_page_sticky_card">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            Add Sort Master
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <a href="{{ route('sort.index') }}" class="btn btn-light-primary font-weight-bolder mr-2">
                            <i class="ki ki-long-arrow-back icon-sm"></i>
                            Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-4">
                            <label>Fabric Type:</label>
                            <select name="fabric" class="form-control">
                                <option value="">Select Fabric Type</option>
                                <option value="finished">Finished</option>
                                <option value="grey">Grey</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Sort No:</label>
                            <input type="text" name="sort_no" class="form-control" id="sort_no" autocomplete="off"
                                placeholder="Enter Sort No" value="{{ old('sort_no') }}" />
                        </div>

                        <div class="col-4">
                            <label>Quality Details:</label>
                            <textarea name="details" class="form-control" id="details">{{ old('details') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4">
                            <label>Weave:</label>
                            <select name="weave" class="form-control">
                                <option value="">Select Weave Type</option>
                                @foreach ($weaves as $weave)
                                    <option value="{{ $weave->id }}">{{ $weave->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Create For:</label>
                            <select name="create_for" class="form-control">
                                <option value="">Select One</option>
                                <option value="domestic">Domestic</option>
                                <option value="export">Export</option>
                                <option value="both">Both</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Sort Code:</label>
                            <input type="number" name="code" class="form-control" id="code" autocomplete="off"
                                placeholder="Enter Sort Code" value="{{ old('code') }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Company:</label>
                            <select name="company" class="form-control">
                                <option value="">Select Company</option>
                                <option value="sez" @if(session('company') == 'sez') selected @endif>SEZ</option>
                                <option value="domestic" @if(session('company') == 'domestic') selected @endif>Domestic</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Numeric Quality:</label>
                            <textarea name="numeric" class="form-control" id="numeric">{{ old('numeric') }}</textarea>
                        </div>

                        <div class="col-4">
                            <label>Yarn Composition:</label>
                            <textarea name="yarn" class="form-control" id="yarn">{{ old('yarn') }}</textarea>
                        </div>
                    </div>

                    <h2 class="text-center">Shade Details</h2>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Reed:</label>
                            <input type="number" name="reed" class="form-control" id="reed" autocomplete="off"
                                placeholder="Enter Reed" value="{{ old('reed') }}" />
                        </div>

                        <div class="col-4">
                            <label>Denting:</label>
                            <input type="number" name="denting" class="form-control" id="denting" autocomplete="off"
                                placeholder="Enter Denting" value="{{ old('denting') }}" />
                        </div>

                        <div class="col-4">
                            <label>On Loom EPI:</label>
                            <input type="number" name="epi" class="form-control" id="epi" autocomplete="off"
                                readonly placeholder="Enter Loom EPI" value="{{ old('epi') }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Width (inches):</label>
                            <input type="number" name="width" class="form-control" id="width" autocomplete="off"
                                placeholder="Enter Width" value="{{ old('width') }}" />
                        </div>

                        <div class="col-4">
                            <label>Extra Width:</label>
                            <input type="number" name="e_width" class="form-control" id="e_width" autocomplete="off"
                                placeholder="Enter Extra Width" value="{{ old('e_width') }}" />
                        </div>

                        <div class="col-4">
                            <label>Reed Space:</label>
                            <input type="number" name="reed_space" class="form-control" id="reed_space"
                                autocomplete="off" placeholder="Enter Reed Space" value="{{ old('reed_space') }}"
                                readonly />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Total Ends:</label>
                            <input type="number" name="total_ends" class="form-control" id="total_ends"
                                autocomplete="off" placeholder="Enter Total Ends" value="{{ old('total_ends') }}"
                                readonly />
                        </div>

                        <div class="col-4">
                            <label>Picks:</label>
                            <input type="number" name="picks" class="form-control" id="picks" autocomplete="off"
                                placeholder="Enter Sort Code" value="{{ old('code') }}" />
                        </div>

                        <div class="col-4">
                            <label>Pick Insert:</label>
                            <input type="number" name="pick_insert" class="form-control" id="code"
                                autocomplete="off" placeholder="Enter Sort Code" value="{{ old('code') }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Width (cm):</label>
                            <input type="number" name="width_cm" class="form-control" id="width_cm"
                                autocomplete="off" placeholder="Enter Width (CM)" value="{{ old('width_cm') }}"
                                readonly />
                        </div>

                        <div class="col-4">
                            <label>Composition:</label>
                            <input type="text" name="composition" class="form-control" id="composition"
                                autocomplete="off" placeholder="Enter Composition" value="{{ old('composition') }}" />
                        </div>

                        <div class="col-4">
                            <label>Size Pick up:</label>
                            <input type="number" name="size" class="form-control" id="size" autocomplete="off"
                                placeholder="Enter Size Pickup" value="{{ old('size') }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Loom Type:</label>
                            <select name="loom_type" class="form-control">
                                <option value="">Select Loom Type</option>
                                @foreach ($loom_types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Selvedge:</label>
                            <select name="selvedge" id="selvedge" class="form-control">
                                <option value="">Select Selvedge</option>
                                @foreach ($selvedge as $s)
                                    <option value="{{ $s->id }}">{{ $s->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-4">
                            <div class="row">
                                <div class="col-6">
                                    <label>Dents:</label>
                                    <input type="text" name="dents" class="form-control" id="dents"
                                        autocomplete="off" placeholder="Dents" value="{{ old('dents') }}" />
                                </div>

                                <div class="col-6">
                                    <label>S Width:</label>
                                    <input type="number" name="s_width" class="form-control" id="s_width"
                                        autocomplete="off" placeholder="Enter S Width" value="{{ old('s_width') }}" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Ends per Dent:</label>
                            <input type="number" name="ends_per_dent" class="form-control" id="ends_per_dent"
                                autocomplete="off" placeholder="Enter Ends per Dent"
                                value="{{ old('ends_per_dent') }}" />
                        </div>

                        <div class="col-4">
                            <label>Selvedge Ends:</label>
                            <input type="text" name="selvedge_ends" class="form-control" id="selvedge_ends"
                                autocomplete="off" placeholder="Enter Selvedge Ends"
                                value="{{ old('selvedge_ends') }}" />
                        </div>

                        <div class="col-4">
                            <label>Ends with Selvedge:</label>
                            <input type="number" name="ends_with_selvedge" class="form-control" id="ends_with_selvedge"
                                autocomplete="off" placeholder="Enter Ends with Selvedge"
                                value="{{ old('ends_with_selvedge') }}" readonly />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Beam Type:</label>
                            <input type="number" name="beam_type" class="form-control" id="beam_type" autocomplete="off"
                                placeholder="Enter Beam Type" value="{{ old('beam_type') }}" />
                        </div>

                        <div class="col-4">
                            <label>Selvedge Drawing:</label>
                            <input type="number" name="selvedge_drawing" class="form-control" id="selvedge_drawing" autocomplete="off"
                                placeholder="Enter Selvedge Drawing" value="{{ old('selvedge_drawing') }}" />
                        </div>

                        <div class="col-4">
                            <label>Paper Tube Size:</label>
                            <input type="number" name="tube_size" class="form-control" id="tube_size" autocomplete="off"
                                placeholder="Enter Tube Size" value="{{ old('tube_size') }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Total Warp Patterns:</label>
                            <input type="text" name="total_warp_patterns" class="form-control" id="total_warp_patterns" autocomplete="off"
                                placeholder="Enter Total Warp Patterns" value="{{ old('total_warp_patterns') }}" />
                        </div>

                        <div class="col-4">
                            <label>Total Weft Patterns:</label>
                            <input type="text" name="total_weft_patterns" class="form-control" id="total_weft_patterns" autocomplete="off"
                                placeholder="Enter Total Weft Pattern" value="{{ old('total_weft_patterns') }}" />
                        </div>

                        <div class="col-4">
                            <label>Total Warps Grams/Meter:</label>
                            <input type="text" name="total_warp_grams" class="form-control" id="total_warp_grams" autocomplete="off"
                                placeholder="Enter Total Warp Grams / Meter" value="{{ old('total_warp_grams') }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Total Weft Grams / Meters:</label>
                            <input type="text" name="total_weft_grams" class="form-control" id="total_weft_grams" autocomplete="off"
                                placeholder="Enter Total Weft Grams" value="{{ old('total_weft_grams') }}" />
                        </div>

                        <div class="col-4">
                            <label>CAL GLM with Shrinkage:</label>
                            <input type="text" name="cal_glm_shrinkage" class="form-control" id="cal_glm_shrinkage" autocomplete="off"
                                placeholder="Enter CAL GLM with Shrinkage" value="{{ old('cal_glm_shrinkage') }}" />
                        </div>

                        <div class="col-4">
                            <label>CAL GSM with Shrinkage:</label>
                            <input type="text" name="cal_gsm_shrinkage" class="form-control" id="cal_gsm_shrinkage" autocomplete="off"
                                placeholder="Enter CAL GSM with Shrinkage" value="{{ old('cal_gsm_shrinkage') }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>CAL GLM without Shrinkage:</label>
                            <input type="text" name="cal_glm_wihtout_shrinkage" class="form-control" id="cal_glm_wihtout_shrinkage" autocomplete="off"
                                placeholder="Enter CAL GLM wihtout Shrinkage" value="{{ old('cal_glm_wihtout_shrinkage') }}" />
                        </div>

                        <div class="col-4">
                            <label>CAL GSM without Shrinkage:</label>
                            <input type="text" name="cal_gsm_without_shrinkage" class="form-control" id="cal_gsm_without_shrinkage" autocomplete="off"
                                placeholder="Enter CAL GSM without Shrinkage" value="{{ old('cal_gsm_without_shrinkage') }}" />
                        </div>

                        <div class="col-4">
                            <label>Master Quality:</label>
                            <select name="master_quality" class="form-control">
                                <option value="">Select Master Quality</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Act GLM:</label>
                            <input type="number" name="act_glm" class="form-control" id="act_glm" autocomplete="off"
                                placeholder="Enter Act GLM" value="{{ old('act_glm') }}" />
                        </div>

                        <div class="col-4">
                            <label>Act GSM:</label>
                            <input type="number" name="act_gsm" class="form-control" id="act_gsm" autocomplete="off"
                                placeholder="Enter Act GSM" value="{{ old('act_gsm') }}" />
                        </div>

                        <div class="col-4">
                            <label>On Loom:</label>
                            <input type="number" name="on_loom" class="form-control" id="on_loom" autocomplete="off"
                                placeholder="Enter On Loom" value="{{ old('on_loom') }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Drawing:</label>
                            <textarea name="drawing" class="form-control" id="drawing">{{ old('drawing') }}</textarea>
                        </div>

                        <div class="col-4">
                            <label>Peg Plan:</label>
                            <textarea name="peg_plan" class="form-control" id="peg_plan">{{ old('peg_plan') }}</textarea>
                        </div>

                        <div class="col-4">
                            <label>Display Quality:</label>
                            <textarea name="display_quality" class="form-control" id="display_quality">{{ old('display_quality') }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Design Paper Image:</label>
                            <input type="file" name="design_paper_image" class="form-control" id="design_paper_image" autocomplete="off"
                                placeholder="Select Design Paper Image" value="{{ old('design_paper_image') }}" />
                        </div>

                        <div class="col-4">
                            <label>Fabric Image:</label>
                            <input type="file" name="fabric_image" class="form-control" id="fabric_image" autocomplete="off"
                                placeholder="Enter Fabric Image" value="{{ old('fabric_image') }}" />
                        </div>

                        <div class="col-4">
                            <label>Thread Count:</label>
                            <input type="text" name="thread_count" class="form-control" id="thread_count" autocomplete="off"
                                placeholder="Enter Thread Count" value="{{ old('thread_count') }}" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Fabric Cover:</label>
                            <input type="number" name="fabric_cover" class="form-control" id="fabric_cover" autocomplete="off"
                                placeholder="Enter Fabric Cover" value="{{ old('fabric_cover') }}" />
                        </div>

                        <div class="col-4">
                            <label>Fabric Cover Range:</label>
                            <input type="number" name="fabric_cover_range" class="form-control" id="fabric_cover_range" autocomplete="off"
                                placeholder="Enter Fabric Cover Range" value="{{ old('fabric_cover_range') }}" />
                        </div>

                        <div class="col-4">
                            <label>Remarks:</label>
                            <textarea name="remarks" class="form-control" id="remarks">{{ old('remarks') }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <div class="form-group row">
                                <div class="col-12">
                                    <label>Master Quality:</label>
                                    <div class="col-form-label">
                                        <div class="radio-inline">
                                            <label class="radio radio-success">
                                                <input type="radio" name="is_master" checked="checked"
                                                    value="1" />
                                                <span></span>
                                                Yes
                                            </label>
                                            <label class="radio radio-danger">
                                                <input type="radio" name="is_master" value="0" />
                                                <span></span>
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group row">
                                <div class="col-12">
                                    <label>Status:</label>
                                    <div class="col-form-label">
                                        <div class="radio-inline">
                                            <label class="radio radio-success">
                                                <input type="radio" name="status" checked="checked"
                                                    value="1" />
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
                    </div>

                    <h2 class="text-center">Warp Details</h2>

                    <div id="warp" class="mt-5">
                        <div class="form-group row" id="row_warp">
                            <div data-repeater-list="" class="col-lg-12">
                                <div data-repeater-item class="form-group row align-items-center">
                                    <div class="col-md-2">
                                        <label>Pattern:</label>
                                        <input type="text" class="form-control warp_pattern" name="warp_pattern[]"
                                            placeholder="Enter Pattern" />
                                    </div>
                                    <div class="col-md-2">
                                        <label>Material:</label>
                                        <select class="form-control warp_material" name="warp_material[]">
                                            <option value="">Select Material</option>
                                            @foreach ($yarns as $yarn)
                                                <option value="{{ $yarn->id }}">{{ $yarn->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Shrinkage:</label>
                                        <input type="text" class="form-control warp_shrinkage" name="warp_shrinkage[]"
                                            placeholder="Enter Shrinkage" />
                                    </div>
                                    <div class="col-md-2">
                                        <label>Total Ends:</label>
                                        <input type="text" class="form-control warp_total_ends"
                                            name="warp_total_ends[]" placeholder="Enter Total Ends" readonly />
                                    </div>

                                    <div class="col-md-2">
                                        <label>Grams / Meters:</label>
                                        <input type="text" class="form-control warp_grams_meters"
                                            name="warp_grams_meters[]" placeholder="Enter Grams / Meters" readonly />
                                    </div>

                                    {{-- <div class="col-md-2">
                                        <a href="javascript:;" id="add_warp"
                                            class="btn btn-sm font-weight-bolder btn-light-primary">
                                            <i class="la la-plus"></i>Add Warp
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="text-center">Weft Details</h2>

                    <div id="weft" class="mt-5">
                        <div class="form-group row" id="row_weft">
                            <div data-repeater-list="" class="col-lg-12">
                                <div data-repeater-item class="form-group row align-items-center">
                                    <div class="col-md-2">
                                        <label>Pattern:</label>
                                        <input type="text" class="form-control weft_pattern" name="weft_pattern[]"
                                            placeholder="Enter Pattern" />
                                    </div>
                                    <div class="col-md-2">
                                        <label>Material:</label>
                                        <select class="form-control weft_material" name="weft_material[]">
                                            <option value="">Select Material</option>
                                            @foreach ($yarns as $yarn)
                                                <option value="{{ $yarn->id }}">{{ $yarn->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Shrinkage:</label>
                                        <input type="text" class="form-control weft_shrinkage" name="weft_shrinkage[]"
                                            placeholder="Enter Shrinkage" />
                                    </div>
                                    <div class="col-md-2">
                                        <label>Total Picks:</label>
                                        <input type="text" class="form-control weft_picks" name="weft_picks[]"
                                            placeholder="Enter Total Picks" />
                                    </div>

                                    <div class="col-md-2">
                                        <label>Grams / Meters:</label>
                                        <input type="text" class="form-control weft_grams_meters"
                                            name="weft_grams_meters[]" placeholder="Enter Grams / Meters" />
                                    </div>

                                    {{-- <div class="col-md-2">
                                        <a href="javascript:;" id="add_weft"
                                            class="btn btn-sm font-weight-bolder btn-light-primary">
                                            <i class="la la-plus"></i>Add Weft
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-2">
                            <label>HSN Number:</label>
                            <input type="number" name="hsn" class="form-control" id="hsn" autocomplete="off"
                                placeholder="Enter HSN Number" value="{{ old('hsn') }}" />
                        </div>

                        <div class="col-2">
                            <label>IGST %:</label>
                            <input type="number" name="igst" class="form-control" id="igst" autocomplete="off"
                                placeholder="Enter IGST" value="{{ old('igst') }}" />
                        </div>

                        <div class="col-2">
                            <label>CGST %:</label>
                            <input type="text" name="cgst" class="form-control" id="cgst" autocomplete="off"
                                placeholder="Enter CGST" value="{{ old('cgst') }}" />
                        </div>

                        <div class="col-2">
                            <label>SGST %:</label>
                            <input type="text" name="sgst" class="form-control" id="sgst" autocomplete="off"
                                placeholder="Enter SGST" value="{{ old('sgst') }}" />
                        </div>

                        <div class="col-2">
                            <label>Cess %:</label>
                            <input type="text" name="cess" class="form-control" id="cess" autocomplete="off"
                                placeholder="Enter Cess" value="{{ old('cess') }}" />
                        </div>

                        <div class="col-2">
                            <label>HSN Description:</label>
                            <input type="text" name="hsn_description" class="form-control" id="hsn_description" autocomplete="off"
                                placeholder="Enter HSN Description" value="{{ old('hsn_description') }}" />
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
        $('document').ready(function() {
            $('#reed').on('change', function() {
                calculateEPI()
                calculateTotalEnds()
                calculateEndsWithSelvedge()
            })

            $('#denting').on('change', function() {
                calculateEPI()
                calculateTotalEnds()
            })

            $('#width').on('change', function() {
                calculateReedSpace()
                calculateTotalEnds()
                calculateWidthCM()
            })

            $('#e_width').on('change', function() {
                calculateReedSpace()
                calculateTotalEnds()
            })

            $('#dents').on('change', function() {
                calculateEndsWithSelvedge()
            })

            $('#ends_per_dent').on('change', function() {
                calculateEndsWithSelvedge()
            })

            $('#selvedge').on('change', function() {
                $.ajax({
                    type: 'GET',
                    url: '/getSelvedgeDetail',
                    data: {
                        'selvedge': $(this).val(),
                    },
                    dataType: 'JSON',
                    success: function(data) {
                        console.log(data)
                        $('#dents').val(data.selvedge.dents)
                        $('#s_width').val(data.selvedge.selvedge_width)
                        $('#ends_per_dent').val(data.selvedge.ends_per_dent)
                        $('#selvedge_ends').val(data.selvedge.selvedge_ends)

                        calculateEndsWithSelvedge()
                    }
                })
            })

            var calculateEPI = () => {
                var reed = $('#reed').val()
                var denting = $('#denting').val()

                $('#epi').val(reed * (denting / 2))
            }

            var calculateReedSpace = () => {
                var width = $('#width').val()
                var e_width = $('#e_width').val()

                $('#reed_space').val(parseFloat(width) + parseFloat(e_width))
            }

            var calculateWidthCM = () => {
                var width = $('#width').val()

                $('#width_cm').val(width * 2.54)
            }

            var calculateTotalEnds = () => {
                var reedSpace = $('#reed_space').val()
                var epi = $('#epi').val()

                $('#total_ends').val(reedSpace * epi)

                calculateEndsWithSelvedge()
            }

            var calculateEndsWithSelvedge = () => {
                var total_ends = $('#total_ends').val()
                var dents = $('#dents').val()
                var ends_per_dent = $('#ends_per_dent').val()

                $('#ends_with_selvedge').val(parseFloat(total_ends) + (parseFloat(dents) + parseFloat(
                    ends_per_dent)))

                $('.warp_total_ends').val(parseFloat(total_ends) + (parseFloat(dents) + parseFloat(
                    ends_per_dent)))
            }

            $('#add_warp').on('click', function() {
                var row_med = '<div class="form-group row" id="row_warp">' +
                    '<div data-repeater-list="" class="col-lg-12">' +
                    '<div data-repeater-item class="form-group row align-items-center">' +
                    '<div class="col-md-2">' +
                    '<label>Pattern:</label>' +
                    '<input type="text" class="form-control pattern" name="pattern[]" placeholder="Enter Pattern"/>' +
                    '</div>' +
                    '<div class="col-md-2">' +
                    '<label>Material:</label>' +
                    '<select class="form-control warp_material" name="warp_material[]">' +
                    '<option value="">Select Material</option>' +
                    '</select>' +
                    '</div>' +
                    '<div class="col-md-2">' +
                    '<label>Shrinkage:</label>' +
                    '<input type="text" class="form-control warp_shrinkage" name="warp_shrinkage[]" placeholder="Enter Shrinkage"/>' +
                    '</div>' +
                    '<div class="col-md-2">' +
                    '<label>Total Ends:</label>' +
                    '<input type="text" class="form-control shrinkage" name="total_ends[]" placeholder="Enter Total Ends"/>' +
                    '</div>' +
                    '<div class="col-md-2">' +
                    '<label>Grams / Meters:</label>' +
                    '<input type="text" class="form-control shrinkage" name="grams_meters[]" placeholder="Enter Grams Meters"/>' +
                    '</div>' +
                    '<div class="col-md-1">' +
                    '<a href="javascript:;" id="delete_row"' +
                    '   class="btn btn-sm font-weight-bolder btn-light-danger delete_warp">' +
                    '<i class="la la-trash-o"></i>' +
                    '</a>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>'
                id = "delete_row"
                $('#warp').append(row_med);
            });

            $('#warp').on('change', '.warp_material', () => {
                $.ajax({
                    type: 'GET',
                    url: '/getYarnDetail',
                    data: {
                        'yarn': $(this).find('.warp_material').val(),
                    },
                    dataType: 'JSON',
                    success: function(data) {
                        console.log(data)
                        calculateGrams(data.yarn.conversion)
                    }
                })
            })

            $('#warp').on('change', '.warp_shrinkage', () => {
                $.ajax({
                    type: 'GET',
                    url: '/getYarnDetail',
                    data: {
                        'yarn': $(this).find('.warp_material').val(),
                    },
                    dataType: 'JSON',
                    success: function(data) {
                        console.log(data)
                        calculateGrams(data.yarn.conversion)
                    }
                })
            })

            $('#weft').on('change', '.weft_material', () => {
                $.ajax({
                    type: 'GET',
                    url: '/getYarnDetail',
                    data: {
                        'yarn': $(this).find('.weft_material').val(),
                    },
                    dataType: 'JSON',
                    success: function(data) {
                        console.log(data)
                        calculateWeftGrams(data.yarn.count.count)
                    }
                })
            })

            $('#weft').on('change', '.weft_shrinkage', () => {
                $.ajax({
                    type: 'GET',
                    url: '/getYarnDetail',
                    data: {
                        'yarn': $(this).find('.weft_material').val(),
                    },
                    dataType: 'JSON',
                    success: function(data) {
                        console.log(data)
                        calculateWeftGrams(data.yarn.count.count)
                    }
                })
            })

            function calculateGrams(conversion) {
                var total_ends = $('#ends_with_selvedge').val()
                var shrinkage = parseFloat($('#warp').find('.warp_shrinkage').val())
                var a = parseFloat((total_ends * 1.0936 * 453.59))
                var c = parseFloat(840.0 * conversion)
                var s = parseFloat(shrinkage + 100) / 100
                var grams = 0.0

                if (isNaN(s)) {
                    grams = a / c
                } else {
                    grams = a / c * s
                }

                $('#warp').find('.warp_grams_meters').val(parseFloat(grams / 1000).toFixed(4))
            }

            function calculateWeftGrams(count) {
                var reed_space = $('#reed_space').val()
                var picks = $('#picks').val()
                $('#weft').find('.weft_picks').val(picks)
                var shrinkage = parseFloat($('#weft').find('.weft_shrinkage').val())
                var a = parseFloat((reed_space * 453.59 * picks))
                var c = parseFloat(840.0 * (count / 1.73))
                var s = parseFloat(shrinkage + 100) / 100
                var grams = 0.0

                if (isNaN(s)) {
                    grams = a / c
                } else {
                    grams = a / c * s
                }

                $('#weft').find('.weft_grams_meters').val(parseFloat(grams / 1000).toFixed(4))
            }

            $('#warp').on('click', '.delete_warp', function() {
                $(this).parent().parent().parent().parent().remove();
            });
        });
    </script>
@endpush
