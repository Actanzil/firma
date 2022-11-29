-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2022 pada 16.39
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firma`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_instansi`
--

CREATE TABLE `pengajuan_instansi` (
  `id_pengajuan` int(11) NOT NULL,
  `nama_mahasiswa` varchar(200) DEFAULT NULL,
  `nim_mahasiswa` bigint(20) DEFAULT NULL,
  `email_mahasiswa` varchar(200) DEFAULT NULL,
  `telp_mahasiswa` bigint(20) DEFAULT NULL,
  `sks_lulus` int(5) DEFAULT NULL,
  `nama_instansi` varchar(200) DEFAULT NULL,
  `url_medsos_instansi` varchar(100) DEFAULT NULL,
  `alamat_instansi` varchar(200) DEFAULT NULL,
  `penerima_surat` varchar(50) DEFAULT NULL,
  `jabatan_penerima_surat` varchar(50) DEFAULT NULL,
  `objek_pkl` varchar(50) DEFAULT NULL,
  `waktu_pelaksanaan` varchar(50) DEFAULT NULL,
  `khs` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajuan_instansi`
--

INSERT INTO `pengajuan_instansi` (`id_pengajuan`, `nama_mahasiswa`, `nim_mahasiswa`, `email_mahasiswa`, `telp_mahasiswa`, `sks_lulus`, `nama_instansi`, `url_medsos_instansi`, `alamat_instansi`, `penerima_surat`, `jabatan_penerima_surat`, `objek_pkl`, `waktu_pelaksanaan`, `khs`) VALUES
(1, 'Tanzilu Adji Arriduwan', 225150209111007, 'tanziluadji@gmail.com', 82230963464, 4, 'PT Pelni Persero', NULL, 'Jalan Gajah Mada No.14, RT.6/RW.2', 'Rainoc', 'Direktur Sumber Daya Manusia (SDM) & Umum', 'IT Support', '3 Oktober 2022 - 3 Desember 2022', 'khstanzilu.pdf'),
(2, 'Hadi Ikhwanul Fuadi', 225150209111002, 'hadiikhwanul@student.ub.ac.id', 81997963759, 4, 'PT Pertamina (Persero)', NULL, 'Jalan Medan Merdeka Timur. No.1A', 'M Herry Sugiharto', 'Direktur Sumber Daya Manusia (SDM)', 'Software Enginering', '3 Oktober 2022 - 3 Desember 2022', 'khshadi.pdf'),
(3, 'Kharisma Aryawitama', 225150209111004, 'kharismaarya@student.ub.ac.id', 87722882322, 4, 'PT Garuda Indonesia, Tbk.', NULL, 'Jalan Jendral Sudirman Kav 29-31, Jakarta', 'Salman El Farisiy', 'Direktur Human Capital', 'Website Developer', '3 Oktober 2022 - 3 Desember 2022', 'khsharisma.pdf'),
(4, 'Fadila Kharisma Yoga', 225150209111008, 'fadilayoga@student.ub.ac.id', 8113135523, 4, 'PT Kereta Api Indonesia (Persero)', NULL, 'Jalan Pegangsaan Timur No.6', 'Suparno', 'Direktur Sumber Daya Manusia (SDM) & Umum', 'Mobile Developer', '03 Oktober 2022 s/d 03 Desember 2022', 'khsfadila.pdf'),
(5, 'Ahmad Madda Iknajah', 225150209111013, 'ahmadmadda@student.ub.ac.id', 82220508262, 4, 'PT Perusahaan Listrik Negara (PLN) Persero', NULL, 'Jalan Trunojoyo Blok M – I No 135 Kebayoran Baru, Jakarta', 'Yusuf Didi Setiarto', 'Direktur Legal dan Manajemen Human Capital', 'Full Stack Developer', '3 Oktober 2022 - 3 Desember 2022', 'khsmadda.pdf'),
(6, 'Denny Prastyo Inkiriwang', 225150209111014, 'dennyprastyo@student.ub.ac.id', 81229406595, 4, 'PT Telkom Indonesia Tbk', NULL, 'Jalan Kebon Sirih No 10-12, Jakarta Pusat', 'Afriwandi', 'Direktur Human Capital Management', 'Data Science', '03 Oktober 2022 s/d 03 Desember 2022', 'khsdenny.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_lomba`
--

CREATE TABLE `pengajuan_lomba` (
  `id_pengajuan` int(11) NOT NULL,
  `nama_mahasiswa` varchar(255) DEFAULT NULL,
  `nim_mahasiswa` bigint(20) DEFAULT NULL,
  `email_mahasiswa` varchar(100) DEFAULT NULL,
  `telp_mahasiswa` bigint(20) DEFAULT NULL,
  `sks_lulus` int(4) DEFAULT NULL,
  `kategori_lomba` varchar(100) DEFAULT NULL,
  `tingkat_lomba` varchar(100) DEFAULT NULL,
  `nama_lomba` varchar(100) DEFAULT NULL,
  `penyelenggara` varchar(100) DEFAULT NULL,
  `produk_lomba` varchar(100) DEFAULT NULL,
  `hasil_lomba` varchar(100) DEFAULT NULL,
  `pembimbing` varchar(100) DEFAULT NULL,
  `url_informasi_lomba` varchar(100) DEFAULT NULL,
  `tempat_pelaksanaan` varchar(100) DEFAULT NULL,
  `waktu_lomba` varchar(100) DEFAULT NULL,
  `sumber_dana` varchar(100) DEFAULT NULL,
  `proposal_lomba` varchar(100) DEFAULT NULL,
  `sertifikat_lomba` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajuan_lomba`
--

INSERT INTO `pengajuan_lomba` (`id_pengajuan`, `nama_mahasiswa`, `nim_mahasiswa`, `email_mahasiswa`, `telp_mahasiswa`, `sks_lulus`, `kategori_lomba`, `tingkat_lomba`, `nama_lomba`, `penyelenggara`, `produk_lomba`, `hasil_lomba`, `pembimbing`, `url_informasi_lomba`, `tempat_pelaksanaan`, `waktu_lomba`, `sumber_dana`, `proposal_lomba`, `sertifikat_lomba`) VALUES
(1, 'Muhammad Davva Pratama', 193140714111070, 'davvapratama@student.ub.ac.id', 81383868858, 4, 'Karya Tulis Ilmiah TIK', 'Nasional', 'Gemastik XV', 'Pusat Prestasi Nasional', 'Karya Tulis Ilmiah - TIK', 'Juara 1', 'Denny Sagita Rusdianto', NULL, 'Fakultas Ilmu Komputer - Universitas Brawijaya Malang', '22 November 2022 - 25 November 2022', 'Kemahasiswaan Fakultas', 'proposallomba.pdf', 'sertifikatlomba.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian_instansi`
--

CREATE TABLE `penilaian_instansi` (
  `id_penilaian` int(11) NOT NULL,
  `id_pengajuan` int(11) DEFAULT NULL,
  `sks_lulus` varchar(25) DEFAULT NULL,
  `nama_instansi` varchar(25) DEFAULT NULL,
  `url_medsos_instansi` varchar(25) DEFAULT NULL,
  `alamat_instansi` varchar(25) DEFAULT NULL,
  `penerima_surat` varchar(25) DEFAULT NULL,
  `jabatan_penerima_surat` varchar(25) DEFAULT NULL,
  `objek_pkl` varchar(25) DEFAULT NULL,
  `waktu_pelaksanaan` varchar(25) DEFAULT NULL,
  `khs` varchar(25) DEFAULT NULL,
  `status_penilaian` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penilaian_instansi`
--

INSERT INTO `penilaian_instansi` (`id_penilaian`, `id_pengajuan`, `sks_lulus`, `nama_instansi`, `url_medsos_instansi`, `alamat_instansi`, `penerima_surat`, `jabatan_penerima_surat`, `objek_pkl`, `waktu_pelaksanaan`, `khs`, `status_penilaian`) VALUES
(1, 1, 'Valid', 'Valid', 'Valid', 'Valid', 'Valid', 'Valid', 'Valid', 'Valid', 'Valid', 'Berkas Tervalidasi'),
(2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pengajuan Berkas'),
(3, 3, 'Valid', 'Valid', 'Valid', 'Valid', 'Valid', 'Valid', 'Valid', 'Tidak Valid', 'Valid', 'Berkas Revisi'),
(4, 4, 'Valid', 'Valid', 'Valid', 'Valid', 'Valid', 'Valid', 'Valid', 'Valid', 'Valid', 'Berkas Tervalidasi'),
(5, 5, 'Tidak Valid', 'Valid', 'Tidak Valid', 'Valid', 'Tidak Valid', 'Valid', 'Valid', 'Tidak Valid', 'Valid', 'Berkas Revisi'),
(6, 6, 'Valid', 'Valid', 'Valid', 'Valid', 'Tidak Valid', 'Tidak Valid', 'Valid', 'Valid', 'Tidak Valid', 'Berkas Revisi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian_lomba`
--

CREATE TABLE `penilaian_lomba` (
  `id_penilaian` int(11) NOT NULL,
  `id_pengajuan` int(11) DEFAULT NULL,
  `sks_lulus` varchar(25) DEFAULT NULL,
  `kategori_lomba` varchar(25) DEFAULT NULL,
  `tingkat_lomba` varchar(25) DEFAULT NULL,
  `nama_lomba` varchar(25) DEFAULT NULL,
  `penyelenggara` varchar(25) DEFAULT NULL,
  `produk_lomba` varchar(25) DEFAULT NULL,
  `hasil_lomba` varchar(25) DEFAULT NULL,
  `pembimbing` varchar(25) DEFAULT NULL,
  `url_informasi_lomba` varchar(25) DEFAULT NULL,
  `tempat_pelaksanaan` varchar(25) DEFAULT NULL,
  `waktu_pelaksanaan` varchar(25) DEFAULT NULL,
  `sumber_dana` varchar(25) DEFAULT NULL,
  `proposal_lomba` varchar(25) DEFAULT NULL,
  `sertifikat_lomba` varchar(25) DEFAULT NULL,
  `status_penilaian` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penilaian_lomba`
--

INSERT INTO `penilaian_lomba` (`id_penilaian`, `id_pengajuan`, `sks_lulus`, `kategori_lomba`, `tingkat_lomba`, `nama_lomba`, `penyelenggara`, `produk_lomba`, `hasil_lomba`, `pembimbing`, `url_informasi_lomba`, `tempat_pelaksanaan`, `waktu_pelaksanaan`, `sumber_dana`, `proposal_lomba`, `sertifikat_lomba`, `status_penilaian`) VALUES
(1, 1, 'Valid', 'Valid', 'Valid', 'Valid', 'Valid', 'Valid', 'Valid', 'Valid', 'Valid', 'Valid', 'Valid', 'Valid', 'Valid', 'Valid', 'Berkas Tervalidasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `jabatan`, `username`, `password`) VALUES
(1, 'Tanzilu', 'anzilu28@student.ub.ac.id', 'Operator Akademik', 'tanzilu', '99921723ea93662601aa165974b2c4a7');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengajuan_instansi`
--
ALTER TABLE `pengajuan_instansi`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `pengajuan_lomba`
--
ALTER TABLE `pengajuan_lomba`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `penilaian_instansi`
--
ALTER TABLE `penilaian_instansi`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_pengajuan` (`id_pengajuan`);

--
-- Indeks untuk tabel `penilaian_lomba`
--
ALTER TABLE `penilaian_lomba`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_pengajuan` (`id_pengajuan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengajuan_instansi`
--
ALTER TABLE `pengajuan_instansi`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_lomba`
--
ALTER TABLE `pengajuan_lomba`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penilaian_instansi`
--
ALTER TABLE `penilaian_instansi`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `penilaian_lomba`
--
ALTER TABLE `penilaian_lomba`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `penilaian_instansi`
--
ALTER TABLE `penilaian_instansi`
  ADD CONSTRAINT `penilaian_instansi_ibfk_1` FOREIGN KEY (`id_pengajuan`) REFERENCES `pengajuan_instansi` (`id_pengajuan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penilaian_lomba`
--
ALTER TABLE `penilaian_lomba`
  ADD CONSTRAINT `penilaian_lomba_ibfk_1` FOREIGN KEY (`id_pengajuan`) REFERENCES `pengajuan_lomba` (`id_pengajuan`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
