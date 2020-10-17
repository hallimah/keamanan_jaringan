-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 Jan 2019 pada 08.00
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keamanan_jaringan_2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `isi_berita` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `tanggal`, `isi_berita`, `kategori`, `gambar`) VALUES
(15, 'Piala Kedua Bagi \'The Assassination of Gianni Versace\' di Golden Globe 2019', '21-01-2019', 'Jakarta - \'The Assassination of Gianni Versace: American Crime Story\' berhasil menyabet piala Golden Globe Awards 2019 untuk kategori Seri Terbatas atau Film Televisi Terbaik (Best Telvision Limited Series or Motion Picture Made for Television).  Ini adalah piala kedua bagi \'The Assassination of Gianni Versace\'. Sebelumnya, lewat perannya dalam film televisi itu, Darren Criss baru saja menang,  Ia membawa pulang piala dari kategori Aktor Terbaik untuk Seri Terbatas atau Film Televisi (Best Performance by an Actor in a Limited Series or Motion Picture Made for Television).  Dengen kemenangan ini, \'The Assassination of Gianni Versace\' berhasil mengalahkan \'The Alienist\', \'Escarpe at Dannemora\', \'Sharp Objects\' dan \'A Very English Scandal\'.  Selain dua kategori yang dimenangkan, ada dua pemain film televisi itu yang mendapat nominasi di ajang Golden Globe. Mereka adalah Penelope Cruz (Aktris Pendukung Tebrbaik) dan Edgar Ramirez (Aktor Pendukung Terbaik). Sayangnya keduanya belum berhasil untuk menang.  Tahun ini, Golden Globe Awards menginjak tahun ke-76. Gelaran kali ini diadakan di The Beverly Hilton, Beverly Hills pada Minggu, 6 Januari 2019 waktu setempat. ', 'Movie', '0c251c49a638b6f4c6f174ee3cdfccea.jpg'),
(16, 'Kemenhub Pangkas Biaya Perawatan Kereta Api 15 Persen ', '07-01-2019', 'Jakarta, CNN Indonesia -- Kementerian Perhubungan (Kemenhub) memangkas kontrak Perawatan dan Pengoperasian Prasarana Perkeretaapian Milik Negara (IMO) sebesar 15 persen atau Rp200 miliar. Pada 2019, Kemenhub mengalokasi IMO sebesar Rp1,1 triliun, lebih rendah dari anggaran tahun lalu Rp1,3 triliun.  Menteri Perhubungan Budi Karya Sumadi menjelaskan berkurangnya alokasi biaya untuk perawatan dan pengoperasian disebabkan dana dialihkan untuk untuk pembangunan proyek, salah satunya kereta cepat Jakarta-Surabaya. Selain itu, lanjutnya, ada perbaikan dari kinerja keuangan PT Kereta Api (Persero).  Untuk tahun anggaran 2019, Kemenhub mendapatkan alokasi dana APBN sebesar Rp44,1 triliun. Jumlah tersebut turun dari tahun 2018 sebesar Rp48,2 triliun. \"Ada satu policy (kebijakan) yang integrated (terkoneksi) antara Kementerian Keuangan dan kami, bahwa untuk anggaran IMO diturunkan,\" kata Budi di kantornya, Jumat (4/1).  Penandatanganan IMO tahun 2019 ini merupakan tindak lanjut dari Keputusan Menteri Perhubungan Nomor KP 2130 Tahun 2018 tentang Penugasan kepada PT KAI (Persero) untuk melaksanakan perawatan dan pengoperasian Prasarana Perkeretaapian Milik Negara Tahun Anggaran 2019. Kontrak ini berlaku dari tanggal 1 Januari hingga 31 Desember 2019.  Selanjutnya, dana tersebut akan digunakan untuk perawatan kereta api, antara lain perawatan jalur kereta api, perawatan jembatan, perawatan stasiun kereta api, dan lain-lain. ', 'Ekonomi', ''),
(17, 'Perempuan di Arab Akan Dapat Notifikasi Ponsel Usai Dicerai ', '07-01-2019', ' Jakarta, CNN Indonesia -- Perempuan di Arab Saudi kini akan mendapatkan notifikasi lewat pesan singkat jika mereka telah resmi diceraikan.  Itu adalah penerapan hukum baru di negara kerajaan tersebut yang didesain untuk melindungi mereka mendapati pernikahannya berakhir tiba-tiba tanpa sepengetahuan mereka.  \"Pengadilan Saudi akan mulai mengirim seperti notifikasi [perceraian]... sebuah langkah yang bertujuan untuk melindungi hak klien perempuan,\" demikian pernyataan Kementerian Hukum Arab Saudi seperti dikutip dari Reuters, Minggu (6/1). Hukum baru itu pun mulai berlaku sejak akhir pekan lalu. Gagasan itu sendiri datang dari Pangeran Mohammed bin Salman yang juga telah mengangkat larangan bagi perempuan untuk menyetir mobil sendiri.  Selain mendapatkan notifikasi, perempan di Arab pun bisa mengecek status perkawinan mereka pada situs Kementerian atau mengunjungi pengadilan terkait untuk mendapatkan salinan dokumen perceraian.  \"Umumnya di negara-negara Arab, pria bisa begitu saja menceraikan istri mereka,\" ujar Suad Abu-Dayyeh dari kelompok aktivis HAM global, Equality Now.  \"Ini paling tidak para perempuan akan tahu apakah mereka diceraikan atau tidak. Ini memang sebuah langkah yang kecil, tetapi ini juga adalah sebuah langkah ke arah yang tepat,\" sambung Suad.  Namun, sambung Suad, hal yang harus dibenahi lagi adalah mengenai tunjangan dan hak asuh anak bagi perempuan setelah diceraikan.  Para pegiat mengatakan poin utama tetap ada pada kebijakan perwalian Arab Saudi, di mana perempuan harus memiliki izin dari kerabat laki-laki untuk bekerja, bepergian, menikah, dan bahkan mendapatkan perawatan medis.  \"Sistem perwalian pria adalah masalah inti dan harus dibongkar. Sistem ini mengontrol wanita dalam setiap langkah kehidupan mereka. Sistem ini mencekik wanita Saudi,\" ujar Suad.  Meskipun banyak yang memuji reformasi pemerintah Saudi, ini disertai dengan tindakan keras terhadap perbedaan pendapat dengan sekitar selusin aktivis perempuan yang ditangkap.  Pada bulan November, kelompok hak asasi Amnesty International dan Human Rights Watch menuduh pemerintah Arab Saudi telah menyiksa dan melecehkan secara seksual beberapa aktivis perempuan yang ditahan. Namun, tuduhan itu dibantah pejabat Saudi saat dikonfirmasi Reuters.  Di satu sisi, terkait hal tersebut, sekelompok anggota parlemen dan pengacara di Inggris pada hari Rabu meminta \"tanggapan mendesak\" dari duta besar Saudi pada 9 Januari agar memungkinkan mereka berbicara dengan para aktivis yang ditahan.', 'Internasional', ''),
(18, 'Raja Malaysia Sultan Muhammad V Turun Takhta', '07-01-2019', 'Jakarta, CNN Indonesia -- Pihak Istana Kerajaan Malaysia mengumumkan kabar Sultan Muhammad V dari Kelantan yang memutuskan turun takhta pada Minggu (6/1). Kabar mundurnya Raja Malaysia ke-15 itu menyudahi rumor yang belakangan ini mencuat sejak awal pekan ini.  \"Yang Mulia telah bersiap kembali ke Kelantan Darul Naim untuk berada bersama pemerintah negara bagian,\" ungkap pernyataan Istana Negara, dikutip AFP, Minggu (6/1).  Raja Malaysia menjadi perhatian publik setelah pada November silam menikahi mantan Miss Moscow, Oksana Veovodina di tengah absennya dia di pemerintahan. Keduanya menggelar resepsi pernikahan mewah di Moskow, Rusia. Sebelum menikahi Sultan Muhammad V dari Kelantan, Veovodina dikabarkan terlebih dulu memeluk Islam (mualaf) dan mengubah nama menjadi Rihana Oxana Gorbantenko. Raja Malaysia dipilih oleh sembilan Sultan atau raja negara bagian. Yang Dipertuan Agung, ditunjuk setiap lima tahun biasanya secara bergiliran. Namun demikian, pengunduran diri Sultan Muhammad terjadi hanya dua tahun setelah ia naik pada Desember 2016.  Dilansir Malay Online, Pengawas Keuangan Rumah Tangga Kerajaan, Wan Ahmad Dahlan Ab Aziz mengatakan pengunduran diri Sultan Muhammad V efektif pada 6 Januari sesuai dengan Pasal 32 (3) dari Konstitusi Federal.  \"Yang Mulia telah secara resmi memberi tahu para Sultan-sultan negara bagian lainnya dengan menulis kepada sekretaris Konferensi Penguasa,\" kata Wan Ahmad.  Wan Ahmad juga menegaskan, sepanjang waktunya sebagai Yang dipertuan Agong, Sultan Muhammad V telah melaksanakan tanggung jawabnya sebagai Kepala Negara untuk memastikan stabilitas, keadilan, dan atas dasar persatuan.', 'Internasional', ''),
(19, 'Industri Asuransi Diminta Manfaatkan Kemajuan Teknologi', '07-01-2019', 'Jakarta Ketua Dewan Komisioner Otoritas Jasa Keuangan (OJK), Wimboh Santoso mendorong seluruh industri keuangan seperti asuransi untuk memaksimalkan kemajuan teknologi. Sebab, di tengah perkembangan teknologi yang cukup pesat, perusahaan tidak akan mampu berdaya saing tanpa adanya sistem teknologi.  \"Ritel menggunakan teknologi, sehingga asuransi kalau tidak menerapkan teknologi untuk mengakses pelanggannya akan berat, tidak bisa berkompetisi,\" kata Wimboh saat ditemui di Kompleks Bank Indonesia (BI), Jakarta, Rabu (2/1/2019). Seiring dengan gencarnya pembangunan infrastruktur yang dilakukan oleh pemerintah, maka kebutuhan asuransi akan meningkat. Hal ini juga tidak terlepas dari derasnya kredit perbankan yang turut masuk.  \"Bayangkan perumahan, begitu tol, LRT dibangun, rumah akan tumbuh, berapa ribu potensi nanti meng-cover asuransi, rumah itu pakai kredit, jarang harga kontan,\" katanya.  \"Kredit bank tidak mungkin pakai manual, pasti lewat asuransinya juga pakai teknologi. Teknologi merupakan pemicu yang bagus untuk industri sektor keuangan,\" sambungnya.  Wimboh menegaskan bahwa selama ini bisnis asuransi cukup besar. Meski tidak seperti perbankan, setidaknya sektor ini telah tumbuh sekitar 8 persen. \"Bisnis asuransi besar, tidak jauh dari bisnis bank. Asuransi memang tumbuhnya rendah, masih 8-7 persen,\" katanya.', 'Ekonomi', ''),
(20, 'Inggris Kucurkan Dana Rp 441 Miliar untuk Kembangkan Teknologi Robot Mikro', '07-01-2019', 'Jakarta - Pemerintah Inggris menginvestasikan jutaan Euro dalam pengembangan robot mikro. Dikabarkan, robot tersebut dirancang untuk bekerja di jaringan pipa bawah tanah dan tempat berbahaya seperti fasilitas nuklir yang telah dinonaktifkan.  Kabar gembira tersebut disampaikan langsung oleh Menteri Sains Inggris, Chris Skidmore. Ia mengatakan, pemerintah bakal mengusuckan investasi senilai 26,6 juta Euro (sekira Rp 441 miliar) di 15 proyek, termasuk pengembangan robot untuk operasi pipa bawah tanah. \"Untuk saat ini, kita hanya dapat memimpikan sebuah dunia dengan perbaikan jalan tanpa mengganggu aktifitas. Robot-robot memperbaiki pipa ini menandai awal teknologi yang menjadikan mimpi itu menjadi kenyataan di masa depan,\" kata Skidmore seperti dilansir dari The Guardian, Rabu (31/12/2018).  Skidmore menambahkan, penempatan robot di jaringan pipa tidak akan berdampak pada lalu lintas dan lebih aman jika menggunakan robot. Para ahli di seluruh universitas ternama di Inggris terlibat dalam pengembangan teknologi baru robot ini.', 'Teknologi', ''),
(21, 'China Cetak 2 Miliarder Baru Tiap Minggu, Apa Rahasianya?', '07-01-2019', 'Beijing - Meski membanggakan diri sebagai negeri komunis, nyatanya kapitalisme memberikan untung besar pada China. Ini dibuktikan lewat makin banyaknya miliarder di Negeri Tirai Bambu yang berasal dari kalangan swasta.  Menurut laporan UBS dan PwC tahun 2018, jumlah miliarder di Tiongkok meningkat drastis. Pada akhir 2017, ada 373 miliarder di China. 97 persen di antara mereka adalah entrepreneur.  \"Lebih dari dua miliarder China dicetak tiap minggunya,\" tulis laporan UBS dan PwC. Namun, angka miliarder di China sangat volatile. Laporan UBS dan PwC mencatat, akhir tahun lalu ada 51 miliarder yang keluar dari daftar miliarder.  Lebih lanjut, kekayaan para miliarder China meningkat 39 persen menjadi USD 1,12 triliun atau Rp 16.316 triliun.  Sumber kesuksesan ini berkaitan dengan disrupsi ekonomi berkat inovasi. Faktor itu dijelaskan sebagai kekuatan besar dalam menyokong meroketnya harta miliarder China. Ambil contoh pasar digital yang amat besar di negara itu berkat adanya 770 juta pengguna internet, otomatis itu menjadi insentif bagi para entrepreneur China.  Orang-orang terkaya di China pun berasal dari sektor teknologi. Ada Jack Ma, pendiri Alibaba, lalu ada Ma Huateng yang merupakan bos Tencent. Berkat inovasi teknologi, perusahaan keduanya berekspansi di layanan logistik, finansial, gaming, perfilman, bahkan sastra.  Tahun 2006, hanya ada 16 miliarder di China. Sekarang, ada 373 orang, dan posisi China tepat berada di belakang AS yang memiliki 585 miliarder.', 'Bisnis', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(5) NOT NULL,
  `id_berita` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `isi_komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_berita`, `nama`, `tanggal`, `isi_komentar`) VALUES
(9, 13, 'komen 1', '06-01-2019', 'isi komen 1'),
(10, 21, 'isi komentar', '07-01-2019', 'komentar'),
(11, 21, 'hhey', '08-01-2019', 'shgdhb'),
(12, 19, 'sjsahdjsa', '11-01-2019', '<script> alert </script>'),
(13, 16, 'aku', '21-01-2019', '<script>alert(\"hacked\")</script>'),
(14, 16, 'pok', '21-01-2019', 'ijiii'),
(15, 16, 'dasda', '21-01-2019', 'jsdssjfkjsenjknje'),
(16, 20, 'tty', '21-01-2019', 'suuu'),
(22, 15, 'coba maning', '21-01-2019', '<script>alert(\"hacked\")</script>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(5, 'admin', 'admin@admin.com', '$2y$10$A9QU6g.LlRUIDlzd0yxpJe7N/4bkilDa2jsPD6NZD9Fo4yNfp334u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
