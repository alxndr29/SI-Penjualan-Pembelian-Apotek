<div class="sidebar-wrapper">
	<div>
		<div class="logo-wrapper">
			<a href="<?php echo e(route('dashboard')); ?>"><img class="img-fluid for-light" src="<?php echo e(asset('assets/images/logo/logo.png')); ?>" alt=""><img class="img-fluid for-dark" src="<?php echo e(asset('assets/images/logo/logo_dark.png')); ?>" alt=""></a>
			<div class="back-btn"><i class="fa fa-angle-left"></i></div>
			<div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
		</div>
		<div class="logo-icon-wrapper"><a href="<?php echo e(route('dashboard')); ?>"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a></div>
		<nav class="sidebar-main">
			<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
			<div id="sidebar-menu">
				<ul class="sidebar-links" id="simple-bar">
					<li class="back-btn">
						<a href="<?php echo e(route('dashboard')); ?>"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a>
						<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
					</li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Home</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='dashboard' ? 'active' : ''); ?>" href="<?php echo e(route('dashboard')); ?>"><i data-feather="home"> </i><span>Dashboard</span></a></li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Transaksi</h6>
                        </div>
                    </li>
                    <li class="sidebar-list">
                           <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == 'transaksi/pembelian' ? 'active' : ''); ?>" href="#"><i class="fa fa-cart-shopping fa-md mx-1"></i><span>Pembelian</span>
                            <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == 'transaksi/pembelian' ? 'down' : 'right'); ?>"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == 'transaksi/pembelian' ? 'block;' : 'none;'); ?>">
                            <li><a class="lan-4 <?php echo e(Route::currentRouteName()=='transaksi-pembelian.index' ? 'active' : ''); ?>" href="<?php echo e(route('transaksi-pembelian.index')); ?>">Buat Transaksi Baru</a></li>
                            <li><a class="lan-5 <?php echo e(Route::currentRouteName()=='transaksi-pembelian.index' ? 'active' : ''); ?>" href="<?php echo e(route('transaksi-pembelian.index')); ?>">Laporan Bulanan</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == 'transaksi/penjualan' ? 'active' : ''); ?>" href="#"><i class="fa fa-exchange fa-md mx-1"></i><span>Penjualan</span>
                            <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == 'transaksi/penjualan' ? 'down' : 'right'); ?>"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == 'transaksi/penjualan' ? 'block;' : 'none;'); ?>">
                            <li><a class="lan-4 <?php echo e(Route::currentRouteName()=='transaksi-penjualan.index' ? 'active' : ''); ?>" href="<?php echo e(route('transaksi-penjualan.index')); ?>">Buat Transaksi Baru</a></li>
                            <li><a class="lan-4 <?php echo e(Route::currentRouteName()=='index' ? 'active' : ''); ?>" href="<?php echo e(route('index')); ?>">Transaksi Hari Ini</a></li>
                            <li><a class="lan-5 <?php echo e(Route::currentRouteName()=='transaksi-pembelian.index' ? 'active' : ''); ?>" href="<?php echo e(route('transaksi-pembelian.index')); ?>">Laporan Bulanan</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Penyimpanan</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='stok-barang' ? 'active' : ''); ?>" href="<?php echo e(route('stok-barang')); ?>"><i class="fa fa-warehouse fa-md mx-1"> </i><span>Stok Barang</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='barang-masuk' ? 'active' : ''); ?>" href="<?php echo e(route('barang-masuk')); ?>"><i class="fa fa-truck-loading fa-md mx-1"> </i><span>Barang Masuk</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='barang-keluar' ? 'active' : ''); ?>" href="<?php echo e(route('barang-keluar')); ?>"><i class="fa fa-dolly-flatbed fa-md mx-1"> </i><span>Barang Keluar</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='stock-opname.index' ? 'active' : ''); ?>" href="<?php echo e(route('stock-opname.index')); ?>"><i class="fas fa-tasks fa-md mx-1"> </i><span>Stock Opname</span></a></li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Keuangan</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='hutang' ? 'active' : ''); ?>" href="<?php echo e(route('hutang')); ?>"><i class="fa-solid fa-receipt fa-lg mx-1"> </i><span>Hutang</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='piutang' ? 'active' : ''); ?>" href="<?php echo e(route('piutang')); ?>"><i class="fa-solid fa-comments-dollar fa-md mx-1"> </i><span>Piutang</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='cashflow' ? 'active' : ''); ?>" href="<?php echo e(route('cashflow')); ?>"><i class="fa-solid fa-right-left fa-md mx-1"> </i><span>Cashflow</span></a></li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Konfigurasi</h6>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == 'konfigurasi/produk' ? 'active' : ''); ?>" href="#"><i data-feather="box"></i><span class="lan-3">Produk</span>
                            <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == 'konfigurasi/produk' ? 'down' : 'right'); ?>"></i></div>

                        </a>
                        <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == 'konfigurasi/produk' ? 'block;' : 'none;'); ?>">
                            <li><a class="lan-4 <?php echo e(Route::currentRouteName()=='daftar-produk.index' ? 'active' : ''); ?>" href="<?php echo e(route('daftar-produk.index')); ?>">Daftar Produk</a></li>
                            <li><a class="lan-5 <?php echo e(Route::currentRouteName() == 'jenis-produk.index' ? 'active' : ''); ?>" href="<?php echo e(route('jenis-produk.index')); ?>">Jenis</a></li>
                            <li><a class="lan-5 <?php echo e(Route::currentRouteName()=='satuan-produk.index' ? 'active' : ''); ?>" href="<?php echo e(route('satuan-produk.index')); ?>">Satuan</a></li>
                            <li><a class="lan-5 <?php echo e(Route::currentRouteName()=='kategori-produk.index' ? 'active' : ''); ?>" href="<?php echo e(route('kategori-produk.index')); ?>">Kategori</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='user.index' ? 'active' : ''); ?>" href="<?php echo e(route('user.index')); ?>"><i data-feather="user"> </i><span>User</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='pelanggan.index' ? 'active' : ''); ?>" href="<?php echo e(route('pelanggan.index')); ?>"><i data-feather="users"> </i><span>Pelanggan</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='supplier.index' ? 'active' : ''); ?>" href="<?php echo e(route('supplier.index')); ?>"><i data-feather="truck"> </i><span>Supplier</span></a></li>
				</ul>
			</div>
			<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
		</nav>
	</div>
</div>
<?php /**PATH C:\Users\gusba\Documents\GitHub\apotek-paramel\resources\views/layouts/simple/sidebar.blade.php ENDPATH**/ ?>