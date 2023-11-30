-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `ts_php_2022`
--

--
-- 傾印資料表的資料 `mem`
--

INSERT INTO `mem` (`mem_id`, `mem_name`, `mem_mail`, `mem_pwd`, `mem_level`, `mem_chkcode`) VALUES
(1, 'TS001', 'ts001@gmail.com', '4b8962a1bc48a81895b21eb69afd44f0', 1, '779012'),
(2, 'TS002', 'ts002@gmail.com', '4b8962a1bc48a81895b21eb69afd44f0', 2, '906903'),
(3, 'TS999', 'ts999@gmail.com', '4b8962a1bc48a81895b21eb69afd44f0', 9, '789890'),
(4, 'TS003', 'ts003@gmail.com', '4b8962a1bc48a81895b21eb69afd44f0', 2, NULL),
(5, 'TS005', 'ts005@gmail.com', '4b8962a1bc48a81895b21eb69afd44f0', 0, NULL),
(6, 'TS004', 'ts004@gmail.com', '4b8962a1bc48a81895b21eb69afd44f0', 2, NULL),
(7, 'TS006', 'ts006@gmail.com', '4b8962a1bc48a81895b21eb69afd44f0', 0, '166205'),
(8, 'TS007', 'ts007@gmail.com', '4b8962a1bc48a81895b21eb69afd44f0', 1, '765706'),
(9, 'TS008', 'ts008@gmail.com', '4b8962a1bc48a81895b21eb69afd44f0', 1, '473775'),
(10, 'TS009', 'ts009@gmail.com', '4b8962a1bc48a81895b21eb69afd44f0', 1, '873701'),
(11, 'TS011', 'ts011@gmail.com', '4b8962a1bc48a81895b21eb69afd44f0', 1, '926952'),
(12, 'TS012', 'ts012@gmail.com', '4b8962a1bc48a81895b21eb69afd44f0', 1, '029025'),
(13, 'TS013', 'ts013@gmail.com', '4b8962a1bc48a81895b21eb69afd44f0', 1, '122893'),
(14, 'TS014', 'ts014@gmail.com', '4b8962a1bc48a81895b21eb69afd44f0', 1, '437690'),
(15, 'TS016', 'ts016@gmail.com', '4b8962a1bc48a81895b21eb69afd44f0', 1, '475763'),
(16, 'TS018', 'ts018@gmail.com', '4b8962a1bc48a81895b21eb69afd44f0', 1, '928970'),
(17, 'TS019', 'ts019@gmail.com', '4b8962a1bc48a81895b21eb69afd44f0', 1, '365366'),
(20, 'TS020', 'ts020@gmail.com', '4b8962a1bc48a81895b21eb69afd44f0', 1, '440193');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
