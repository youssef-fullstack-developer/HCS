@extends('main')
@section('content')
    {{ html()->form('POST', '/yarn')->open() }}
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom " id="kt_page_sticky_card">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            Add Yarn
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <a href="{{ route('yarn.index') }}" class="btn btn-light-primary font-weight-bolder mr-2">
                            <i class="ki ki-long-arrow-back icon-sm"></i>
                            Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-4">
                            <label>Count:</label>
                            <select name="count" id="count" class="form-control" required>
                                <option value="">Select Count</option>
                                @foreach ($counts as $count)
                                    <option value="{{ $count->id }}">{{ $count->count }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Ply:</label>
                            <select name="ply" id="ply" class="form-control" required>
                                <option value="">Select Ply</option>
                                @foreach ($ply as $p)
                                    <option value="{{ $p->id }}">{{ $p->ply }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Filaments:</label>
                            <select name="filaments" class="form-control">
                                <option value="">Select Filaments</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4">
                            <label>Yarn Type:</label>
                            <select name="type" id="yarn_type" class="form-control">
                                <option value="">Select Yarn Type</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->type }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Yarn Unit:</label>
                            <select name="unit" id="yarn_unit" class="form-control" required>
                                <option value="">Select Yarn Unit</option>
                                @foreach ($uom as $u)
                                    <option value="{{ $u->id }}">{{ $u->code }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-4">
                            <label>TPM:</label>
                            <select name="tpm" class="form-control">
                                <option value="">Select TPM</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Color:</label>
                            <select name="color" id="color" class="form-control">
                                <option value="">Select Color</option>
                                @foreach ($colors as $color)
                                    <option value="{{ $color->id }}">{{ $color->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Yarn Variety:</label>
                            <select name="variety" id="variety" class="form-control" required>
                                <option value="">Select Variety</option>
                                @foreach ($varieties as $variety)
                                    <option value="{{ $variety->id }}">{{ $variety->code }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Reorder Quantity Level:</label>
                            <input type="text" class="form-control" name="reorder" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Buying UOM:</label>
                            <select name="buy_uom" id="buy_uom" class="form-control" required>
                                <option value="">Select Color</option>
                                @foreach ($buy_uom as $uom)
                                    <option value="{{ $uom->id }}">{{ $uom->code }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Blend:</label>
                            <select name="blend" class="form-control">
                                <option value="">Select Blend</option>
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Danger Quantity Level:</label>
                            <input type="text" class="form-control" name="danger" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Yarn Name:</label>
                            <input type="text" id="name" class="form-control" name="name" readonly />
                        </div>

                        <div class="col-4">
                            <label>Conversion Count:</label>
                            <input type="text" class="form-control" name="conversion" />
                        </div>

                        <div class="col-4">
                            <label>Dsiplay Name:</label>
                            <input type="text" id="display_name" class="form-control" name="display_name" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <div class="form-group row">
                                <div class="col-12">
                                    <label>Apply Ply for Conversion:</label>
                                    <div class="col-form-label">
                                        <div class="radio-inline">
                                            <label class="radio radio-success">
                                                <input type="radio" name="is_apply" checked="checked"
                                                    value="1" />
                                                <span></span>
                                                Yes
                                            </label>
                                            <label class="radio radio-danger">
                                                <input type="radio" name="is_apply" value="0" />
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
                    </div>

                    <div class="form-group row">
                        <div class="col-2">
                            <label>HSN No:</label>
                            <input type="text" class="form-control" name="hsn" />
                        </div>

                        <div class="col-2">
                            <label>IGST%:</label>
                            <input type="text" class="form-control" name="igst" required />
                        </div>

                        <div class="col-2">
                            <label>CGST%:</label>
                            <input type="text" class="form-control" name="cgst" required />
                        </div>

                        <div class="col-2">
                            <label>SGST%:</label>
                            <input type="text" class="form-control" name="sgst" required />
                        </div>

                        <div class="col-2">
                            <label>Cess%:</label>
                            <input type="text" class="form-control" name="cess" />
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
        $('#count').on('change', () => {
            updateName()
        })

        $('#ply').on('change', () => {
            updateName()
        })

        $('#yarn_type').on('change', () => {
            updateName()
        })

        $('#yarn_unit').on('change', () => {
            updateName()
        })

        $('#color').on('change', () => {
            updateName()
        })
 
        $('#variety').on('change', () => {
            updateName()
        })


        function updateName() {
            var count = ''
            var ply = ''
            var yarn_type = ''
            var yarn_unit = ''
            var color = ''
            var variety = ''

            if ($('#count').val()) {
                count = parseInt($('#count option:selected').text())
            }

            if ($('#ply').val()) {
                ply = parseInt($('#ply option:selected').text())
            }

            if ($('#yarn_type').val()) {
                yarn_type = $('#yarn_type option:selected').text()
            }

            if ($('#yarn_unit').val()) {
                yarn_unit = $('#yarn_unit option:selected').text()
            }

            if ($('#color').val()) {
                color = $('#color option:selected').text()
            }

            if ($('#variety').val()) {
                variety = $('#variety option:selected').text()
            }

            $('#name').val(ply + "/" + count + ' ' + yarn_unit + ' ' + yarn_type + ' ' + variety + ' ' + color)

            $('#display_name').val(ply + "/" + count + ' ' + yarn_unit + ' ' + yarn_type + ' ' + variety + ' ' + color)
        }
    </script>
@endpush
