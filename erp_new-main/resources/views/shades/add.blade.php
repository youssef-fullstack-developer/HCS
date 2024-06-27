@extends('main')
@section('content')
    {{ html()->form('POST', '/shades')->open() }}
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom " id="kt_page_sticky_card">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            Add Shade
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <a href="{{ route('selvedge.index') }}" class="btn btn-light-primary font-weight-bolder mr-2">
                            <i class="ki ki-long-arrow-back icon-sm"></i>
                            Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-4">
                            <label>Shade:</label>
                            <input type="text" name="name" class="form-control" id="name" autocomplete="off"
                                placeholder="Enter Shade" value="{{ old('name') }}" required />
                        </div>

                        <div class="col-4">
                            <label>Parent Sort:</label>
                            <select name="parent_sort" class="form-control">
                                <option value="">Select Parent Sort</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>WARP/WEFT</th>
                                    <th>PATTERN</th>
                                    <th>ACTUAL MATERIAL</th>
                                    <th>MATERIAL</th>
                                </tr>
                            </table>
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
