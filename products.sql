-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 10:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL COMMENT 'ชื่อสินค้า',
  `price` varchar(255) NOT NULL COMMENT 'ราคาสินค้า',
  `description` text DEFAULT NULL COMMENT 'รายละเอียดสินค้า',
  `image` varchar(255) DEFAULT NULL COMMENT 'รูปสินค้า',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Huawei Nova Y61', '5899', 'ครบเครื่องในราคาสบายกระเป๋ากับ HUAWEI Nova Y61 โดดเด่นด้วยการตกแต่งเอฟเฟกต์ดวงดาว ดีไซน์สมัยใหม่ หรูหรา พรีเมียม พร้อมกล้อง 3 เลนส์เติมเต็มความอัจฉริยะกับ AI ความละเอียดสูงสุด 50 ล้านพิกเซล ความคมชัดระดับ HD รองรับชาร์จไวถึง 22.5 W HUAWEI SuperCharge มาพร้อมกับ Battery Safety Assistant และ Layer Battery Protection เพื่อเพิ่มประสิทธิภาพอย่างรวดเร็วในชั่วพริบตา บนแบตเตอรี่ขนาดใหญ่ 5,000 mAh ให้คุณชมภาพยนตร์เรื่องโปรด ได้อย่างไม่มีสะดุด', 'BfrX8DXYmF.jpg', '2023-06-25 08:17:31', '2023-06-25 08:17:31'),
(2, 'GOOGLE PIXEL 4', '26900', 'สมาร์ทโฟนเพียว Android มาพร้อมขนาด 5.7นิ้ว ให้ความละเอียด Full HD+ (2,280 x 1,080 พิกเซล จอ OLED จอแบบ 90Hz และ Ambient EQ ที่แสดงผลได้ลื่นตาและเลือกเปิดปิดได้ มาพร้อมแบตเตอรี่ 2,800 mAh รองรับการชาร์จ 18W USB-PD ขับเคลื่อนด้วย Snapdragon 855 พร้อม RAM 6GB มี Neural Core จัดการ AI กล้องคู่พร้อมกล้องหลัง 2 เลนส์ 12ล้านพิกเซล และเซ็นเซอร์โฟโต้ 16 ล้านพิกเซิล รันบน Android 10 OS', '9bglIYRuVC.png', '2023-06-25 08:18:27', '2023-06-25 08:18:27'),
(3, 'APPLE IPHONE 13 PRO', '38900', 'มาพร้อมขนาดหน้าจอ 6.1นิ้ว OLED Super Retina XDR รีเฟรชเรท 120Hz, HDR, เคลือบ Ceramic Shield ชิป A15 Bionic กล้องหลัง 3 เลนส์ รองรับถ่ายวิดีโอ 4K จอภาพ 120Hz ประสิทธิภาพกราฟฟิกน่าทึ่ง GPU แบบ 5-core สำหรับคอเกมส์ทั้งหลาย', 'WXeIjAG7vv.png', '2023-06-25 08:19:16', '2023-06-25 08:19:16'),
(4, 'Samsung Galaxy S23 Ultra', '38900', 'สมาร์ทโฟนที่มาพร้อมกล้องที่ดีสุดใน Galaxy และปากกา S Pen ที่เป็นมากกว่าปากกา มาพร้อม Space Zoom ซูมไกล 100 เท่า ไกลแค่ไหนก็ใกล้ได้  ให้ความคมชัด High-resolution กล้องคุณภาพสูง 200MP เก็บครบทุกรายละเอียด มากกว่าที่ตาคุณเห็น ถ่ายภาพคมชัดที่สุดที่เคยมีมาในสมาร์ทโฟน S Pen ที่เป็นทั้งปากกา และผู้ช่วยส่วนตัว ปากกาเขียนลื่นเหมือนใช้ปากกาจริง ใช้สั่งถ่ายรูป เปลี่ยนสไลด์ แปลภาษา แต่งรูป เล่นเกม และอีกมากมาย', 'SDz8zHBAgP.webp', '2023-06-25 08:21:54', '2023-06-25 08:21:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
