<?php
use App\Http\Controllers\Order\Admin\Create as OrderCreate;
use App\Http\Controllers\Order\Admin\Destroy as OrderDestroy;
use App\Http\Controllers\Order\Admin\Edit as OrderEdit;
use App\Http\Controllers\Order\Admin\ExportExcel as OrderExportExcel;
use App\Http\Controllers\Order\Admin\Index as OrderIndex;
use App\Http\Controllers\Order\Admin\InitTable as OrderInitTable;
use App\Http\Controllers\Order\Admin\Options as OrderOptions;
use App\Http\Controllers\Order\Admin\Show as OrderShow;
use App\Http\Controllers\Order\Admin\Store as OrderStore;
use App\Http\Controllers\Order\Admin\TableData as OrderTableData;
use App\Http\Controllers\Order\Admin\Update as OrderUpdate;
use App\Http\Controllers\Customer\Admin\Create as CustomerCreate;
use App\Http\Controllers\Customer\Admin\Destroy as CustomerDestroy;
use App\Http\Controllers\Customer\Admin\Edit as CustomerEdit;
use App\Http\Controllers\Customer\Admin\ExportExcel as CustomerExportExcel;
use App\Http\Controllers\Customer\Admin\Index as CustomerIndex;
use App\Http\Controllers\Customer\Admin\InitTable as CustomerInitTable;
use App\Http\Controllers\Customer\Admin\Options as CustomerOptions;
use App\Http\Controllers\Customer\Admin\Show as CustomerShow;
use App\Http\Controllers\Customer\Admin\Store as CustomerStore;
use App\Http\Controllers\Customer\Admin\TableData as CustomerTableData;
use App\Http\Controllers\Customer\Admin\Update as CustomerUpdate;
use App\Http\Controllers\Product\Admin\Create as ProductCreate;
use App\Http\Controllers\Product\Admin\Destroy as ProductDestroy;
use App\Http\Controllers\Product\Admin\Edit as ProductEdit;
use App\Http\Controllers\Product\Admin\ExportExcel as ProductExportExcel;
use App\Http\Controllers\Product\Admin\Index as ProductIndex;
use App\Http\Controllers\Product\Admin\InitTable as ProductInitTable;
use App\Http\Controllers\Product\Admin\Options as ProductOptions;
use App\Http\Controllers\Product\Admin\Show as ProductShow;
use App\Http\Controllers\Product\Admin\Store as ProductStore;
use App\Http\Controllers\Product\Admin\TableData as ProductTableData;
use App\Http\Controllers\Product\Admin\Update as ProductUpdate;

Route::namespace('')
    ->group(function () {
        Route::prefix('customers')
            ->as('customers.')
            ->group(function () {
                Route::get('', CustomerIndex::class)->name('index');
                Route::get('create', CustomerCreate::class)->name('create');
                Route::post('', CustomerStore::class)->name('store');
                Route::get('{customer}/edit', CustomerEdit::class)->name('edit');
                Route::patch('{customer}', CustomerUpdate::class)->name('update');
                Route::delete('{customer}', CustomerDestroy::class)->name('destroy');

                Route::get('initTable', CustomerInitTable::class)->name('initTable');
                Route::get('tableData', CustomerTableData::class)->name('tableData');
                Route::get('exportExcel', CustomerExportExcel::class)->name('exportExcel');

                Route::get('options', CustomerOptions::class)->name('options');
            });
    });
Route::namespace('')
    ->group(function () {
        Route::prefix('orders')
            ->as('orders.')
            ->group(function () {
                Route::get('', OrderIndex::class)->name('index');
                Route::get('create', OrderCreate::class)->name('create');
                Route::post('', OrderStore::class)->name('store');
                Route::get('{order}/edit', OrderEdit::class)->name('edit');
                Route::patch('{order}', OrderUpdate::class)->name('update');
                Route::delete('{order}', OrderDestroy::class)->name('destroy');

                Route::get('initTable', OrderInitTable::class)->name('initTable');
                Route::get('tableData', OrderTableData::class)->name('tableData');
                Route::get('exportExcel', OrderExportExcel::class)->name('exportExcel');

                Route::get('options', OrderOptions::class)->name('options');
            });
    });
Route::namespace('')
    ->group(function () {
        Route::prefix('products')
            ->as('products.')
            ->group(function () {
                Route::get('', ProductIndex::class)->name('index');
                Route::get('create', ProductCreate::class)->name('create');
                Route::post('', ProductStore::class)->name('store');
                Route::get('{product}/edit', ProductEdit::class)->name('edit');
                Route::patch('{product}', ProductUpdate::class)->name('update');
                Route::delete('{product}', ProductDestroy::class)->name('destroy');

                Route::get('initTable', ProductInitTable::class)->name('initTable');
                Route::get('tableData', ProductTableData::class)->name('tableData');
                Route::get('exportExcel', ProductExportExcel::class)->name('exportExcel');

                Route::get('options', ProductOptions::class)->name('options');
            });
    });
