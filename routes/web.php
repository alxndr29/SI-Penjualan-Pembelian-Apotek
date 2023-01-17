<?php

use App\Http\Controllers\ProductTypesController;
use App\Http\Controllers\SalesController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PurchasesController;
use App\Http\Controllers\ProductUOMsController;
use App\Http\Controllers\ProductCategoriesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenyimpananController;
use App\Http\Controllers\StockOpnameController;
use App\Http\Controllers\KeuanganController;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('dashboard')->group(function () {
    Route::view('index', 'dashboard.index')->name('index');
});
Route::get('dashboard', [\App\Http\Controllers\HomeController::class, 'dashboardView'])->name('dashboard')->middleware('auth');
Route::get('reset-expired', [\App\Http\Controllers\HomeController::class, 'resetProdukExpired'])->name('reset-expired');
Route::prefix('transaksi')->middleware('auth')->group(function () {
    Route::prefix('penjualan')->group(function () {
        Route::resource('transaksi-penjualan', SalesController::class);
        Route::get('riwayat-transaksi', [SalesController::class, 'riwayat_transaksi'])->name('riwayat-penjualan')->middleware(['admin']);;
        Route::get('laporan-transaksi/{tglawal?}/{tglakhir?}', [SalesController::class, 'viewLaporanBulananPenjualan'])->name('laporan-penjualan')->middleware(['admin']);;
        Route::get('ambil-data-ajax-produk', [SalesController::class, 'ambil_data_ajax_produk'])->name('ambil-data-ajax-produk');
    });
    Route::prefix('pembelian')->group(function () {
        Route::resource('transaksi-pembelian', PurchasesController::class);
        Route::get('laporan-transaksi/{tglawal?}/{tglakhir?}', [PurchasesController::class, 'viewLaporanBulananPembelian'])->name('laporan-pembelian')->middleware(['admin']);;
        Route::get('laporan-transaksi', [PurchasesController::class, 'viewLaporanBulananPembelian'])->name('laporan-pembelian')->middleware(['admin']);;
        Route::get('storeWithModal', [PurchasesController::class, 'storeWithModal'])->name('storeSupplierWithModal');
    });
});
Route::prefix('penyimpanan')->middleware('auth')->group(function () {
    Route::get('stok-barang/{month?}', [PenyimpananController::class, 'stokBarangView'])->name('stok-barang')->middleware(['admin']);
    Route::get('barang-masuk', [PenyimpananController::class, 'barangMasukView'])->name('barang-masuk');
    Route::get('barang-keluar', [PenyimpananController::class, 'barangKeluarView'])->name('barang-keluar');
    Route::resource('stock-opname', StockOpnameController::class)->middleware(['admin']);
});
Route::prefix('keuangan')->middleware('auth')->group(function () {
    Route::get('hutang', [KeuanganController::class, 'hutangView'])->name('hutang');
    Route::post('showModalHutang', [KeuanganController::class, 'showModalHutang'])->name('showModalHutang');
    Route::post('showModalPurchaseOrder', [KeuanganController::class, 'showModalPurchaseOrder'])->name('showModalPurchaseOrder');
    Route::get('UpdateStatusHutang/{id}', [KeuanganController::class, 'UpdateStatusHutang'])->name('setStatusHutang');

    Route::get('piutang', [KeuanganController::class, 'piutangView'])->name('piutang');
    Route::post('showModalPiutang', [KeuanganController::class, 'showModalPiutang'])->name('showModalPiutang');
    Route::post('showModalSalesOrder', [KeuanganController::class, 'showModalSalesOrder'])->name('showModalSalesOrder');
    Route::get('UpdateStatusPiutang/{id}', [KeuanganController::class, 'UpdateStatusPiutang'])->name('setStatusPiutang');

    Route::get('cashflow', [KeuanganController::class, 'cashFlowView'])->name('cashflow');
});
Route::prefix('konfigurasi')->middleware(['auth', 'admin'])->group(function () {
    Route::prefix('produk')->group(function () {
        Route::resource('daftar-produk', ProductsController::class);
        Route::resource('jenis-produk', ProductTypesController::class);
        Route::resource('kategori-produk', ProductCategoriesController::class);
        Route::resource('satuan-produk', ProductUOMsController::class);
    });
    Route::resource('user', UserController::class);
    Route::resource('pelanggan', CustomersController::class);
    Route::resource('supplier', SupplierController::class);
});

Route::view('sample-page', 'pages.sample-page')->name('sample-page');
Route::view('landing-page', 'pages.landing-page')->name('landing-page');

Route::prefix('others')->group(function () {
    Route::view('400', 'errors.400')->name('error-400');
    Route::view('401', 'errors.401')->name('error-401');
    Route::view('403', 'errors.403')->name('error-403');
    Route::view('404', 'errors.404')->name('error-404');
    Route::view('500', 'errors.500')->name('error-500');
    Route::view('503', 'errors.503')->name('error-503');
});
Route::get('/', function () {
    return redirect()->route('dashboard');
})->name('/');

//Language Change
Route::get('lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'de', 'es', 'fr', 'pt', 'cn', 'ae'])) {
        abort(400);
    }
    Session()->put('locale', $locale);
    Session::get('locale');
    return redirect()->back();
})->name('lang');

Route::get('/clear-cache', function () {
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cache is cleared";
})->name('clear.cache');
