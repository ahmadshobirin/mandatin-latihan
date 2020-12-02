CREATE TABLE `tb_anggota` (
  `no_anggota` varchar(10) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `sex` char(1) NOT NULL DEFAULT '-',
  `password` varchar(10) NOT NULL DEFAULT 'a'
);


INSERT INTO `tb_anggota` (`no_anggota`, `nama`, `sex`, `password`) VALUES
('9721', 'ACHMAD ZACKY RAYHAN AKBAR', 'L', 'a'),
('9723', 'ADELIA EKA PURNOMO', 'P', 'a'),
('9734', 'AGUS ZAWAWI ABDULLAH', 'L', 'a'),
('9741', 'ALDILA RAYHAN NISAA AZ ZAHRA', 'P', 'a'),
('9753', 'APRILLIA WIHELDA PASCA', 'P', 'a'),
('9760', 'BAGAS RAKHA FAKHRUFIAN RAMADHAN', 'L', 'a'),
('9762', 'BERLIANA OKTAVIA', 'P', 'a'),
('9785', 'DIVA ALIVIA PUTRI', 'P', 'a'),
('9790', 'ELKE MAULANA  AKBAR', 'L', 'a'),
('9800', 'FAREL WILDAN ARIZKI', 'L', 'a');
