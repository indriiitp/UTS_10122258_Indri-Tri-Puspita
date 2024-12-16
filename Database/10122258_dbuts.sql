-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2024 at 06:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `10122258_dbuts`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `deskripsi`) VALUES
(1, 'Coffee', 'Kopi kopi kopi'),
(2, 'Non-coffee', 'Apa weh selain kopi\r\n'),
(3, 'Dessert', 'Yang manis-manis seperti aku'),
(4, 'Beverages', 'Makan makan');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `harga` int(20) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `id_kategori`, `deskripsi`, `harga`, `gambar`) VALUES
('MB01', 'Nasi Goreng Sate', 4, 'Nasi goreng dengan campuran sate madura yang membuat kombinasi didalamnya sangatlah mantap, nikmat, dan lezat', 60000, 'mb01.jpg'),
('MB02', 'Smoke Beef Platter', 4, 'Ini BEST SELLER nya! Campuran smoky beef dengan kentang goreng, dan topping lain membuat rasa dan tampilanya terasa mahal', 70000, 'mb02.jpg'),
('MB03', 'Chicken Katsu Mentai', 4, 'Kombinasi nasi putih yang pulen dengan chicken katsu yang juicy dan diberi saus mentai sehingga dapat menggoyang lidah', 64999, 'mb03.jpg'),
('MB04', 'Spagghetti Aglio Olio', 4, 'Masakan spagghetti ala italia dicampur dengan topping udang dan lainya membuat anda menjadi orang italia ', 57999, 'mb04.jpg'),
('MB05', 'Salad Chips', 4, 'Kami juga menyediakan menu untuk vegetarian, ini dia salad segar dikombinasikan dengan mayonaise dan chips', 45000, 'mb05.jpg'),
('MC01', 'Cappucino', 1, 'Coffee cappucino terenak sedunia kata orang-orang', 30000, 'mc01.jpg'),
('MC02', 'Americano', 1, 'Americano terpait sedunia kata orang bandung', 25000, 'mc02.jpg'),
('MC03', 'Vanilla Latte', 1, 'Coffe latte bercampur vanilla yang creamy', 30000, 'mc03.jpg'),
('MC04', 'Caramel Latte', 1, 'Coffee caramel latte terenak sa bandungeun', 33999, 'mc04.jpg'),
('MD01', 'Matcha Cheesecake', 3, 'Cheesecake dengan kombinasi matcha yang lembut ditambah saus coklat yang lezat dijamin well parahh', 37999, 'md01.jpg'),
('MD02', 'Caramel Brownies', 3, 'Rasakan kelezatan potongan brownies caramel dengan cream yang lembut dan topping yang enak', 35000, 'md02.jpg'),
('MD03', 'Tiramisu Chocolate', 3, 'Tiramisu coklat yang dibuat dengan tekstur yang lembut sehingga menggoda selera para pecinta coklat', 40000, 'md03.jpg'),
('MD04', 'Tiramisu Matcha', 3, 'Tiramisu matcha merupakan kombinasi lengkap antara susu dengan matcha, dijamin enak dan membuat nagih', 42000, 'md04.jpg'),
('MN01', 'Selasih Ice Tea', 2, 'Es teh bercampur biji selasih yang menimbulkan kesegaran bagi yang meminumnya', 27000, 'mn01.jpg'),
('MN02', 'Matcha Cheese Latte', 2, 'Nikmati kesegaran matcha bercampur dengan cheese creamy yang lembut', 37998, 'mn02.jpg'),
('MN03', 'Watermellon Juice', 2, 'Disini juga tersedia jus yang segar, bagi kalian yang ingin sehat, pesan ini solusinya', 24000, 'mn03.jpg'),
('MN04', 'Lychee Tea With Mango', 2, 'Ini sih paling nikmat, lychee tea bercampur dengan buah mangga, seger banget', 24000, 'mn04.jpg'),
('MN05', 'Red Velvet', 2, 'Bagi kalian yang suka red velvet, pesan ini solusinya, dijamin nagih nagih, dan nagih !', 37999, 'mn05.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `no_hp`, `alamat`, `jabatan`) VALUES
('P001', 'admin', 'admin1234', 'Indri Tri Puspita', '081219270492', 'Bandung', 'Admin'),
('P002', 'feliciamarsha', 'felicia', 'Felicia Marsha Adara', '081219270491', 'Majalengka', 'Koki'),
('P003', 'guinevere123', 'marsha123', 'Marsha Guinevere', '081219270493', 'Bandung', 'Barista');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
