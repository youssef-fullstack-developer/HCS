@extends('main')
@section('content')
    {{ html()->form('POST', '/buyers')->open() }}
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom " id="kt_page_sticky_card">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            Add Buyers
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
                        <div class="col-4">
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control" id="name" autocomplete="off"
                                   placeholder="Enter Name" value="{{ old('name') }}" required/>
                        </div>

                        <div class="col-4">
                            <label>GST Number:</label>
                            <input type="text" name="gst" class="form-control" id="gst" autocomplete="off"
                                   placeholder="Enter Name" value="{{ old('gst') }}"/>
                        </div>

                        <div class="col-4">
                            <label>Buyer Country:</label>
                            <select name="country_id" class="form-control" required>
                                <option value="">Select Country</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4">
                            <label>State:</label>
                            <select name="state_id" class="form-control">
                                <option value="">Select State</option>
                                @foreach($states as $state)
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-4">
                            <label>Buyer Address 1:</label>
                            <input type="text" name="address_1" class="form-control" id="address_1" autocomplete="off"
                                   placeholder="Enter Address" value="{{ old('address_1') }}" required/>
                        </div>
                        <div class="col-4">
                            <label>Buyer Address 2:</label>
                            <input type="text" name="address_2" class="form-control" id="address_2" autocomplete="off"
                                   placeholder="Enter Address" value="{{ old('address_2') }}"/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Buyer Address 3:</label>
                            <input type="text" name="address_3" class="form-control" id="address_3" autocomplete="off"
                                   placeholder="Enter Address" value="{{ old('address_3') }}"/>
                        </div>

                        <div class="col-4">
                            <label>Buyer City:</label>
                            <select name="city_id" class="form-control">
                                <option value="">Select City</option>
                                @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-4">
                            <label>Buyer Phone no:</label>
                            <input type="text" name="phone" class="form-control" id="phone" autocomplete="off"
                                   placeholder="Enter Phone" value="{{ old('phone') }}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4">
                            <label>Buyer Pincode:</label>
                            <input type="text" name="buyer_pincode" class="form-control" id="buyer_pincode"
                                   autocomplete="off"
                                   placeholder="Enter Pincode" value="{{ old('buyer_pincode') }}" required/>
                        </div>
                        <div class="col-4">
                            <label>Buyer Email Id :</label>
                            <input type="text" name="email" class="form-control" id="email" autocomplete="off"
                                   placeholder="Enter Email Id" value="{{ old('email') }}"/>
                        </div>
                        <div class="col-4">
                            <label>Buyer No:</label>
                            <input type="text" name="buyer_no" class="form-control" id="buyer_no" autocomplete="off"
                                   placeholder="Enter buyer no" value="{{ old('buyer_no') }}"/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Buyer Code:</label>
                            <input type="text" name="buyer_code" class="form-control" id="buyer_code" autocomplete="off"
                                   placeholder="Enter buyer code" value="{{ old('buyer_code') }}"/>
                        </div>
                        <div class="col-4">
                            <label>Bank:</label>
                            <input type="text" name="bank" class="form-control" id="bank" autocomplete="off"
                                   placeholder="Enter Bank" value="{{ old('bank') }}"/>
                        </div>
                        <div class="col-4">
                            <label>Bank Country:</label>
                            <select name="bank_country_id" class="form-control">
                                <option value="">Select country</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Bank State:</label>
                            <select name="bank_state_id" class="form-control">
                                <option value="">Select Bank State</option>
                                @foreach($states as $state)
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-4">
                            <label>State Code:</label>
                            <input type="text" name="state_code" class="form-control" id="buyer_code" autocomplete="off"
                                   placeholder="Enter State code" value="{{ old('buyer_code') }}"/>
                        </div>
                        <div class="col-4">
                            <label>Bank Address:</label>
                            <textarea placeholder="" name="bank_address" rows="3" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Pincode:</label>
                            <input type="text" name="pincode" class="form-control" id="pincode" autocomplete="off"
                                   value="{{ old('pincode') }}"/>
                        </div>
                        <div class="col-4">
                            <label>Bank City:</label>
                            <select name="bank_city_id" class="form-control">
                                <option value="">Select Bank City</option>
                                @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4">
                            <div class="checkbox-list mt-5">
                                <label class="checkbox">
                                    <input type="checkbox" name="is_active" value="1" class="form-control">
                                    <span></span>
                                    Is Active
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <label>Credit Limit:</label>
                            <input type="text" name="credit_limit" class="form-control" id="credit_limit"
                                   autocomplete="off"
                                   value="{{ old('credit_limit') }}"/>
                        </div>
                        <div class="col-4">
                            <label>Interest %:</label>
                            <input type="text" name="interest" class="form-control" id="interest" autocomplete="off"
                                   value="{{ old('interest') }}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4">
                            <label>GST Reg. Type:</label>
                            <select name="gst_type" class="form-control">
                                <option value="">Select GST Reg. Type</option>
                                <option value="registered_b2b">Registered B2B</option>
                                <option value="unregistered_b2b">UnRegistered B2B</option>
                                <option value="export">Export</option>
                                <option value="ecommerce">ECommerce</option>
                                <option value="sez">SEZ</option>
                                <option value="deemed_export">Deemed Export</option>
                                <option value="composite">Composite</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <div class="checkbox-list mt-5">
                                <label class="checkbox">
                                    <input type="checkbox" name="consignee_as_buyer" value="1" class="form-control">
                                    <span></span>
                                    Consignee as a buyer
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <label>Account Group:</label>
                            <select name="account_group" class="form-control">
                                <option value="">Select Account Group</option>
                                <option value="land">Land</option>
                                <option value="building">Building</option>
                                <option value="plant_machinery">Plant & Machinery</option>
                                <option value="equipments">Equipments</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Group:</label>
                            <select name="vendor_group_id" class="form-control">
                                <option value="">Select vendor group</option>
                                @foreach($vendor_groups as $vendor_group)
                                    <option value="{{$vendor_group->id}}">{{$vendor_group->group}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-4">
                            <label>Tax Id:</label>
                            <input type="text" name="tax_id" class="form-control" id="tax_id" autocomplete="off"
                                   value="{{ old('tax_id') }}"/>
                        </div>
                        <div class="col-4">
                            <label>Pan Number:</label>
                            <input type="text" name="pan" class="form-control" id="pan" autocomplete="off"
                                   value="{{ old('pan') }}"/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-4">
                            <label>Port Of Loading:</label>
                            <select name="port_landing" class="form-control">
                                <option value="">Select Port Of Landing</option>
                                @foreach($ports as $port)
                                    <option value="{{$port->id}}">{{$port->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-4">
                            <label>Port Of Destination:</label>
                            <select name="port_destination" class="form-control">
                                <option value="">Select Port Of Destination</option>
                                <option value="bangalore">Bangalore</option>
                                <option value="haryana">Haryana</option>
                                <option value="krishnagiri">Krishnagiri</option>
                                <option value="katunayake">Katunayake</option>
                                <option value="uttar_pardesh">Uttar Pardesh</option>
                                <option value="tiruppur">Tiruppur</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label>Currency:</label>
                            <select name="currency" class="form-control">
                                <option value="">Select Currency</option>
                                <option value="usd">USD</option>
                                <option value="rupess">RUPEES</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4">
                            <div class="checkbox-list mt-5">
                                <label class="checkbox">
                                    <input type="checkbox" name="is_self" value="1" class="form-control">
                                    <span></span>
                                    Is Self
                                </label>
                            </div>
                        </div>

                    </div>

                    <div class="row my-4">
                        <h3>
                            Buyer Representative
                        </h3>
                    </div>
                    <div class="row form-group">
                        <div class="col-6">
                            <table
                                class="table table-head-noborder table-striped table-responsive-sm loading-table table-foot-bg">
                                <thead>
                                <tr>
                                    <th>REPRESENTATIVE NAME</th>
                                    <th>CONTACT NUMBER</th>
                                    <th>A/D</th>
                                </tr>
                                </thead>
                                <tbody id="tbl">
                                <tr class="representative">
                                    <td style="vertical-align: middle"><input type="text" step="any" class="form-control" name="representatives[0][representative_name]" id="representatives[0][representative_name]" required></td>
                                    <td style="vertical-align: middle"><input type="text" step="any" class="form-control" name="representatives[0][representative_phone]" id="representatives[0][representative_phone]" required></td>
                                    <td>
                                       <button class="btn btn-icon btn-sm btn-primary btn-circle" type="button" onclick="addRow()"><i class="fa fa-plus"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
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
           const addRow = () => {
                var html = '';
                var index = $('.representative').length
               console.log(index);
                html += '<tr class="representative">';
                html += `<td style="vertical-align: middle"><input type="text" step="any" class="form-control" name="representatives[${index}][representative_name]" id="representatives[${index}][representative_name]" required></td>`;
                html += `<td style="vertical-align: middle"><input type="text" step="any" class="form-control" name="representatives[${index}][representative_phone]" id="representatives[${index}][representative_phone]" required></td>`;
                html += '<td>';
                html += '<button class="btn btn-icon btn-primary btn-sm btn-circle mr-2" type="button" onclick="addRow()" ><i class="fa fa-plus"></i></button>';
                html += '<button class="btn btn-icon btn-danger btn-sm btn-circle" type="button" onclick="deleteRow(this)" ><i class="fa fa-trash"></i></button>';
                html += '</td>';
                html += '</tr>';
                $('#tbl').append(html);
            }

            const deleteRow = (val) => {
                $(val).closest('tr').remove();
            }
        </script>
@endpush
