<!--begin::Header-->

<div id="kt_header" class="header header-fixed ">
    <!--begin::Container-->
    <div class="container-fluid  d-flex align-items-stretch justify-content-between">
        <!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            <!--begin::Header Logo-->
            <div class="header-logo">
                <a href="/dashboard">
                    {{-- <img alt="Logo" src="{{ url('assets/images/', $settings->site_logo) }}" width="128" /> --}}
                </a>
            </div>
            <!--end::Header Logo-->
            <!--begin::Header Menu-->
            <div id="kt_header_menu" class="header-menu header-menu-mobile  header-menu-layout-default ">
                <!--begin::Header Nav-->
                <ul class="menu-nav">
                    <li class="menu-item" aria-haspopup="true"><a href="/dashboard" class="menu-link "><span
                                class="menu-text">Dashboard</span></a></li>
                    <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="hover"
                        aria-haspopup="true"><a href="javascript:;" class="menu-link menu-toggle"><span
                                class="menu-text">Master</span><span class="menu-desc"></span><i
                                class="menu-arrow"></i></a>
                        <div class="menu-submenu menu-submenu-fixed menu-submenu-left" style="width: 1000px">
                            <div class="menu-subnav">
                                <ul class="menu-content">
                                    <li class="menu-item">
                                        <ul class="menu-inner">
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('invoice_settings.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">E - Invoice Settings</span>
                                                </a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('certification.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Certification Type</span></a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('consignee.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Consignee</span></a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('shades.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Shade Master</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('vendors.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Vendor</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <ul class="menu-inner">
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('vendor_groups.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Vendor Group</span></a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('godown.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Godown Location</span></a>
                                            </li>
                                            {{-- <li class="menu-item " aria-haspopup="true">
                                                <a href="#" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Jobwork Rate</span></a>
                                            </li> --}}
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('sales_type.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Sales Master Type</span>
                                                </a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">GST</span>
                                                </a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('colors.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Color</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <ul class="menu-inner">
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('copart.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Copart</span>
                                                </a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('contract.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Contract Type</span></a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('agent.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Agent</span></a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('transportation.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Transportation</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <ul class="menu-inner">
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('delivery_terms.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Delivery Items</span>
                                                </a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('inspection.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Inspection Type</span></a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('packing.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Packing Type</span></a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('mill.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Mill Master</span></a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('qualities.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Quality</span>
                                                </a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('countries.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Country</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="hover"
                        aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Export</span><span class="menu-desc"></span>
                            <i class="menu-arrow"></i></a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('buyers.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Buyer</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('sales_order.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Sales Order</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('packing.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Packing List</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('exports_invoice') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Invoice List</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('exports_bill') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Bill of Exchange</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('license.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">License</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('pre_carriage.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Pre-Carriage By</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('port.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Port</span>
                                    </a>
                                </li>
                                {{-- <li class="menu-item" aria-haspopup="true">
                                    <a href="#" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Tally Sync</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="#" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Tally Batch</span>
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="hover"
                        aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Domestic</span><span class="menu-desc"></span>
                            <i class="menu-arrow"></i></a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('domestic.buyer.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Buyer</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('domestic.sales_order.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Sales Order</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('domestic.contract.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Contract Type</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('domestic.challan.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Challan List</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('domestic.invoice.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Invoice List</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('domestic.yarn.sales_contract.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Yarn Sales Contract</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('domestic.yarn.challan.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Yarn Challan</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('domestic.yarn.invoice.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Yarn Invoice List</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('domestic.yarn.e_invoice.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Yarn E - Invoice List</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('domestic.yarn.return.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Yarn Return List</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="hover"
                        aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Approvals</span><span class="menu-desc"></span>
                            <i class="menu-arrow"></i></a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('export_so') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Export SO</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('export_so') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">SO - Domestic</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('po_fabric_purchase') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">PO - Fabric Purchase</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('po_fabric_purchase_jw') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">PO - Fabric Processing JW</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('po_fabric_purchase_jw') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">PO Yarn</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="hover"
                        aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Yarn Master</span><span class="menu-desc"></span>
                            <i class="menu-arrow"></i></a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('count.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Count</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('ply.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Ply</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('uom.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Uom</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('mill.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Mill Master</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('variety.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Yarn Variety</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('yarn_type.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Yarn Type</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('yarn.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Yarn Master</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="hover"
                        aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Stock</span><span class="menu-desc"></span>
                            <i class="menu-arrow"></i></a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('stock.yarn_inward.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Yarn Inward</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('stock.fabric_inward.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Fabric Inward</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('stock.yarn_opening_balance.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Yarn Opening Balance</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('stock.fabric_opening_balance.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Fabric Opening Balance</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="hover"
                        aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Purchase</span><span class="menu-desc"></span>
                            <i class="menu-arrow"></i></a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('purchase.yarn_po.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Yarn PO</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('purchase.fabric_po.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Fabric PO</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="hover"
                        aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Sort Master</span><span class="menu-desc"></span>
                            <i class="menu-arrow"></i></a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('loom_types.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Loom Type</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('selvedge.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Selvedge Master</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('weave.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Weave</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{ route('sort.index') }}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Sort Master</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="hover"
                        aria-haspopup="true"><a href="javascript:;" class="menu-link menu-toggle"><span
                                class="menu-text">Planning</span><span class="menu-desc"></span><i
                                class="menu-arrow"></i></a>
                        <div class="menu-submenu menu-submenu-fixed menu-submenu-right" style="width: 500px">
                            <div class="menu-subnav">
                                <ul class="menu-content">
                                    <li class="menu-item">
                                        <ul class="menu-inner">
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('planning.orders') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Orders List</span>
                                                </a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('planning.jobwork_weaving_contract.index') }}"
                                                    class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Jobwork Weaving Contract</span></a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('planning.jobwork_weaving_weft_issue.index') }}"
                                                    class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Jobwork Weaving Weft Issue</span></a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('planning.jobwork_process_contract.index') }}"
                                                    class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Jobwork Process Contract</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('planning.jobwork_process_contract_issue.index') }}"
                                                    class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Jobwork Process Contract Issue</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('planning.jobwork_finished_fabric_receive.index') }}"
                                                    class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Jobwork Finished Fabric Receive</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('planning.beam_receive_from_weaver.index') }}"
                                                    class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Beam Receive from Weaver</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('planning.sizing_plan.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Sizing Plan</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <ul class="menu-inner">
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('planning.sizing_yarn_issue') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Sizing Yarn Issue</span></a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('planning.beam_inward') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Beam Inward</span></a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('planning.beam_outward') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Beam Outward</span>
                                                </a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('planning.yarn_processing_contract.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Yarn Processing Contract List</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('planning.yarn_processing_contract_issue.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Yarn Processing Contract IssuesList</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('planning.yarn_processing_receive.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Yarn Processing Contract Receive List</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('planning.yarn_processing_return.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Yarn Process Return List</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="hover"
                        aria-haspopup="true">
                        <a href="javascript:;" class="menu-link menu-toggle">
                            <span class="menu-text">Warehouse</span><span class="menu-desc"></span>
                            <i class="menu-arrow"></i></a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('packing.index')}}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Packing Type</span>
                                    </a>
                                </li>
                                {{-- <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('warehouse.bale_packing')}}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Paper Tube Size</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="#" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Grade</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('inspection.index')}}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Inspection Type</span>
                                    </a>
                                </li> --}}
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('warehouse.jobwork_fabric_receive.index')}}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Jobwork Fabric Receive</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('warehouse.bale_packing')}}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Bale Packing</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="#" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Cloth Challan</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="#" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Piece Join</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('warehouse.sale_return.index')}}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Sales Return</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('warehouse.process_return.index')}}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Process Return</span>
                                    </a>
                                </li>
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="{{route('warehouse.purchase_return.index')}}" class="menu-link ">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                            class="menu-text">Purchase Return</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="hover"
                        aria-haspopup="true"><a href="javascript:;" class="menu-link menu-toggle"><span
                                class="menu-text">Others</span><span class="menu-desc"></span><i
                                class="menu-arrow"></i></a>
                        <div class="menu-submenu menu-submenu-fixed menu-submenu-right" style="width: 500px">
                            <div class="menu-subnav">
                                <ul class="menu-content">
                                    <li class="menu-item">
                                        <ul class="menu-inner">
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{route('inspection.index')}}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Inspection List</span>
                                                </a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{route('delivery_terms.index')}}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Delivery Terms</span></a>
                                            </li>
                                            {{-- <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('consignee.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Terms & Conditions</span></a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('shades.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Payment Terms</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('vendors.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Currency</span>
                                                </a>
                                            </li> --}}

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('vendors.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Country</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('cities.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">City</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('states.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">State</span>
                                                </a>
                                            </li>

                                            {{-- <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('vendor_groups.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Employee</span></a>
                                            </li> --}}
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <ul class="menu-inner">
                                            {{-- <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('godown.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Financial Year</span></a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('sales_type.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Stock type Process Contract Type</span>
                                                </a>
                                            </li> --}}
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Party to Location</span>
                                                </a>
                                            </li>

                                            {{-- <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Costing</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Costing Summary</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">OCR</span>
                                                </a>
                                            </li> --}}

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Roll / Bale Print Page</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="hover"
                        aria-haspopup="true"><a href="javascript:;" class="menu-link menu-toggle"><span
                                class="menu-text">Reports</span><span class="menu-desc"></span><i
                                class="menu-arrow"></i></a>
                        <div class="menu-submenu menu-submenu-fixed menu-submenu-right" style="width: 1325px">
                            <div class="menu-subnav">
                                <ul class="menu-content">
                                    <li class="menu-item">
                                        <ul class="menu-inner">
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('warehouse_stock') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Warehouse Stock</span>
                                                </a>
                                            </li>
                                            {{-- <li class="menu-item " aria-haspopup="true">
                                                <a href="#" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Fabric</span></a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('waiting_for_packing') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Waiting for Packing</span></a>
                                            </li> --}}
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('beam_inward') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Beam Inward</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('beam_inward_against_job_contract') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Beam Inward against Job Contract</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('vendors.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Focused Benefit</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('export_outstanding') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Export Outstanding</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('export_outstanding_new') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Export Outstanding New</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('weft_req_report') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Weft Requirement</span></a>
                                            </li>
                                            {{-- <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('godown.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Bottom Receive</span></a>
                                            </li>
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('sales_type.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Yarn from Weave Register</span>
                                                </a>
                                            </li> --}}

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('piece_bale_stock') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Piece & Bale Stock</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('piece_join') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Piece Join</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <ul class="menu-inner">
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('weft_issue_report') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Weft Issue</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('yarn_to_sizing_register') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Yarn to Sizing Register</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('stock_inward_yarn') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Stock Inward Yarn</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('opening_closing_balance') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Yarn Opening & Closing Balance</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('sizing_reconciliation') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Sizing Reconcilation</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('inventory_fabric') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Inventory Fabric</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Quality wise Inventory Fabric</span>
                                                </a>
                                            </li>

                                            {{-- <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Rewinding Issue</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Rewinding Receive</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Rewinding Receive Pending</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Rewinding Production</span>
                                                </a>
                                            </li> --}}

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Rewinding Issue to Trading</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <ul class="menu-inner">
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('stock_inward_yarn_graph') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Stock Inward Yarn Graph</span>
                                                </a>
                                            </li>

                                            {{-- <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Quality wise Jobwork Contract</span>
                                                </a>
                                            </li> --}}

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('quality_fabric_outward') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Quality wise Fabric Outward</span>
                                                </a>
                                            </li>

                                            {{-- <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Fabric Outward</span>
                                                </a>
                                            </li> --}}

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('location_wise_yarn_stock') }}"
                                                    class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Location wise Yarn Stock</span>
                                                </a>
                                            </li>
{{-- 
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Contract Completeds</span>
                                                </a>
                                            </li> --}}

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Approval Dashboard</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('domestic_order_status') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Domestic Order Status (Greige)</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('export_sales_order_status') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Export Order Status (Greige)</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('domestic_order_status_finished') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Domestic Order Status (Finished)</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item">
                                        <ul class="menu-inner">
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('export_sales_order_status_finished') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Export Order Status (Finished)</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('fabric_po_status_purchase') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Fabric PO Status (Purchase)</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('fabric_po_status_jobwork') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Fabric PO Status (Jobwork)</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('jobwork_fabric_inward') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Jobwork Fabric Inward</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('purchase_fabric_inward') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Purchase Fabric Inward</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('packed_fabric_pending_for_dispatch') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Packing ready for Dispatch</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('fabric_obcb') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Fabric OBCB</span>
                                                </a>
                                            </li>

                                            {{-- <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Daily sizing set Issue</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Quality wise sizing set Issue</span>
                                                </a>
                                            </li> --}}

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('yarn_entry_in_out') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Count entry wise in - out</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('so_status') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">SO Status</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item">
                                        <ul class="menu-inner">
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">SO OS</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('yarn_po_status') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Yarn PO Status</span>
                                                </a>
                                            </li>

                                            {{-- <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Yarn Stock</span>
                                                </a>
                                            </li> --}}

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Piecewise Dispatch Details</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Piecewise Available Details</span>
                                                </a>
                                            </li>
{{-- 
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Container Close</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Weaving Reconcilation Summary</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Weaving Reconcilation</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Rewinding In Out</span>
                                                </a>
                                            </li> --}}

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Fabric In Out</span>
                                                </a>
                                            </li>

                                            {{-- <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Export Invoice</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Domestic Invoice</span>
                                                </a>
                                            </li> --}}

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('yarn_invoice_report') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Yarn Invoice</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item">
                                        <ul class="menu-inner">
                                            {{-- <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Job Contract Status</span>
                                                </a>
                                            </li> --}}

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Sizing Reconcilation</span>
                                                </a>
                                            </li>

                                            {{-- <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Yarn Sales Return</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Sales Return</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Export Details</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Sizing Pending Set</span>
                                                </a>
                                            </li> --}}

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('location_wise_yarn_stock') }}"
                                                    class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Location wise Yarn Stock</span>
                                                </a>
                                            </li>

                                            {{-- <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">PD</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Yearly Sales Summary</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Yarn SO Status</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Graphical Dashboard</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Beam Outward</span>
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </li>

                                    {{-- <li class="menu-item">
                                        <ul class="menu-inner">
                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Weaving Charges Trend</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Yarn Price Trend</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Sales Growth</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Domestic Sales Goal</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Sale & Purchase</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Piece History</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Roll Length</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Order Status</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Rejected Fabric Detail</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Weaving Reconcilation</span>
                                                </a>
                                            </li>

                                            <li class="menu-item " aria-haspopup="true">
                                                <a href="{{ route('gst.index') }}" class="menu-link ">
                                                    <i class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                        class="menu-text">Jobwork Process</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
                <!--end::Header Nav-->
            </div>
            <!--end::Header Menu-->
        </div>
        <!--end::Header Menu Wrapper-->
        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::User-->
            <div class="topbar-item">
                <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2"
                    id="kt_quick_user_toggle">
                    <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                    <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">
                        {{-- {{ ucfirst(auth()->user()->name) }} --}}
                    </span>
                    <span class="symbol symbol-35 symbol-light-warning">
                        <span class="symbol-label font-size-h5 font-weight-bold">
                            {{-- {{ ucfirst(mb_substr(auth()->user()->name, 0, 1)) }} --}}
                        </span>
                    </span>
                </div>
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header-->
