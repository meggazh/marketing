-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Waktu pembuatan: 16. Oktober 2014 jam 12:04
-- Versi Server: 5.6.20
-- Versi PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `mticsrev1`
-- 

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `mstappr`
-- 

CREATE TABLE `mstappr` (
  `MstApprID` int(11) NOT NULL AUTO_INCREMENT,
  `MstAppr1` varchar(45) DEFAULT NULL,
  `MstAppr2` varchar(45) DEFAULT NULL,
  `MstAppr3` varchar(45) DEFAULT NULL,
  `MstAppr4` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`MstApprID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dumping data untuk tabel `mstappr`
-- 

INSERT INTO `mstappr` VALUES (1, 'aku', 'aku', 'aku', 'aku');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `mstchas`
-- 

CREATE TABLE `mstchas` (
  `MstChasID` int(11) NOT NULL AUTO_INCREMENT,
  `MstChasNo` varchar(45) DEFAULT NULL,
  `MStChasMaker` varchar(45) DEFAULT NULL,
  `MStChasModel` varchar(45) DEFAULT NULL,
  `MStChasType` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`MstChasID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dumping data untuk tabel `mstchas`
-- 

INSERT INTO `mstchas` VALUES (1, 'CH-001', 'aku', 'aku', 'aku');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `mstcrs`
-- 

CREATE TABLE `mstcrs` (
  `MstCrsID` int(11) NOT NULL AUTO_INCREMENT,
  `MstCrsName` varchar(45) DEFAULT NULL,
  `MstCrsSym` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`MstCrsID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data untuk tabel `mstcrs`
-- 

INSERT INTO `mstcrs` VALUES (2, 'Rupiah', 'IDR');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `mstcust`
-- 

CREATE TABLE `mstcust` (
  `MstCustID` int(11) NOT NULL AUTO_INCREMENT,
  `MstCustNo` varchar(45) DEFAULT NULL,
  `MstCustIDName` varchar(45) DEFAULT NULL,
  `MstCustIDAbbr` varchar(45) DEFAULT NULL,
  `MstCustIDAddress1` varchar(45) DEFAULT NULL,
  `MstCustIDAddress2` varchar(45) DEFAULT NULL,
  `MstCustIDAddress3` varchar(45) DEFAULT NULL,
  `MstCustIDPIC1` varchar(45) DEFAULT NULL,
  `MstCustIDPIC2` varchar(45) DEFAULT NULL,
  `MstCustIDPIC3` varchar(45) DEFAULT NULL,
  `MstCustIDNoTlp` varchar(45) DEFAULT NULL,
  `MstCustIDNofax` varchar(45) DEFAULT NULL,
  `MstCustIDNpwp` varchar(45) DEFAULT NULL,
  `MstPayID` int(45) DEFAULT NULL,
  `MstCustIDPICEmail1` varchar(45) DEFAULT NULL,
  `MstCustIDPICEmail2` varchar(45) DEFAULT NULL,
  `MstCustIDPICEmail3` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`MstCustID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data untuk tabel `mstcust`
-- 

INSERT INTO `mstcust` VALUES (1, '0', 'Okamoto', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', NULL, 0, 'a', '0', NULL);
INSERT INTO `mstcust` VALUES (2, '0', 'parahyangan', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', NULL, 0, 'q', '0', NULL);

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `mstemp`
-- 

CREATE TABLE `mstemp` (
  `MstEmp` int(11) NOT NULL AUTO_INCREMENT,
  `MstEmpNIK` varchar(45) DEFAULT NULL,
  `MstEmpName` varchar(45) DEFAULT NULL,
  `MstEmpDiv` varchar(45) DEFAULT NULL,
  `MstEmpEdu` varchar(45) DEFAULT NULL,
  `MstEmpReligi` varchar(45) DEFAULT NULL,
  `MstEmpBirdthDate` date DEFAULT NULL,
  `MstEmpJoinDate` date DEFAULT NULL,
  `MstEmpNoRek` varchar(45) DEFAULT NULL,
  `MstEmpNoKtp` varchar(45) DEFAULT NULL,
  `MstEmpNoNpwp` varchar(45) DEFAULT NULL,
  `MstEmpNoJamsos` varchar(45) DEFAULT NULL,
  `MstEmpAddress` varchar(45) DEFAULT NULL,
  `MstEmpPassword` varchar(45) DEFAULT NULL,
  `MstEmpLevel` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`MstEmp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data untuk tabel `mstemp`
-- 

INSERT INTO `mstemp` VALUES (1, '0', '0', '0', '0', '0', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `mstemp` VALUES (2, 'A.769', 'Fahmi rizki', 'IT', '', '', '0000-00-00', '0000-00-00', '', '', '', '0', '', '', '');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `mstgrpsales`
-- 

CREATE TABLE `mstgrpsales` (
  `MstGRPSalesID` int(11) NOT NULL AUTO_INCREMENT,
  `MstGRPSalesDesc` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`MstGRPSalesID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Dumping data untuk tabel `mstgrpsales`
-- 

INSERT INTO `mstgrpsales` VALUES (1, 'Fahmi');
INSERT INTO `mstgrpsales` VALUES (3, 'Dauds');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `mstpay`
-- 

CREATE TABLE `mstpay` (
  `MstPayID` int(11) NOT NULL AUTO_INCREMENT,
  `MstPaySyarat` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`MstPayID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Dumping data untuk tabel `mstpay`
-- 

INSERT INTO `mstpay` VALUES (1, '30hari');
INSERT INTO `mstpay` VALUES (2, '15hari');
INSERT INTO `mstpay` VALUES (3, '10hari');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `mstprice`
-- 

CREATE TABLE `mstprice` (
  `MstPriceID` int(11) NOT NULL AUTO_INCREMENT,
  `MstPriceUnitPrice` int(11) DEFAULT NULL,
  `MstPriceExpiredDate` datetime DEFAULT NULL,
  `MstPriceStatus` varchar(45) DEFAULT NULL,
  `MstProductID` int(11) NOT NULL,
  PRIMARY KEY (`MstPriceID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dumping data untuk tabel `mstprice`
-- 

INSERT INTO `mstprice` VALUES (1, 1, '0000-00-00 00:00:00', '1', 0);

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `mstproduct`
-- 

CREATE TABLE `mstproduct` (
  `MstProductID` int(11) NOT NULL AUTO_INCREMENT,
  `MstProductNo` varchar(45) DEFAULT NULL,
  `MstProductType` varchar(45) DEFAULT NULL,
  `MstProductGroupingSize` varchar(45) DEFAULT NULL,
  `MstProductSize` varchar(45) DEFAULT NULL,
  `MstProductcol` varchar(45) DEFAULT NULL,
  `MstProductVariant` varchar(45) DEFAULT NULL,
  `MstProductProductCode` varchar(45) DEFAULT NULL,
  `MstProductDescription` varchar(45) DEFAULT NULL,
  `MstProductInnerSizeL` varchar(45) DEFAULT NULL,
  `MstProductInnerSizeW` varchar(45) DEFAULT NULL,
  `MstProductInnerSizeH` varchar(45) DEFAULT NULL,
  `MstProductOuterSizeL` varchar(45) DEFAULT NULL,
  `MstProductOuterSizeW` varchar(15) NOT NULL,
  `MasProductCode` varchar(45) DEFAULT NULL,
  `MstProductOuterSizeH` varchar(45) DEFAULT NULL,
  `MstSpecID` int(11) NOT NULL,
  PRIMARY KEY (`MstProductID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dumping data untuk tabel `mstproduct`
-- 

INSERT INTO `mstproduct` VALUES (1, NULL, '1', '11', '', NULL, '1', '1', '1', '11', '1', '1', '1', '1', NULL, '1', 0);

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `mstsalespic`
-- 

CREATE TABLE `mstsalespic` (
  `MstSalesPICID` int(11) NOT NULL AUTO_INCREMENT,
  `MstSalesPICName` varchar(45) DEFAULT NULL,
  `MstSalesPICPICEmail1` varchar(45) DEFAULT NULL,
  `MstSalesPICPICEmail2` varchar(45) DEFAULT NULL,
  `MstSalesPICPICEmail3` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`MstSalesPICID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dumping data untuk tabel `mstsalespic`
-- 

INSERT INTO `mstsalespic` VALUES (1, 'Prajih', '', '', '');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `mstsatuan`
-- 

CREATE TABLE `mstsatuan` (
  `MstSatID` int(11) NOT NULL AUTO_INCREMENT,
  `MstSatName` varchar(45) DEFAULT NULL,
  `MstSatAbbr` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`MstSatID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Dumping data untuk tabel `mstsatuan`
-- 

INSERT INTO `mstsatuan` VALUES (1, 'Set', 'Set');
INSERT INTO `mstsatuan` VALUES (2, 'unit', 'Unt');
INSERT INTO `mstsatuan` VALUES (3, 'Lembar', 'Lbr');

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `mstspec`
-- 

CREATE TABLE `mstspec` (
  `MstSpecID` int(11) NOT NULL AUTO_INCREMENT,
  `MstSpecDesc` varchar(45) DEFAULT NULL,
  `MstSpecGaransiTxt` varchar(45) DEFAULT NULL,
  `MstSpecIncludeTxt` varchar(45) DEFAULT NULL,
  `MstSpecExcludeTxt` varchar(45) DEFAULT NULL,
  `MstSpecSpecialSpecTxt` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`MstSpecID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel `mstspec`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `mststatusprod`
-- 

CREATE TABLE `mststatusprod` (
  `MstStatusProdID` int(11) NOT NULL AUTO_INCREMENT,
  `MstStatusProdGroup` varchar(45) DEFAULT NULL,
  `MstStatusProdSubGroup` varchar(45) DEFAULT NULL,
  `MstStatusProdJob` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`MstStatusProdID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel `mststatusprod`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `msttypeorder`
-- 

CREATE TABLE `msttypeorder` (
  `MstTypeOrderID` int(11) NOT NULL AUTO_INCREMENT,
  `MstTypeOrder` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`MstTypeOrderID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel `msttypeorder`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `txndrawhdr`
-- 

CREATE TABLE `txndrawhdr` (
  `TxnDrawHdrID` int(11) NOT NULL AUTO_INCREMENT,
  `TxnDrawHdrNo` varchar(45) DEFAULT NULL,
  `TxnDrawDate` varchar(45) DEFAULT NULL,
  `TxnDrawHdrStatus` varchar(45) DEFAULT NULL,
  `TxnDrawTitle` varchar(45) DEFAULT NULL,
  `MstSalesPICID` int(11) NOT NULL,
  `MstCustID` int(11) NOT NULL,
  `MstProductID` int(11) NOT NULL,
  `MstEmp` int(11) NOT NULL,
  PRIMARY KEY (`TxnDrawHdrID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel `txndrawhdr`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `txnquotdtl`
-- 

CREATE TABLE `txnquotdtl` (
  `TxnQuotDtlID` int(11) NOT NULL AUTO_INCREMENT,
  `TxnQuotDtlNo` varchar(45) DEFAULT NULL,
  `TxnQuotHdrNoRev` varchar(45) DEFAULT NULL,
  `TxnQuotDtlQty` varchar(45) DEFAULT NULL,
  `TxnQuotDtlUnitPrice` varchar(45) DEFAULT NULL,
  `TxnQuotDtlDiscount` varchar(45) DEFAULT NULL,
  `TxnQuotDtlDrawNo` varchar(45) DEFAULT NULL,
  `TxnQuotDtlDrawDate` varchar(45) DEFAULT NULL,
  `TxnQuotDtlRepair` varchar(45) DEFAULT NULL,
  `MstChasID` int(11) NOT NULL,
  `MstProductID` int(11) NOT NULL,
  `TxnQuotHdrID` int(11) NOT NULL,
  `MstTypeOrderID` int(11) NOT NULL,
  `MstSatID` int(11) NOT NULL,
  PRIMARY KEY (`TxnQuotDtlID`),
  KEY `MstChasID` (`MstChasID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- Dumping data untuk tabel `txnquotdtl`
-- 

INSERT INTO `txnquotdtl` VALUES (1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0);
INSERT INTO `txnquotdtl` VALUES (2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0);
INSERT INTO `txnquotdtl` VALUES (3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0);
INSERT INTO `txnquotdtl` VALUES (4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0);
INSERT INTO `txnquotdtl` VALUES (5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

-- 
-- Struktur dari tabel `txnquothdr`
-- 

CREATE TABLE `txnquothdr` (
  `TxnQuotHdrID` int(11) NOT NULL AUTO_INCREMENT,
  `TxnQuotHdrNo` varchar(45) DEFAULT NULL,
  `TxnQuotHdrNoRev` varchar(45) DEFAULT NULL,
  `TxnQuotHdrDate` varchar(45) DEFAULT NULL,
  `TxnQuotHdrRE` varchar(45) DEFAULT NULL,
  `TxnQuotHdrTermsTxt` varchar(45) DEFAULT NULL,
  `TxnQuotHdrDiscount` int(11) DEFAULT NULL,
  `TxnQuotHdrRemarks` int(11) DEFAULT NULL,
  `TxnDrawHdrID` int(11) NOT NULL,
  `MstCustID` int(11) NOT NULL,
  `MstSalesPICID` int(11) NOT NULL,
  `MstApprID` int(11) NOT NULL,
  `MstEmp` int(11) NOT NULL,
  PRIMARY KEY (`TxnQuotHdrID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- Dumping data untuk tabel `txnquothdr`
-- 

INSERT INTO `txnquothdr` VALUES (1, '1', '11', '1', '11', '1', 1, 0, 11, 1, 0, 1, 0);
INSERT INTO `txnquothdr` VALUES (2, 'tes', 'tes', 'tes', 'tes', 'tes', 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `txnquothdr` VALUES (3, '1', '1', '1', '11', '1', 1, 0, 1, 1, 1, 1, 1);
INSERT INTO `txnquothdr` VALUES (4, '1', '1', '1', '11', '1', 1, 0, 1, 1, 1, 1, 1);
INSERT INTO `txnquothdr` VALUES (5, '1', '1', '1', '11', '1', 1, 0, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

-- 
-- Struktur dari tabel ` txnsodtl`
-- 

CREATE TABLE ` txnsodtl` (
  `TxnSoDtlID` int(11) NOT NULL AUTO_INCREMENT,
  ` TxnSoDtlQty` varchar(45) DEFAULT NULL,
  ` TxnSoDtlExpDelDate` datetime DEFAULT NULL,
  `TxnSOHdrID` int(11) NOT NULL,
  `TxnQuotDtlID` int(11) NOT NULL,
  PRIMARY KEY (`TxnSoDtlID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel ` txnsodtl`
-- 


-- --------------------------------------------------------

-- 
-- Struktur dari tabel `txnsohdr`
-- 

CREATE TABLE `txnsohdr` (
  `TxnSOHdrID` int(11) NOT NULL AUTO_INCREMENT,
  `TxnSOHdrNo` varchar(45) DEFAULT NULL,
  `TxnSOHdrNoRev` varchar(45) DEFAULT NULL,
  `TxnSOHdrDate` datetime DEFAULT NULL,
  `MstCustID` int(11) NOT NULL,
  `TxnSOHdrPoNo` varchar(45) DEFAULT NULL,
  `TxnSOHdrPodate` datetime DEFAULT NULL,
  `TypeTrn` varchar(45) DEFAULT NULL,
  `Remaks` varchar(45) DEFAULT NULL,
  `KodeSumber` varchar(45) DEFAULT NULL,
  `DelIndex` varchar(45) DEFAULT NULL,
  `ExtDisPersen1` varchar(45) DEFAULT NULL,
  `ExtDisc1` varchar(45) DEFAULT NULL,
  `TypePpn` varchar(45) DEFAULT NULL,
  `TypePajak` varchar(45) DEFAULT NULL,
  `TypeMeterai` varchar(45) DEFAULT NULL,
  `Meterai` varchar(45) DEFAULT NULL,
  `TxnSOHdrProsesdate` datetime DEFAULT NULL,
  `TxnSOHdrpostingdate` datetime DEFAULT NULL,
  `TxnSOHdrpostingflag` varchar(45) DEFAULT NULL,
  `OtoFlag` varchar(45) DEFAULT NULL,
  `TxnSoDtlDrawNo` varchar(45) DEFAULT NULL,
  `TxnQuotHdrID` int(11) NOT NULL,
  `MstApprID` int(11) NOT NULL,
  `MstSalesPICID` int(11) NOT NULL,
  `MstGRPSalesID` int(11) NOT NULL,
  `MstCrsID` int(11) NOT NULL,
  `MstPayID` int(11) NOT NULL,
  `MstEmp` int(11) NOT NULL,
  PRIMARY KEY (`TxnSOHdrID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data untuk tabel `txnsohdr`
-- 

