-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 10:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `NomorTelepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `nama`, `alamat`, `NomorTelepon`) VALUES
(80000014, 'hanif', 'Jl.Nusantara 6', '2144324112213'),
(80000015, 'Hanif', 'Jl.yangbenar', '098653718263'),
(80000016, 'hanif', 'Jl.Nusantara 6', '0859109835894'),
(80000017, 'Kazuha', 'Jl.Waymin', '0859456382'),
(80000018, 'Xingqiu', 'Jl. Liyue', '0849823432'),
(80000019, 'Raiden', 'Jl. Liyue', '0849823432');

-- --------------------------------------------------------

--
-- Table structure for table `detailpenjualan`
--

CREATE TABLE `detailpenjualan` (
  `DetailID` int(11) NOT NULL,
  `PenjualanID` int(11) NOT NULL,
  `ProdukID` int(11) NOT NULL,
  `JumlahProduk` int(11) NOT NULL,
  `Subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detailpenjualan`
--

INSERT INTO `detailpenjualan` (`DetailID`, `PenjualanID`, `ProdukID`, `JumlahProduk`, `Subtotal`) VALUES
(46, 44, 80030, 12, 0.00),
(49, 46, 80030, 12, 0.00),
(50, 46, 80030, 2, 0.00),
(51, 46, 80030, 2, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `PenjualanID` int(11) NOT NULL,
  `TanggalPenjualan` date NOT NULL,
  `TotalHarga` decimal(10,2) NOT NULL,
  `CustomerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`PenjualanID`, `TanggalPenjualan`, `TotalHarga`, `CustomerID`) VALUES
(44, '2024-03-01', 0.00, 80000019),
(45, '0000-00-00', 0.00, 80000018),
(46, '0000-00-00', 0.00, 80000019);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `ProdukID` int(11) NOT NULL,
  `NamaProduk` varchar(255) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `stok` int(11) NOT NULL,
  `thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`ProdukID`, `NamaProduk`, `harga`, `stok`, `thumbnail`) VALUES
(80015, 'MIe Lendir Original', 15000.00, 50, 'mie_lendir_original.jpg'),
(80016, 'Mie Bakso Abyss', 15000.00, 50, 'mie_bakso_iblis.jpg'),
(80017, 'Jajangmyeon', 22000.00, 50, 'jajangmyeon.jpg'),
(80018, 'Kwetiau', 15000.00, 50, 'kwtiau_original.jpg'),
(80019, 'Katsu Ramen', 18000.00, 50, 'kastu_ramen.jpg'),
(80020, 'MIe Kocok Bandung', 16000.00, 50, 'mie_kocok.jpg'),
(80021, 'Mie Goreng Jawa', 14000.00, 50, 'mie_goreng_jawa.jpg'),
(80022, 'Mie Lendir Kuah', 16000.00, 50, 'mie_lendir_kuah.jpg'),
(80023, 'Mie Aceh Spesial', 18000.00, 50, 'mie_aceh_spesial.jpg'),
(80024, 'Mie Ayam', 12000.00, 50, 'mie_ayam.jpg'),
(80025, 'Mie Rebus Belitung', 16000.00, 50, 'mie_rebus_belitung.jpg'),
(80026, 'Mie Tek Tek', 12000.00, 50, 'mie_tektek.jpg'),
(80027, 'Mie Kari Spesial', 18000.00, 50, 'mie_kari_spesial.jpg'),
(80028, 'Shoyu Ramen', 20000.00, 50, 'miso_ramen.jpg'),
(80029, 'Mie Nelongso', 16000.00, 50, 'mie_nelongso.jpg'),
(80030, 'Mie Gomak', 14000.00, 50, 'mie_gomak.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` int(11) NOT NULL,
  `NamaStaff` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `NamaStaff`, `email`, `password`, `role`) VALUES
(11, 'manager', 'manager@gmail.com', '$2y$10$1Ki260TEzAPbWtZ8LZJQTuVcqpmBbInNS9YtnDXU9gvrzcfI5x9qa', 'manager'),
(12, 'staff', 'staff@gmail.com', '$2y$10$M/hyd.GJb1Coyi8zqIHKiOqgTGk.HRc2BPlidTUMJDzZ68VQdfJGS', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  ADD PRIMARY KEY (`DetailID`),
  ADD KEY `PenjualanID` (`PenjualanID`),
  ADD KEY `ProdukID` (`ProdukID`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`PenjualanID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ProdukID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80000020;

--
-- AUTO_INCREMENT for table `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  MODIFY `DetailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `PenjualanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `ProdukID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80031;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  ADD CONSTRAINT `detailpenjualan_ibfk_1` FOREIGN KEY (`PenjualanID`) REFERENCES `penjualan` (`PenjualanID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailpenjualan_ibfk_2` FOREIGN KEY (`ProdukID`) REFERENCES `produk` (`ProdukID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
