-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 03, 2022 at 12:09 PM
-- Server version: 5.7.33
-- PHP Version: 8.1.3

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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Menyimpan nama pelanggan',
  `address` longtext COLLATE utf8mb4_unicode_ci COMMENT 'Menyimpan alamat pelanggan',
  `telephone` smallint(6) DEFAULT NULL COMMENT 'Menyimpan nomor telfon pelanggan',
  `status` tinyint(1) NOT NULL COMMENT 'Menyimpan status pelanggan aktif / tidak aktif',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `telephone`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Alexander Evan', 'Jln. Pesona Surya Milenia', NULL, 1, NULL, '2022-10-25 03:32:40'),
(4, 'Gusti Bagus Wahyu', 'Jln. Rungkut Mejoyo Selatan V No. 3', 5555, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_stock_opname`
--

CREATE TABLE `detail_stock_opname` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stock_opname_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `stock_computer` datetime NOT NULL,
  `stock_aktual` int(11) NOT NULL,
  `stock_selisih` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `get_product`
-- (See below for the actual view)
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
,`harga` bigint(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
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
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
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
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_type_id`, `product_category_id`, `product_uom_id`, `nama`, `min_stock`, `diskon`, `keuntungan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Flucodin 500Mg', 50, 5, 1000, NULL, NULL),
(2, 2, 2, 2, 'Paracetamol 1000Mg', 40, 10, 100, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
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
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `product_type_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Categories A', 'Description of Categories A', NULL, NULL),
(2, 2, 'Categories B', 'Description of Categories B', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Type A', 'Description of type A', NULL, NULL),
(2, 'Type B', 'Description of Type B', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_uom`
--

CREATE TABLE `product_uom` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nama Satuan barang seperti table, strip dan pcs',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Deskripsi satuan barang',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_uom`
--

INSERT INTO `product_uom` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Tablet', 'Description of Uom A', NULL, NULL),
(2, 'Strip', 'Description of Uom B', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `employe_id` bigint(20) UNSIGNED NOT NULL,
  `no_transaction` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_date` datetime NOT NULL,
  `payment_method` enum('Tunai','Kredit') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_jatuh_tempo` date NOT NULL,
  `tanggal_pelunasan` date NOT NULL,
  `total` double NOT NULL,
  `state` enum('Lunas','Belum Lunas','Draft') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`id`, `supplier_id`, `employe_id`, `no_transaction`, `transaction_date`, `payment_method`, `tanggal_jatuh_tempo`, `tanggal_pelunasan`, `total`, `state`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1', '2022-10-25 11:25:39', 'Kredit', '2022-10-25', '2022-10-25', 10000, 'Lunas', '2022-11-01 11:19:59', '2022-11-01 11:19:59'),
(2, 1, 1, '2', '2022-10-25 11:26:11', 'Kredit', '2022-10-25', '2022-10-25', 50000, 'Belum Lunas', '2022-11-01 11:20:00', '2022-11-01 11:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`id`, `customer_id`, `employee_id`, `no_transaction`, `transaction_date`, `payment_method`, `no_bpjs`, `total`, `state`, `created_at`, `updated_at`) VALUES
(78, 4, 3, '1', '2022-11-03 12:08:46', 'Cash', 'Lunass', 195000, 'Lunas', '2022-11-03 04:08:46', '2022-11-03 04:08:46'),
(79, 4, 3, '1', '2022-11-03 12:09:09', 'Cash', 'Lunass', 133500, 'Lunas', '2022-11-03 04:09:09', '2022-11-03 04:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `stock_in`
--

CREATE TABLE `stock_in` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purchase_order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `expired_date` datetime NOT NULL,
  `jumlah` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock_in`
--

INSERT INTO `stock_in` (`id`, `purchase_order_id`, `product_id`, `expired_date`, `jumlah`, `diskon`, `harga`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-10-25 11:28:00', 45, 5, 6000, NULL, '2022-11-03 04:08:46'),
(2, 1, 2, '2022-10-25 11:28:00', 0, 5, 8000, NULL, '2022-11-03 04:09:09'),
(3, 2, 2, '2022-10-27 11:28:00', 20, 5, 9000, NULL, '2022-11-03 04:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `stock_opname`
--

CREATE TABLE `stock_opname` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_opname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulan` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `operator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock_out`
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
-- Dumping data for table `stock_out`
--

INSERT INTO `stock_out` (`id`, `sales_order_id`, `product_id`, `jumlah`, `keuntungan`, `diskon`, `harga`, `created_at`, `updated_at`) VALUES
(73, 78, 1, 10, 1000, 5, 6000, NULL, NULL),
(74, 78, 2, 15, 100, 10, 9000, NULL, NULL),
(75, 79, 2, 20, 100, 10, 9000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Menyimpan nama supplier',
  `address` longtext COLLATE utf8mb4_unicode_ci COMMENT 'Menyimpan alamat supplier',
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Menyimpan nomor telfon supplier',
  `bank_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Menyimpan nomor rekening supplier',
  `description` longtext COLLATE utf8mb4_unicode_ci COMMENT 'Menyimpan keterangan atau deskripsi tambahan untuk supplier',
  `status` tinyint(1) NOT NULL COMMENT 'Menandakan supplier ini masih aktif mengirim barang atau tidak',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `address`, `telephone`, `bank_address`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Supplier A', 'Addres of supplier A', '222222', 'bank 222', 'description of suplier a', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Username A', 'usera@usera.com', '2022-10-25 11:24:34', '123', '123', NULL, NULL),
(2, 'bagus', 'qwe@gmail.com', NULL, '$2y$10$fPOwjReqqwpYpCajq8Pqwe9e8m3Eibt.n.VHBTfXhdk2LhXm8ccwq', NULL, '2022-10-25 07:12:42', '2022-10-25 07:12:42'),
(3, 'Evan', 'evan@evan.com', NULL, '$2y$10$9MNN3zLrIep527vIh.PEe.d3/Cfo7owXffCVDU7Ix2wUquta9vVdy', NULL, '2022-11-03 02:13:17', '2022-11-03 02:13:17');

-- --------------------------------------------------------

--
-- Structure for view `get_product`
--
DROP TABLE IF EXISTS `get_product`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `get_product`  AS SELECT `p`.`id` AS `id`, `p`.`product_type_id` AS `product_type_id`, `p`.`product_category_id` AS `product_category_id`, `p`.`product_uom_id` AS `product_uom_id`, `p`.`nama` AS `nama`, `p`.`min_stock` AS `min_stock`, `p`.`diskon` AS `diskon`, `p`.`keuntungan` AS `keuntungan`, `p`.`created_at` AS `created_at`, `p`.`updated_at` AS `updated_at`, `c`.`name` AS `category`, `u`.`name` AS `uom`, `t`.`name` AS `type`, (select `s`.`harga` from `stock_in` `s` where ((`s`.`product_id` = `p`.`id`) and (`s`.`jumlah` > 0)) order by `s`.`expired_date`,`s`.`created_at` desc limit 1) AS `harga` FROM (((`products` `p` join `product_categories` `c` on((`p`.`product_category_id` = `c`.`id`))) join `product_uom` `u` on((`p`.`product_uom_id` = `u`.`id`))) join `product_types` `t` on((`p`.`product_type_id` = `t`.`id`)))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_stock_opname`
--
ALTER TABLE `detail_stock_opname`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_stock_opname_stock_opname_id_foreign` (`stock_opname_id`),
  ADD KEY `detail_stock_opname_product_id_foreign` (`product_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_product_type_id_foreign` (`product_type_id`),
  ADD KEY `products_product_category_id_foreign` (`product_category_id`),
  ADD KEY `products_product_uom_id_foreign` (`product_uom_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_categories_product_type_id_foreign` (`product_type_id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_uom`
--
ALTER TABLE `product_uom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchase_order_supplier_id_foreign` (`supplier_id`),
  ADD KEY `purchase_order_employe_id_foreign` (`employe_id`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_order_customer_id_foreign` (`customer_id`),
  ADD KEY `sales_order_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `stock_in`
--
ALTER TABLE `stock_in`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stock_in_purchase_order_id_foreign` (`purchase_order_id`),
  ADD KEY `stock_in_product_id_foreign` (`product_id`);

--
-- Indexes for table `stock_opname`
--
ALTER TABLE `stock_opname`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_out`
--
ALTER TABLE `stock_out`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stock_out_sales_order_id_foreign` (`sales_order_id`),
  ADD KEY `stock_out_product_id_foreign` (`product_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detail_stock_opname`
--
ALTER TABLE `detail_stock_opname`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_uom`
--
ALTER TABLE `product_uom`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `stock_in`
--
ALTER TABLE `stock_in`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stock_opname`
--
ALTER TABLE `stock_opname`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock_out`
--
ALTER TABLE `stock_out`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_stock_opname`
--
ALTER TABLE `detail_stock_opname`
  ADD CONSTRAINT `detail_stock_opname_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `detail_stock_opname_stock_opname_id_foreign` FOREIGN KEY (`stock_opname_id`) REFERENCES `stock_opname` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_product_category_id_foreign` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`id`),
  ADD CONSTRAINT `products_product_type_id_foreign` FOREIGN KEY (`product_type_id`) REFERENCES `product_types` (`id`),
  ADD CONSTRAINT `products_product_uom_id_foreign` FOREIGN KEY (`product_uom_id`) REFERENCES `product_uom` (`id`);

--
-- Constraints for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_product_type_id_foreign` FOREIGN KEY (`product_type_id`) REFERENCES `product_types` (`id`);

--
-- Constraints for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD CONSTRAINT `purchase_order_employe_id_foreign` FOREIGN KEY (`employe_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `purchase_order_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`);

--
-- Constraints for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD CONSTRAINT `sales_order_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `sales_order_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `stock_in`
--
ALTER TABLE `stock_in`
  ADD CONSTRAINT `stock_in_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `stock_in_purchase_order_id_foreign` FOREIGN KEY (`purchase_order_id`) REFERENCES `purchase_order` (`id`);

--
-- Constraints for table `stock_out`
--
ALTER TABLE `stock_out`
  ADD CONSTRAINT `stock_out_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `stock_out_sales_order_id_foreign` FOREIGN KEY (`sales_order_id`) REFERENCES `sales_order` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;