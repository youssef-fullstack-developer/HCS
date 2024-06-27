<?php

use App\Http\Controllers\AgentsController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeamReceiveFromWeaverController;
use App\Http\Controllers\BuyersController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ConsigneeController;
use App\Http\Controllers\ContractsController;
use App\Http\Controllers\CopartController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeliveryTermsController;
use App\Http\Controllers\DomesticBuyerController;
use App\Http\Controllers\DomesticChallanController;
use App\Http\Controllers\DomesticContractController;
use App\Http\Controllers\DomesticInvoiceController;
use App\Http\Controllers\DomesticSalesOrderController;
use App\Http\Controllers\DomesticYarnChallanController;
use App\Http\Controllers\DomesticYarnEInvoiceController;
use App\Http\Controllers\DomesticYarnInvoiceController;
use App\Http\Controllers\DomesticYarnSalesContractController;
use App\Http\Controllers\DomesticYarnSalesReturnController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\FabricInwardController;
use App\Http\Controllers\FabricOpeningBalanceController;
use App\Http\Controllers\ForwarderController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\GodownLocationsController;
use App\Http\Controllers\GSTController;
use App\Http\Controllers\InspectionTypeController;
use App\Http\Controllers\InvoiceSettingsController;
use App\Http\Controllers\JobworkFabricReceiveController;
use App\Http\Controllers\JobworkFinishedFabricReceiveController;
use App\Http\Controllers\JobworkProcessContractController;
use App\Http\Controllers\JobworkProcessContractIssueController;
use App\Http\Controllers\JobworkWeavingContractController;
use App\Http\Controllers\JobworkWeavingWeftIssueController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\LoomTypesController;
use App\Http\Controllers\MillController;
use App\Http\Controllers\PackagingReasonController;
use App\Http\Controllers\PackingController;
use App\Http\Controllers\PackingTypeController;
use App\Http\Controllers\PlanningController;
use App\Http\Controllers\PlyController;
use App\Http\Controllers\PortController;
use App\Http\Controllers\PreCarriageController;
use App\Http\Controllers\ProcessReturnController;
use App\Http\Controllers\PurchaseFabricPOController;
use App\Http\Controllers\PurchaseReturnController;
use App\Http\Controllers\PurchaseYarnPOController;
use App\Http\Controllers\QualitiesController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\SaleReturnController;
use App\Http\Controllers\SalesOrderController;
use App\Http\Controllers\SalesTypeController;
use App\Http\Controllers\SelvedgeController;
use App\Http\Controllers\ShadesController;
use App\Http\Controllers\SizingPlanController;
use App\Http\Controllers\SortController;
use App\Http\Controllers\TransportationsController;
use App\Http\Controllers\UOMController;
use App\Http\Controllers\VarietyController;
use App\Http\Controllers\VendorGroupsController;
use App\Http\Controllers\VendorsController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\WeaveController;
use App\Http\Controllers\YarnController;
use App\Http\Controllers\YarnInwardController;
use App\Http\Controllers\YarnOpeningBalanceController;
use App\Http\Controllers\YarnProcessingContractController;
use App\Http\Controllers\YarnProcessingContractIssueController;
use App\Http\Controllers\YarnProcessingReceiveController;
use App\Http\Controllers\YarnProcessingReturnController;
use App\Http\Controllers\YarnTypeController;
use App\Http\Middleware\CompanyMiddleware;
use App\Models\JobworkProcessContract;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('authenticate');

Route::middleware([CompanyMiddleware::class, 'auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Master
    Route::resource('invoice_settings', InvoiceSettingsController::class);
    Route::resource('certification', CertificationController::class);
    Route::resource('consignee', ConsigneeController::class);
    Route::resource('shades', ShadesController::class);
    Route::resource('vendors', VendorsController::class);
    Route::resource('vendor_groups', VendorGroupsController::class);
    Route::resource('godown', GodownLocationsController::class);
    Route::resource('sales_type', SalesTypeController::class);
    Route::resource('gst', GSTController::class);
    Route::resource('copart', CopartController::class);
    Route::resource('contract', ContractsController::class);
    Route::resource('agent', AgentsController::class);
    Route::resource('transportation', TransportationsController::class);
    Route::resource('delivery_terms', DeliveryTermsController::class);
    Route::resource('inspection', InspectionTypeController::class);
    Route::resource('packing', PackingTypeController::class);
    Route::resource('mill', MillController::class);
    Route::resource('qualities', QualitiesController::class);
    Route::resource('countries', CountriesController::class);
    Route::resource('colors', ColorController::class);

    //Export
    Route::resource('buyers', BuyersController::class);
    Route::resource('sales_order', SalesOrderController::class);
    Route::resource('packing', PackingController::class);
    Route::resource('license', LicenseController::class);
    Route::resource('pre_carriage', PreCarriageController::class);
    Route::resource('port', PortController::class);
    Route::get('/exports/invoice', [ExportController::class, 'invoice'])->name('exports_invoice');
    Route::get('/exports/bill', [ExportController::class, 'bill'])->name('exports_bill');

    //Domestic
    Route::prefix('domestic')->name('domestic.')->group(function () {
        Route::resource('buyer', DomesticBuyerController::class);
        Route::resource('sales_order', DomesticSalesOrderController::class);
        Route::resource('contract', DomesticContractController::class);
        Route::resource('challan', DomesticChallanController::class);
        Route::resource('invoice', DomesticInvoiceController::class);
        Route::prefix('yarn')->name('yarn.')->group(function () {
            Route::resource('sales_contract', DomesticYarnSalesContractController::class);
            Route::resource('challan', DomesticYarnChallanController::class);
            Route::resource('invoice', DomesticYarnInvoiceController::class);
            Route::resource('e_invoice', DomesticYarnEInvoiceController::class);
            Route::resource('return', DomesticYarnSalesReturnController::class);
        });
    });

    //Approvals
    Route::get('/approval/export_so', [ApprovalController::class, 'export_so'])->name('export_so');
    Route::get('/approval/po_fabric_purchase', [ApprovalController::class, 'po_fabric_purchase'])->name('po_fabric_purchase');
    Route::get('/approval/po_fabric_purchase_jw', [ApprovalController::class, 'po_fabric_purchase_jw'])->name('po_fabric_purchase_jw');

    //Yarn
    Route::resource('count', CountController::class);
    Route::resource('ply', PlyController::class);
    Route::resource('uom', UOMController::class);
    Route::resource('mill', MillController::class);
    Route::resource('variety', VarietyController::class);
    Route::resource('yarn_type', YarnTypeController::class);
    Route::resource('yarn', YarnController::class);

    //Stock
    Route::prefix('stock')->name('stock.')->group(function () {
        Route::resource('yarn_inward', YarnInwardController::class);
        Route::resource('fabric_inward', FabricInwardController::class);
        Route::resource('yarn_opening_balance', YarnOpeningBalanceController::class);
        Route::resource('fabric_opening_balance', FabricOpeningBalanceController::class);
    });

    //Purchase
    Route::prefix('purchase')->name('purchase.')->group(function () {
        Route::resource('yarn_po', PurchaseYarnPOController::class);
        Route::resource('fabric_po', PurchaseFabricPOController::class);
    });

    //Sort Master
    Route::resource('loom_types', LoomTypesController::class);
    Route::resource('selvedge', SelvedgeController::class);
    Route::resource('weave', WeaveController::class);
    Route::resource('sort', SortController::class);

    //Planning
    Route::prefix('planning')->name('planning.')->group(function () {
        Route::get('/planning/orders', [PlanningController::class, 'orders'])->name('orders');
        Route::resource('jobwork_weaving_contract', JobworkWeavingContractController::class);
        Route::resource('jobwork_weaving_weft_issue', JobworkWeavingWeftIssueController::class);
        Route::resource('jobwork_process_contract', JobworkProcessContractController::class);
        Route::resource('jobwork_process_contract_issue', JobworkProcessContractIssueController::class);
        Route::resource('jobwork_finished_fabric_receive', JobworkFinishedFabricReceiveController::class);
        Route::resource('beam_receive_from_weaver', BeamReceiveFromWeaverController::class);
        Route::resource('sizing_plan', SizingPlanController::class);
        Route::get('/planning/sizing_yarn_issue', [PlanningController::class, 'sizing_yarn_issue'])->name('sizing_yarn_issue');
        Route::get('/planning/beam_inward', [PlanningController::class, 'beam_inward'])->name('beam_inward');
        Route::get('/planning/beam_outward', [PlanningController::class, 'beam_outward'])->name('beam_outward');
        Route::resource('yarn_processing_contract', YarnProcessingContractController::class);
        Route::resource('yarn_processing_contract_issue', YarnProcessingContractIssueController::class);
        Route::resource('yarn_processing_receive', YarnProcessingReceiveController::class);
        Route::resource('yarn_processing_return', YarnProcessingReturnController::class);
    });

    //Warehouse
    Route::prefix('warehouse')->name('warehouse.')->group(function () {
        Route::resource('jobwork_fabric_receive', JobworkFabricReceiveController::class);
        Route::get('/warehouse/bale_packing', [WarehouseController::class, 'bale_packing'])->name('bale_packing');
        Route::resource('sale_return', SaleReturnController::class);
        Route::resource('process_return', ProcessReturnController::class);
        Route::resource('purchase_return', PurchaseReturnController::class);
    });

    //others
    Route::resource('states', StateController::class);
    Route::resource('cities', CityController::class);

    //Reports
    Route::get('/reports/warehouse_stock', [ReportsController::class, 'warehouse_stock'])->name('warehouse_stock');
    Route::get('/reports/yarn_to_sizing_register', [ReportsController::class, 'yarn_to_sizing_register'])->name('yarn_to_sizing_register');
    Route::get('/reports/weft_issue_report', [ReportsController::class, 'weft_issue_report'])->name('weft_issue_report');
    Route::get('/reports/stock_inward_yarn', [ReportsController::class, 'stock_inward_yarn'])->name('stock_inward_yarn');
    Route::get('/reports/opening_closing_balance', [ReportsController::class, 'opening_closing_balance'])->name('opening_closing_balance');
    Route::get('/reports/sizing_reconciliation', [ReportsController::class, 'sizing_reconciliation'])->name('sizing_reconciliation');
    Route::get('/reports/stock_inward_yarn_graph', [ReportsController::class, 'stock_inward_yarn_graph'])->name('stock_inward_yarn_graph');
    Route::get('/reports/location_wise_yarn_stock', [ReportsController::class, 'location_wise_yarn_stock'])->name('location_wise_yarn_stock');
    Route::get('/reports/yarn_entry_in_out', [ReportsController::class, 'yarn_entry_in_out'])->name('yarn_entry_in_out');
    Route::get('/reports/yarn_invoice_report', [ReportsController::class, 'yarn_invoice_report'])->name('yarn_invoice_report');
    Route::get('/reports/waiting_for_packing', [ReportsController::class, 'waiting_for_packing'])->name('waiting_for_packing');
    Route::get('/reports/export_outstanding', [ReportsController::class, 'export_outstanding'])->name('export_outstanding');
    Route::get('/reports/export_outstanding_new', [ReportsController::class, 'export_outstanding_new'])->name('export_outstanding_new');
    Route::get('/reports/beam_inward', [ReportsController::class, 'beam_inward'])->name('beam_inward');
    Route::get('/reports/beam_inward_against_job_contract', [ReportsController::class, 'beam_inward_against_job_contract'])->name('beam_inward_against_job_contract');
    Route::get('/reports/weft_req_report', [ReportsController::class, 'weft_req_report'])->name('weft_req_report');
    Route::get('/reports/piece_bale_stock', [ReportsController::class, 'piece_bale_stock'])->name('piece_bale_stock');
    Route::get('/reports/piece_join', [ReportsController::class, 'piece_join'])->name('piece_join');
    Route::get('/reports/inventory_fabric', [ReportsController::class, 'inventory_fabric'])->name('inventory_fabric');
    Route::get('/reports/quality_inventory_fabric', [ReportsController::class, 'quality_inventory_fabric'])->name('quality_inventory_fabric');
    Route::get('/reports/quality_fabric_outward', [ReportsController::class, 'quality_fabric_outward'])->name('quality_fabric_outward');
    Route::get('/reports/domestic_order_status', [ReportsController::class, 'domestic_order_status'])->name('domestic_order_status');
    Route::get('/reports/domestic_order_status_finished', [ReportsController::class, 'domestic_order_status_finished'])->name('domestic_order_status_finished');
    Route::get('/reports/export_sales_order_status', [ReportsController::class, 'export_sales_order_status'])->name('export_sales_order_status');
    Route::get('/reports/export_sales_order_status_finished', [ReportsController::class, 'export_sales_order_status_finished'])->name('export_sales_order_status_finished');
    Route::get('/reports/fabric_po_status_purchase', [ReportsController::class, 'fabric_po_status_purchase'])->name('fabric_po_status_purchase');
    Route::get('/reports/fabric_po_status_jobwork', [ReportsController::class, 'fabric_po_status_jobwork'])->name('fabric_po_status_jobwork');
    Route::get('/reports/jobwork_fabric_inward', [ReportsController::class, 'jobwork_fabric_inward'])->name('jobwork_fabric_inward');
    Route::get('/reports/purchase_fabric_inward', [ReportsController::class, 'purchase_fabric_inward'])->name('purchase_fabric_inward');
    Route::get('/reports/packed_fabric_pending_for_dispatch', [ReportsController::class, 'packed_fabric_pending_for_dispatch'])->name('packed_fabric_pending_for_dispatch');
    Route::get('/reports/fabric_obcb', [ReportsController::class, 'fabric_obcb'])->name('fabric_obcb');
    Route::get('/reports/so_status', [ReportsController::class, 'so_status'])->name('so_status');
    Route::get('/reports/yarn_po_status', [ReportsController::class, 'yarn_po_status'])->name('yarn_po_status');

    //Ajax
    Route::post('/changeCompany', [AjaxController::class, 'changeCompany']);
    Route::get('/getSelvedgeDetail', [AjaxController::class, 'getSelvedgeDetail']);
    Route::get('/getYarnDetail', [AjaxController::class, 'getYarnDetail']);
});