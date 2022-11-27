-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2022 pada 16.04
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_apotek_paramel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Menyimpan nama pelanggan',
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Menyimpan alamat pelanggan',
  `telephone` smallint(6) DEFAULT NULL COMMENT 'Menyimpan nomor telfon pelanggan',
  `status` tinyint(1) NOT NULL COMMENT 'Menyimpan status pelanggan aktif / tidak aktif',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `telephone`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pelanggan Umum', NULL, NULL, 1, '2022-11-20 02:19:05', '2022-11-20 02:19:07'),
(3, 'Alexander Evan', 'Jln. Pesona Surya Milenia', NULL, 1, '2022-11-20 02:19:09', '2022-10-25 03:32:40'),
(4, 'Gusti Bagus Wahyu', 'Jln. Rungkut Mejoyo Selatan V No. 3', 5555, 1, '2022-11-20 02:19:07', '2022-11-20 02:19:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_stock_opname`
--

CREATE TABLE `detail_stock_opname` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stock_opname_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `stock_computer` int(11) NOT NULL DEFAULT 0,
  `stock_aktual` int(11) NOT NULL,
  `stock_selisih` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_stock_opname`
--

INSERT INTO `detail_stock_opname` (`id`, `stock_opname_id`, `product_id`, `stock_computer`, `stock_aktual`, `stock_selisih`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 15, 20, 5, '2022-11-10 11:11:56', '2022-11-10 11:11:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `get_cashflow`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `get_cashflow` (
`bulan` varchar(50)
,`pemasukan` double
,`pengeluaran` double
,`piutang` double
,`hutang` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `get_product`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `get_product` (
`id` bigint(20) unsigned
,`product_type_id` bigint(20) unsigned
,`product_category_id` bigint(20) unsigned
,`product_uom_id` bigint(20) unsigned
,`nama` varchar(255)
,`min_stock` double
,`diskon` double
,`keuntungan` double
,`created_at` timestamp
,`updated_at` timestamp
,`category` varchar(255)
,`uom` varchar(255)
,`type` varchar(255)
,`harga` int(11)
,`expired_date` date
,`stok_barang` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_10_06_215330_create_customers_table', 1),
(5, '2022_10_07_094114_create_suppliers_table', 1),
(6, '2022_10_07_094406_create_product_uoms_table', 1),
(7, '2022_10_07_114126_create_product_types_table', 1),
(8, '2022_10_07_120544_create_product_categories_table', 1),
(9, '2022_10_07_120825_create_purchases_order_table', 1),
(10, '2022_10_07_121030_create_sales_order_table', 1),
(11, '2022_10_08_094224_create_products_table', 1),
(12, '2022_10_12_213850_create_stock_in_table', 1),
(13, '2022_10_12_214317_create_stock_out_table', 1),
(14, '2022_10_24_221910_create_stock_opnames_table', 1),
(15, '2022_10_24_222025_create_detail_stock_opname', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `months`
--

CREATE TABLE `months` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `months`
--

INSERT INTO `months` (`id`, `name`) VALUES
(1, 'Januari'),
(2, 'Februari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agustus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'November'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_type_id` bigint(20) UNSIGNED NOT NULL,
  `product_category_id` bigint(20) UNSIGNED NOT NULL,
  `product_uom_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_stock` double NOT NULL,
  `diskon` double NOT NULL,
  `keuntungan` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `product_type_id`, `product_category_id`, `product_uom_id`, `nama`, `min_stock`, `diskon`, `keuntungan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Flucodin 500Mg', 50, 5, 1000, '2022-11-18 13:18:29', '2022-11-18 13:18:30'),
(2, 2, 2, 2, 'Paracetamol 1000Mg', 40, 10, 100, '2022-11-18 13:18:29', '2022-11-18 13:18:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_type_id` bigint(20) UNSIGNED NOT NULL COMMENT 'Menyimpan Jenis Produk Seperti Obat-obatan atau Peralatan Medis',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nama Kategori',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Deskripsi Kategori',
  `created_at` timestamp NULL DEFAULT NULL COMMENT 'Tanggal ditambahkan ',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT 'Tanggal dirubah'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_categories`
--

INSERT INTO `product_categories` (`id`, `product_type_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Categories A', 'Description of Categories A', NULL, NULL),
(2, 2, 'Categories B', 'Description of Categories B', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_types`
--

CREATE TABLE `product_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_types`
--

INSERT INTO `product_types` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Type A', 'Description of type A', NULL, NULL),
(2, 'Type B', 'Description of Type B', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_uom`
--

CREATE TABLE `product_uom` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nama Satuan barang seperti table, strip dan pcs',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Deskripsi satuan barang',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_uom`
--

INSERT INTO `product_uom` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Tablet', 'Description of Uom A', NULL, NULL),
(2, 'Strip', 'Description of Uom B', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `employe_id` bigint(20) UNSIGNED NOT NULL,
  `no_transaction` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_date` datetime NOT NULL,
  `payment_method` enum('Tunai','Kredit') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_jatuh_tempo` date DEFAULT NULL,
  `tanggal_pelunasan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` double NOT NULL,
  `state` enum('Lunas','Belum Lunas','Draft') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `purchase_order`
--

INSERT INTO `purchase_order` (`id`, `supplier_id`, `employe_id`, `no_transaction`, `transaction_date`, `payment_method`, `tanggal_jatuh_tempo`, `tanggal_pelunasan`, `total`, `state`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1', '2022-11-25 11:25:39', 'Kredit', '2022-10-25', '2022-11-26', 10000, 'Lunas', '2022-11-01 11:19:59', '2022-11-01 11:19:59'),
(2, 1, 1, '2', '2022-11-25 11:26:11', 'Kredit', '2022-10-25', '2022-11-17', 50000, 'Lunas', '2022-11-01 11:20:00', '2022-11-01 11:20:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales_order`
--

CREATE TABLE `sales_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `no_transaction` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_date` datetime NOT NULL,
  `payment_method` enum('Cash','BPJS') COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_bpjs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` double NOT NULL,
  `state` enum('Lunas','Belum Lunas') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pelunasan` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sales_order`
--

INSERT INTO `sales_order` (`id`, `customer_id`, `employee_id`, `no_transaction`, `transaction_date`, `payment_method`, `no_bpjs`, `total`, `state`, `tanggal_pelunasan`, `created_at`, `updated_at`) VALUES
(12, 1, 2, '1', '2022-11-27 14:52:44', 'Cash', 'Tidak Ada', 74250, 'Lunas', NULL, '2022-11-27 06:52:44', '2022-11-27 06:52:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stock_in`
--

CREATE TABLE `stock_in` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purchase_order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `expired_date` date DEFAULT NULL,
  `jumlah` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `stock_in`
--

INSERT INTO `stock_in` (`id`, `purchase_order_id`, `product_id`, `expired_date`, `jumlah`, `diskon`, `harga`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-11-16', 55, 5, 6000, '2022-11-19 13:34:14', '2022-11-27 06:52:44'),
(2, 1, 2, '2022-12-25', 1, 5, 7500, '2022-11-10 12:23:29', '2022-11-10 12:23:32'),
(3, 2, 2, '2022-11-16', 7, 5, 9000, '2022-10-10 12:23:28', '2022-11-27 06:52:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stock_opname`
--

CREATE TABLE `stock_opname` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_opname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulan` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `operator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `state` enum('Draft','Finish') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `stock_opname`
--

INSERT INTO `stock_opname` (`id`, `no_opname`, `bulan`, `tanggal_mulai`, `tanggal_berakhir`, `operator`, `created_at`, `updated_at`, `state`) VALUES
(1, '1', 12, '2022-11-10', '2022-11-10', 'bAGUS', '2022-11-10 07:32:37', '2022-11-10 07:32:38', 'Draft');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stock_out`
--

CREATE TABLE `stock_out` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sales_order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keuntungan` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `stock_out`
--

INSERT INTO `stock_out` (`id`, `sales_order_id`, `product_id`, `jumlah`, `keuntungan`, `diskon`, `harga`, `created_at`, `updated_at`) VALUES
(5, 12, 1, 5, 1000, 5, 6000, '2022-11-27 06:52:44', '2022-11-27 06:52:44'),
(6, 12, 2, 5, 100, 10, 9000, '2022-11-27 06:52:44', '2022-11-27 06:52:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Menyimpan nama supplier',
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Menyimpan alamat supplier',
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Menyimpan nomor telfon supplier',
  `bank_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Menyimpan nomor rekening supplier',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Menyimpan keterangan atau deskripsi tambahan untuk supplier',
  `status` tinyint(1) NOT NULL COMMENT 'Menandakan supplier ini masih aktif mengirim barang atau tidak',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `address`, `telephone`, `bank_address`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Supplier A', 'Addres of supplier A', '222222', 'bank 222', 'description of suplier a', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Username A', 'usera@usera.com', '2022-10-25 11:24:34', '123', '123', NULL, NULL),
(2, 'bagus', 'qwe@gmail.com', NULL, '$2y$10$fPOwjReqqwpYpCajq8Pqwe9e8m3Eibt.n.VHBTfXhdk2LhXm8ccwq', NULL, '2022-10-25 07:12:42', '2022-10-25 07:12:42');

-- --------------------------------------------------------

--
-- Struktur untuk view `get_cashflow`
--
DROP TABLE IF EXISTS `get_cashflow`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_cashflow`  AS SELECT `m`.`name` AS `bulan`, (select sum(`so`.`total`) from `sales_order` `so` where month(`so`.`transaction_date`) = `m`.`id` and `so`.`state` = 'Lunas') AS `pemasukan`, (select sum(`po`.`total`) AS `pengeluaran` from `purchase_order` `po` where month(`po`.`transaction_date`) = `m`.`id` and `po`.`state` = 'Lunas') AS `pengeluaran`, (select sum(`po`.`total`) AS `pengeluaran` from `purchase_order` `po` where month(`po`.`transaction_date`) = `m`.`id` and `po`.`state` = 'Belum Lunas') AS `piutang`, (select sum(`so`.`total`) from `sales_order` `so` where month(`so`.`transaction_date`) = `m`.`id` and `so`.`state` = 'Belum Lunas') AS `hutang` FROM `months` AS `m` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `get_product`
--
DROP TABLE IF EXISTS `get_product`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_product`  AS SELECT `p`.`id` AS `id`, `p`.`product_type_id` AS `product_type_id`, `p`.`product_category_id` AS `product_category_id`, `p`.`product_uom_id` AS `product_uom_id`, `p`.`nama` AS `nama`, `p`.`min_stock` AS `min_stock`, `p`.`diskon` AS `diskon`, `p`.`keuntungan` AS `keuntungan`, `p`.`created_at` AS `created_at`, `p`.`updated_at` AS `updated_at`, `c`.`name` AS `category`, `u`.`name` AS `uom`, `t`.`name` AS `type`, (select `si`.`harga` from `stock_in` `si` where `si`.`product_id` = `p`.`id` and `si`.`jumlah` > 0 order by case when `p`.`product_type_id` = 1 then `si`.`expired_date` end,case when `p`.`product_type_id` = 2 then `si`.`created_at` end limit 1) AS `harga`, (select `si`.`expired_date` from `stock_in` `si` where `si`.`product_id` = `p`.`id` and `si`.`jumlah` > 0 order by `si`.`expired_date` limit 1) AS `expired_date`, (select sum(`si`.`jumlah`) from `stock_in` `si` where `si`.`product_id` = `p`.`id`) AS `stok_barang` FROM (((`products` `p` join `product_categories` `c` on(`p`.`product_category_id` = `c`.`id`)) join `product_uom` `u` on(`p`.`product_uom_id` = `u`.`id`)) join `product_types` `t` on(`p`.`product_type_id` = `t`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_stock_opname`
--
ALTER TABLE `detail_stock_opname`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_stock_opname_stock_opname_id_foreign` (`stock_opname_id`),
  ADD KEY `detail_stock_opname_product_id_foreign` (`product_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `months`
--
ALTER TABLE `months`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_product_type_id_foreign` (`product_type_id`),
  ADD KEY `products_product_category_id_foreign` (`product_category_id`),
  ADD KEY `products_product_uom_id_foreign` (`product_uom_id`);

--
-- Indeks untuk tabel `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_categories_product_type_id_foreign` (`product_type_id`);

--
-- Indeks untuk tabel `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product_uom`
--
ALTER TABLE `product_uom`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchase_order_supplier_id_foreign` (`supplier_id`),
  ADD KEY `purchase_order_employe_id_foreign` (`employe_id`);

--
-- Indeks untuk tabel `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_order_customer_id_foreign` (`customer_id`),
  ADD KEY `sales_order_employee_id_foreign` (`employee_id`);

--
-- Indeks untuk tabel `stock_in`
--
ALTER TABLE `stock_in`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stock_in_purchase_order_id_foreign` (`purchase_order_id`),
  ADD KEY `stock_in_product_id_foreign` (`product_id`);

--
-- Indeks untuk tabel `stock_opname`
--
ALTER TABLE `stock_opname`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stock_out`
--
ALTER TABLE `stock_out`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stock_out_sales_order_id_foreign` (`sales_order_id`),
  ADD KEY `stock_out_product_id_foreign` (`product_id`);

--
-- Indeks untuk tabel `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `detail_stock_opname`
--
ALTER TABLE `detail_stock_opname`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `months`
--
ALTER TABLE `months`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `product_uom`
--
ALTER TABLE `product_uom`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `stock_in`
--
ALTER TABLE `stock_in`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `stock_opname`
--
ALTER TABLE `stock_opname`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `stock_out`
--
ALTER TABLE `stock_out`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_stock_opname`
--
ALTER TABLE `detail_stock_opname`
  ADD CONSTRAINT `detail_stock_opname_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `detail_stock_opname_stock_opname_id_foreign` FOREIGN KEY (`stock_opname_id`) REFERENCES `stock_opname` (`id`);

--
-- Ketidakleluasaan untuk tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_product_category_id_foreign` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`id`),
  ADD CONSTRAINT `products_product_type_id_foreign` FOREIGN KEY (`product_type_id`) REFERENCES `product_types` (`id`),
  ADD CONSTRAINT `products_product_uom_id_foreign` FOREIGN KEY (`product_uom_id`) REFERENCES `product_uom` (`id`);

--
-- Ketidakleluasaan untuk tabel `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_product_type_id_foreign` FOREIGN KEY (`product_type_id`) REFERENCES `product_types` (`id`);

--
-- Ketidakleluasaan untuk tabel `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD CONSTRAINT `purchase_order_employe_id_foreign` FOREIGN KEY (`employe_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `purchase_order_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`);

--
-- Ketidakleluasaan untuk tabel `sales_order`
--
ALTER TABLE `sales_order`
  ADD CONSTRAINT `sales_order_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `sales_order_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `stock_in`
--
ALTER TABLE `stock_in`
  ADD CONSTRAINT `stock_in_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `stock_in_purchase_order_id_foreign` FOREIGN KEY (`purchase_order_id`) REFERENCES `purchase_order` (`id`);

--
-- Ketidakleluasaan untuk tabel `stock_out`
--
ALTER TABLE `stock_out`
  ADD CONSTRAINT `stock_out_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `stock_out_sales_order_id_foreign` FOREIGN KEY (`sales_order_id`) REFERENCES `sales_order` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
