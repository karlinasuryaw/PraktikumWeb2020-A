-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 02:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pena`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(12) NOT NULL,
  `role` varchar(10) NOT NULL,
  `img_admin` varchar(255) NOT NULL DEFAULT 'foto-admin.jpg',
  `location_imgadmin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `username_admin`, `password_admin`, `role`, `img_admin`, `location_imgadmin`) VALUES
(1, 'Bayu Baskara', 'bayubaskara@pena.com', 'bayubaskara', 'bayubaskara', 'SUPER', 'admin1.png', 'img_admin/admin1.png'),
(6, 'Karlina Surya Witanto', 'karlina@pena.com', 'karlinasurya', 'lina123', 'ADMIN', 'admin2.jpg', 'img_admin/admin2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `id_jurn` int(5) NOT NULL,
  `img_berita` varchar(255) NOT NULL DEFAULT 'berita.jpg',
  `location_imgberita` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `judul_berita`, `isi_berita`, `id_jurn`, `img_berita`, `location_imgberita`) VALUES
(1, 1, 'Kenali Risiko Mobilitas Agar Terhindar COVID-19', 'JAKARTA - Tingginya mobilitas masyarakat di masa pandemi COVID-19 berisiko tinggi terhadap penularan. Hal tersebut perlu antisipasi jelang libur panjang akhir tahun yang sudah dekat. Karena kerap dimanfaatkan masyarakat untuk bepergian baik untuk silaturahmi maupun tujuan berwisata. \r\n\r\nJuru Bicara Satgas Penanganan COVID-19 Prof Wiku Adisasmito mengingatkan masyarakat tidak perlu melakukan perjalanan jika tidak mendesak. \"Saya menghimbau masyarakat, jika perjalanan tidak mendesak, diharapkan tidak melakukannya,\" jelasnya saat memberi keterangan pers perkembangan penanganan COVID-19 di Istana Kepresidenan Jakarta, Selasa (15/12/2020) yang disiarkan kanal YouTube Sekretariat Presiden.\r\n\r\nMasyarakat juga diharapkan perlu mengenali dengan baik risiko jenis mobilitas dan kegiatan yang dilakukan. Seperti kondisi dengan risiko terendah, yaitu beraktivitas di rumah dan hanya berinteraksi dengan keluarga inti dan melakukan perjalanan singkat dengan kendaraan pribadi dengan keluarga tanpa melakukan pemberhentian selama perjalanan. \r\n\r\nKondisi lebih berisiko, yaitu perjalanan dengan kendaraan pribadi bersama keluarga tanpa melakukan permberhentian selama perjalanan.  Dan melakukan interaksi dengan bukan anggota keluarga inti di ruang terbuka dengan mematuhi 3M atau memakai masker, menjaga jarak dan mencuci tangan. \r\n\r\nKondisi lebih tinggi berisiko, yaitu perjalanan dengan kendaraan pribadi bersama bukan anggota keluarga, perjalanan kereta atau bus jarak jauh. Lalu, berinteraksi dengan beberapa orang yang bukan keluarga inti di ruang tertutup dengan sebagian besar mematuhu 3M. \r\n\r\nKondisi risiko tertinggi, yaitu penerbangan dengan transit,  perjalanan dengan kapal atau perahu, dan berinteraksi dengan orang dari beragam sumber di ruangan tertutup dengan ventilasi buruk dengan sebagian kecil mematuhi 3M. \r\n\r\nUntuk itu terkait mitigasi risiko mobilitas, pemerintah sedang memfinalisasi kebijakan terkait pelaku perjalanan antarkota yang meliputi persyaratan sampai mekanisme perjalanan dan kembali ke tempat asalnya. \"Pengambilan kebijakan terkait pelaku perjalanan dilakukan karena selalu ada tren kenaikan kasus setiap adanya masa liburan panjang,\" ujarnya. \r\n\r\nWiku mengingatkan kembali, berdasarkan studi Mu et Al tahun 2020, mengenai dampak mobilitas libur panjang Imlek di China tahun ini, ditemukan bahwa kota yang letaknya lebih dekat dengan pusat epidemik COVID-19, sekaligus dekat dengan daerah perkotaan padat penduduk akan memilki risiko kemunculan kasus baru yang lebih tinggi. Lalu, pembatasan mobilitas antar kota, dapat menekan peluang risiko penularan sebesar 70%. Dan pembatasan mobilitas dalam kota sebesar 40% harus diikuti monitoring dan evaluasi yang baik. \r\n\r\nSementara dari studi Chun Chang et al 2020, menenai damoak wabah di Taiwan, ditemukan bahwa waktu, durasi dan tingkat pembatasan perjalanan memiliki andil dalam menentukan besar jumlah kasus. \r\n\r\n\"Selain itu, sudah jelas berdasarkan data, kita sudah sama-sama mempelajari, bahwa setiap liburan yang meningkatkan mobilitas penduduk akan mengakibatkan lonjakan kasus pada 2 hingga 4 minggu setelahnya,\" jelas Wiku. \r\n\r\n\r\nJakarta, 15 Desember 2020\r\n\r\nTim Komunikasi Komite Penanganan Corona Virus Disease 2019 (COVID-19) dan Pemulihan Ekonomi Nasional\r\n\r\n(ISTA/QQ/YOY)', 3, '5fd9710fbe11c314250898.jpeg', 'img_bt/5fd9710fbe11c314250898.jpeg'),
(2, 2, 'Pelaku Ekonomi Optimis Bisa Bangkit dari Pandemi', 'Jakarta, Selasa 15 Desember 2020. Sektor Pariwisata dan Ekonomi Kreatif menjadi salah satu sektor yang terdampak oleh pandemi COVID-19. Kendati begitu, Pemerintah melalui Kementerian Pariwisata dan Ekonomi Kreatif (Kemenparekraf) terus berupaya membuat industri Pariwisata dan Ekonomi Kreatif bisa bertahan melewati pandemi, baik dari kampanye, pelatihan, membuka akses antara pelaku ekonomi kreatif dengan Over-The-Top (OTT), hingga memberikan stimulus ekonomi seperti Bantuan Hibah Pariwisata dan Bantuan Insentif Pemerintah yang telah diluncurkan tahun ini.\r\n\r\nPrabu Revolusi, Juru Bicara Kemenparekraf, mengatakan, “Perhatian Kemenparekraf saat ini adalah memastikan semua pelaku industri memahami protokol kesehatan. Hingga saat vaksin sudah bisa diakses masyarakat nantinya, ini akan memberikan wajah baru bagi sektor Pariwisata dan Ekonomi Kreatif. Efeknya bisa berdampak kepada, hotel yang bisa kembali beroperasi, restaurant kembali hidup, bioskop juga kembali buka, dan kegiatan MICE (Meeting, Incentive, Convention, and Exhibition) juga bisa kembali dijalankan”, ujarnya pada acara Dialog Produktif bertema ‘Industri Kreatif Melawan Hantaman Pandemi’ yang diselenggarakan Komite Penanganan COVID-19 dan Pemulihan Ekonomi Nasional (KPCPEN), Selasa (15/12).\r\n\r\nTantangan yang berat dirasakan oleh pelaku ekonomi kreatif di lapangan, “Pekerja film seperti saya dan teman-teman sejak Maret memang tidak boleh melakukan aktivitas pembuatan film. Baru saat mulai memasuki masa Pembatasan Sosial Berskala Besar (PSBB) Transisi, pekerja film mulai berproduksi dalam protokol yang sangat ketat” ungkap Lola Amaria, Sutradara Film.\r\n\r\n“Industri ekonomi kreatif mau tidak mau harus beradaptasi dengan protokol kesehatan, ini penting untuk dipahami agar ditanggapi dengan serius. Untuk itu kami membuat platform sertifikasi CHSE (Cleanliness, Health, Safety, Environment) untuk segera diadopsi. Skenario stimulus juga tetap kita pikirkan, di 2020 kita sudah melakukan Bantuan Insentif Pemerintah, di tahun 2021 akan ada perhatian khusus di 16 sub sektor dan sesuai kebutuhan masing-masing sub sektor”, terang Prabu Revolusi.\r\n\r\nSeperti halnya Lola Amaria, Hanung Bramantyo, Sutradara Film juga menyampaikan hal serupa, “Pada saat pandemi semua berhenti total, ada tiga poyek film saya sebenarnya di tahun ini, yang sudah gala premier tidak jadi tayang di bioskop sampai saat ini, yang sudah tayang langsung diturunkan karena tidak ada penonton, sedangkan yang sedang proses pengambilan gambar, harus berhenti”.\r\n\r\nKondisi ini menuntut pelaku ekonomi kreatif untuk adaptif dan melakukan transformasi digital. “Memang menurut data kami, pelaku-pelaku yang adaptif dan melakukan transformasi digital bisa bertahan sampai saat ini, namun tidak semuanya mampu seperti itu. Kemenparekraf pun menjalankan program inkubasi untuk pembuat film dengan memberikan insentif agar lebih memahami platform digital dan penulisan skenario yang lebih adaptif dengan kondisi pandemi”, terang Prabu Revolusi.\r\n\r\nHal ini pun lebih jauh lagi diungkapkan oleh Lola Amaria, “Cepat atau lambat kita memang harus beradaptasi dengan digital, karena menurut saya bioskop bukan satu-satunya media untuk berkarya bagi pembuat film saat ini. Menurut saya ada banyak sekali ide di masa pandemi seperti misalnya tentang hoax, tentang vaksin, apapun yang berkaitan dengan pandemi yang bisa diproduksi sebagai film edukasi. Platform tidak harus bioskop, bisa televisi, bisa digital, karena mengedukasi masyarakat itu penting”.\r\n\r\nDi saat pandemi ini pula kehadiran Pemerintah sangat dibutuhkan oleh pelaku ekonomi kreatif, “Mas Hanum dan Mbak Lola ini contoh pelaku ekonomi kreatif yang tidak menyerah. Menteri Pariwisata dan Ekonomi Kreatif juga selalu memikirkan tentang film, musik, selalu bicara tentang apa yang bisa kita bantu melalui kewenangan kita. Di 2021 ada beberapa program yang sedang disiapkan, pada saatnya nanti kita akan mengumukan program ini, setidaknya program ini nantinya bisa membantu teman-teman pelaku ekonomi kreatif bisa tetap berkarya”, ujar Prabu Revolusi.\r\n\r\nSelain itu, harapan bagi vaksin COVID-19 juga disampaikan oleh Lola Amaria, “Mudah-mudahan vaksin cepat terdistribusi dengan baik dan semua sektor sudah bisa kembali seperti semula sebelum pandemi”.\r\n\r\n“Optimisme teman-teman pelaku ekonomi kreatif sangat kita butuhkan agar kita bisa segera bangkit, dan ini perlu kesadaran menjalankan protokol kesehatan. Semakin cepat kita mengendalikan pandemi COVID-19 semakin cepat kita memulihkan kondisi ini, baik sektor Pariwisata maupun Ekonomi Kreatif”, tutup Prabu Revolusi.\r\n\r\n***\r\nTentang Komite Penanganan COVID-19 dan Pemulihan Ekonomi Nasional (KPCPEN) - Komite Penanganan COVID-19 dan Pemulihan Ekonomi Nasional (KPCPEN) dibentuk dalam rangka percepatan penanganan COVID-19 serta pemulihan perekonomian dan transformasi ekonomi nasional. Prioritas KPCPEN secara berurutan adalah: Indonesia Sehat, mewujudkan rakyat aman dari COVID-19 dan reformasi pelayanan kesehatan; Indonesia Bekerja, mewujudkan pemberdayaan dan percepatan penyerapan tenaga kerja; dan Indonesia Tumbuh, mewujudkan pemulihan dan transformasi ekonomi nasional. Dalam pelaksanaannya, KPCPEN dibantu oleh Satuan Tugas Penanganan COVID-19 dan Satuan Tugas Pemulihan dan Transformasi Ekonomi Nasional.\r\n\r\n\r\nTim Komunikasi Komite Penanganan COVID-19 dan Pemulihan Ekonomi Nasional\r\n\r\n(PEN/SSW/VJY)', 4, '5fd8a627efa6a784975017.jpg', 'img_bt/5fd8a627efa6a784975017.jpg'),
(3, 3, 'Komunikasi Terstruktur Dalam Program Vaksinasi', 'JAKARTA - Presiden Joko Widodo telah mengumumkan instruksi terbaru terkait penanganan pandemi Covid-19 yang ditujukan kepada jajaran kabinet hingga ke pemerintah daerah. Seluruh aparat pemerintahan juga diinstruksikan untuk turut mensukseskan program vaksinasi Covid-19 secara nasional, yang mana Presiden sendiri akan menjadi yang pertama menerimanya. \r\n\r\n\"Hal terpenting, program vaksinasi termasuk juga komunikasi publik dapat berjalan terstruktur sesuai tahapannya. Hindari membuat asumsi atau pernyataan yang bersifat kontraproduktif dengan tujuan program vaksinasi,\" tegas Juru Bicara Satgas Penanganan Covid-19 Prof Wiku Adisasmito saat memberi keterangan pers perkembangan penanganan Covid-19 di Istana Kepresidenan Jakarta, Kamis (17/12/2020) yang disiarkan kanal YouTube Sekretariat Presiden.\r\n\r\nIa menambahkan pada Rabu (16/12/2020), Presiden Joko Widoo telah mengumumkan bahwa pemerintah berkomitmen menyediakan vaksin Covid-19 secara gratis kepada seluruh masyarakat Indonesia. Semua instansi, baik di tingkatan pemerintah pusat maupun daerah juga perlu menindaklanjuti program vaksinasi agar menjadi program prioritas sehingga program dapat berjalan dengan baik.\r\n\r\nHal ini katanya merupakan langkah penting yang dicapai Pemerintah dalam memberikan perlindungan warga negara demi tercapainya kekebalan kolektif di Indonesia. Karena Indonesia sebagai negara dengan penduduk terbesar keempat dunia, maka pemberian vaksin secara gratis kepada seluruh penduduk akan berkontribusi besar dalam menciptakan kekebalan komunitas secara global. \r\n\r\nMeski demikian, Wiku menekankan pemerintah tidak akan terburu-buru dalam menyelenggarakan program vaksinasi. Program vaksinasi akan diselenggarakan secara bertanggungjawab dan tetap mematuhi tahapan-tahapan pengembangan vaksin, sehingga nantinya vaksin yang digunakan masyarakat aman dan berkhasiat.\r\n\r\n\"Penting untuk diingat, jika nanti program vaksinasi akan dijalankan pada tahun 2021 pemerintah memastikan vaksin yang digunakan adalah vaksin yang terbaik bagi masyarakat Indonesia,\" Wiku meyakinkan. \r\n\r\nDiberitakan sebelumnya, Presiden Joko Widodo telah mengeluarkan 5 instruksi terbaru untuk mensukseskan program vaksinasi Covid-19 secara nasional. \r\n\r\nPertama, Presiden memerintahkan vaksin Covid-19 diberikan secara gratis, dan masyarakat tidak dikenakan biaya sama sekali. \r\n\r\nKedua, Presiden memerintahkan seluruh jajaran kabinet, kementerian, lembaga dan pemerintah daerah memprioritaskan program vaksinasi pada tahun anggaran 2021. \r\n\r\nKetiga, Presiden memerintahkan  Menteri Keuangan untuk memprioritaskan dan merelokasi anggaran lain terkait ketersediaan dan vaksinasi secara gratis. Dan Presiden menegaskan, tidak ada alasan masyarakat tidak mendapat vaksin. \r\n\r\nKeempat, Presiden Joko Widodo akan menjadi yang pertama mendapatkan vaksin Covid-19. Tujuannya, untuk memberikan kepercayaan dan keyakinan kepada masyarakat bahwa vaksin yang digunakan aman. \r\n\r\nKelima, Presiden meminta masyarakat terus menjalankan disiplin 3M yaitu memakai masker, menjaga jarak dan mencuci tangan. Hal itu untuk kebaikan masyarakat itu sendiri.  \r\n\r\n\r\nJakarta, 17 Desember 2020\r\n\r\nTim Komunikasi Komite Penanganan Corona Virus Disease 2019 (Covid-19) dan Pemulihan Ekonomi Nasional\r\n\r\n(ISTA/QQ/KRS)', 4, '5fdc2739cd53b389881230.jpeg', 'img_bt/5fdc2739cd53b389881230.jpeg'),
(5, 2, 'Penerima Bantuan Subsidi Upah Capai 90%', 'Jakarta, Kamis 10 Desember 2020 – Hingga awal Desember 2020, pemerintah melalui Komite Penanganan COVID-19 dan Pemulihan Ekonomi Nasional (KPCPEN) dengan anggaran yang dikelola Kementerian Ketenagakerjaan kembali menyalurkan Bantuan Subsidi Upah (BSU). Bantuan ini bertujuan untuk meringankan beban ekonomi para pekerja sekaligus membantu menggerakkan roda perekonomian nasional lewat menjaga daya beli masyarakat yang terdampak pandemi COVID-19.\r\n\r\n“BSU ini merupakan upaya pemerintah untuk menjaga daya beli dan konsumsi para pekerja atau buruh yang terdampak COVID-19. Pekerja yang menerima upah dan sudah didaftarkan oleh perusahaannya merupakan para pekerja yang terdaftar sebagai anggota BPJS Ketenagakerjaan”, terang Reza Hafiz, Staf Khusus Kementerian Ketenagakerjaan dalam Dialog Produktif dengan tema “Sudah Sampai Mana Implementasi BSU?” yang diselenggarakan KPCPEN, Kamis (10/12).\r\n\r\nKementerian Ketenagakerjaan telah mamvalidasi kriteria penerima manfaat BSU ini secara teliti dan sahih, karena basis datanya adalah BPJS Ketenagakerjaan. “Kriteria penerima manfaat BSU ini yaitu, Warga Negara Indonesia, pekerja anggota aktif jaminan sosial yang dibuktikan dengan kepesertaan BPJS Ketenagakerjaan sampai bulan Juni 2020, dan memiliki upah/gaji di bawah Rp5 juta. Selain itu kita menjaga agar prosesnya langsung diterima penerima manfaat. Oleh karena itulah BSU ini kita transfer langsung ke rekening yang bersangkutan”, terang Reza Hafiz.\r\n\r\nPerlu diketahui, penerima manfaat BSU ini mencapai 12,4 juta jiwa dengan total anggaran yang direalisasikan Rp29,7 Triliun. “BSU termin pertama pada periode September-Oktober 2020 telah terealisasi sebanyak 98,8%. Artinya sudah 12,2 juta orang yang bantuannya sudah terealisasikan. Sedangkan kini BSU telah mencapai tahap lima termin kedua pada periode November-Desember 2020 yang sudah terealisasi ke 11 juta penerima manfaat atau 90%”, ujar Reza Hafiz.\r\n\r\n \r\n\r\nDemi menjaga transparansi, Kementerian Ketenagakerjaan telah menyampaikan pembaruan data penerima tiap minggunnya, “Basis datanya berdasarkan laporan bank. Jadi misalnya Bank Mandiri sebagai bank penyalur, dalam satu minggu menyalurkan 1 juta data penerima manfaat, kita dapat datanya setelah selesai penyalurannya. Tapi bukan hanya bank Mandiri, tapi ada empat bank Himbara lainnya” tutur Reza Hafiz.\r\n\r\n \r\n\r\nSelain itu upaya-upaya transparansi terus dilakukan melalui proses pengawasan. Realisasi BSU ini telah diawasi Badan Pemeriksa Keuangan (BPK) dan Komisi Pemberantasan Korupsi (KPK), “Data penerima manfaat BSU ini tidak kita ubah. Datanya sama seperti yang kami terima dari BPJS Ketenagakerjaan”, tegas Reza Hafiz.\r\n\r\n \r\n\r\nReza Hafiz menambahkan jika penerima bantuan telah meninggal dunia, maka BSU tetap dapat diterima oleh ahli waris sah yang bersangkutan. “Selama rekeningnya masih aktif, nantinya bisa dilakukan pemindahbukuan ke ahli waris”, ungkapnya.\r\n\r\n \r\n\r\nKementerian Ketenagakerjaan mengharapkan BSU terus berlanjut hingga tahun depan, mengingat manfaatnya sangat besar dalam menjaga stabilitas perekonomian, “Tapi kebijakan ini mengikuti keputusan dari KPCPEN, karena ini merupakan diskusi di tingkat Menteri, juga melihat kondisi ekonomi di tahun depan yang akan berimplikasi pada rancangan kebijakan dan anggaran. Kita Kementerian Ketenagakerjaan bersiap sebagai pelaksana teknis,” tutup Reza Hafiz.\r\n\r\nTentang Komite Penanganan COVID-19 dan Pemulihan Ekonomi Nasional (KPCPEN) - Komite Penanganan COVID-19 dan Pemulihan Ekonomi Nasional (KPCPEN) dibentuk dalam rangka percepatan penanganan COVID-19 serta pemulihan perekonomian dan transformasi ekonomi nasional.  Prioritas KPCPEN secara berurutan adalah: Indonesia Sehat, mewujudkan rakyat aman dari COVID-19 dan reformasi pelayanan kesehatan; Indonesia Bekerja, mewujudkan pemberdayaan dan percepatan penyerapan tenaga kerja; dan Indonesia Tumbuh, mewujudkan pemulihan dan transformasi ekonomi nasional. Dalam pelaksanaannya, KPCPEN dibantu oleh Satuan Tugas Penanganan COVID-19 dan Satuan Tugas Pemulihan dan Transformasi Ekonomi Nasional.\r\n\r\nTim Komunikasi Komite Penanganan COVID-19 dan Pemulihan Ekonomi Nasional\r\n\r\n\r\n(PEN/SSW/KRS)', 3, '5fd209996997d504091967.jpg', 'img_bt/5fd209996997d504091967.jpg'),
(6, 3, 'Badan POM, MUI, dan Para Ahli Kawal Vaksin COVID-19', 'Jakarta, 8 Desember 2020 – Badan Pengawas Obat dan Makanan (Badan POM) berkomitmen untuk mengawal keamanan, efektivitas dan mutu vaksin COVID-19, sementara, Majelis Ulama Indonesia (MUI) mengawal aspek kehalalannya.\r\n\r\nDalam keterangan pers yang diselenggarakan Komite Penanganan COVID-19 dan Pemulihan Ekonomi Nasional (KPCPEN) pada Senin (7/11), Kepala Badan POM, Dr. Ir. Penny K. Lukito, MCP mengatakan bahwa menindaklanjuti kedatangan vaksin, Badan POM akan melakukan evaluasi terhadap data uji klinik yang sedang dilaksanakan untuk membuktikan keamanan dan khasiat vaksin. Proses evaluasi yang dijalankan Badan POM menggunakan standar yang merujuk kepada standar Internasional seperti WHO, US FDA dan EMA.\r\n\r\nKetika vaksin tiba di Bandara Soekarno-Hatta (6/12), tim Badan POM telah melakukan verifikasi dokumen dan pemeriksaan kelayakan kondisi suhu penyimpanan selama perjalanan. Hasil pemeriksaan Badan POM saat itu adalah semua dokumen dan nomor Batch sudah sesuai dan suhu penyimpanan selama perjalanan sudah sesuai dengan yang dipersyaratkan yakni rata-rata di suhu 5oC (persyaratan 2 – 8oC),” tambahnya.\r\n\r\nBadan POM, lanjut Penny, telah melakukan pengambilan sampel dari 1,2 juta vaksin COVID-19 yang telah hadir di Indonesia untuk pengujian mutu di laboratorium P3OMN. Sampel tersebut perlu dilakukan untuk penerbitan lot release (pelulusan batch/lot), dengan beberapa parameter untuk lot release termasuk uji potensi, uji kadar antigen, uji toksisitas abnormal dan uji endotoksin. Tujuan pengujian ini adalah untuk memastikan bahwa vaksin mempunyai mutu yang sesuai dengan persyaratan.\r\n\r\n“Badan POM bersama dengan Komite Nasional Penilai Obat, ITAGI dan juga para pakar akan melakukan evaluasi untuk mendapatkan hasil keputusan persetujuan penggunaan vaksin dengan pertimbangan kemanfaatan yang jauh lebih besar dari risiko yang ditimbulkan,” terangnya.\r\n\r\nKemudian, Kepala Badan POM menambahkan bahwa ketika vaksin ini mulai digunakan dalam program vaksinasi COVID-19 pada waktu yang ditetapkan oleh Pemerintah, Badan POM sesuai dengan tugas dan fungsinya, akan tetap dan terus mengawal khasiat, keamanan dan mutu vaksin dalam peredaran.\r\n\r\n“Namun, sambil menunggu vaksin dapat digunakan dan program vaksinasi dijalankan, masyarakat dihimbau untuk tetap melaksanakan 3M, menggunakan masker, mencuci tangan dan menjaga jarak,” tambah Penny Lukito.\r\n\r\nKomitmen MUI untuk Kawal Kehalalan Vaksin\r\n\r\nDirektur Lembaga Pengkajian Pangan, Obat-obatan dan Kosmetika (LPPOM) MUI, Dr. Lukmanul Hakim, M.Si mengatakan, “Majelis Ulama Indonesia (MUI) berkomitmen mengawal aspek kehalalan vaksin COVID-19. Tim MUI bersama PT. Bio Farma, Badan POM dan Kementerian kesehatan telah melakukan inspeksi ke fasilitas produksi Sinovac pada bulan Oktober lalu, untuk melakukan audit aspek kualitas, keamanan, serta kehalalan vaksin.”\r\n\r\nLukmanul Hakim menambahkan bahwa saat ini, MUI masih terus berkoordinasi dengan Sinovac, Bio Farma untuk melanjutkan kajian aspek kehalalan penggunaan vaksin COVID-19.\r\n\r\n“Audit memorandum telah dikirimkan kepada pihak perusahaan terkait dan kami meminta informasi tambahan. Kami berharap agar segera bisa mendapat informasi tambahan tersebut, sehingga penetapan kehalalan dapat dilakukan oleh Komisi Fatwa MUI. Rekomendasi dari Badan POM terkait izin penggunaan vaksin COVID-19 juga menjadi salah satu pertimbangan dalam penetapan fatwa tersebut,” tutupnya.\r\n\r\n***\r\n\r\nTentang Komite Penanganan COVID-19 dan Pemulihan Ekonomi Nasional (KPCPEN) - Komite Penanganan COVID-19 dan Pemulihan Ekonomi Nasional (KPCPEN) dibentuk dalam rangka percepatan penanganan COVID-19 serta pemulihan perekonomian dan transformasi ekonomi nasional.  Prioritas KPCPEN secara berurutan adalah: Indonesia Sehat, mewujudkan rakyat aman dari COVID-19 dan reformasi pelayanan kesehatan; Indonesia Bekerja, mewujudkan pemberdayaan dan percepatan penyerapan tenaga kerja; dan Indonesia Tumbuh, mewujudkan pemulihan dan transformasi ekonomi nasional. Dalam pelaksanaannya, KPCPEN dibantu oleh Satuan Tugas Penanganan COVID-19 dan Satuan Tugas Pemulihan dan Transformasi Ekonomi Nasional.\r\n\r\nTim Komunikasi Komite Penanganan COVID-19 dan Pemulihan Ekonomi Nasional\r\n\r\nPEN/SSW/MJS', 3, '5fcf3eb1803bd652963538.jpg', 'img_bt/5fcf3eb1803bd652963538.jpg'),
(7, 1, 'Total Pasien Sembuh Covid-19 Bertambah 521.984 orang', 'JAKARTA - Jumlah pasien sembuh dari Covid-19 per hari ini terus bertambah menjadi 521.984 orang, atau persentasenya juga meningkat menjadi 82,1%. Jumlah kesembuhan kumulatif ini sudah termasuk penambahan pasien sembuh harian per 16 Desember 2020 sebanyak 5.328 orang. \r\n\r\nSebaran daerah secara urutan, DKI Jakarta menambahkan jumlah tertinggi pasien sembuh sebanyak 1.140 kasus dan kumulatifnya masih yang tertinggi mencapai 141.271 kasus. Jawa Barat hari ini menempati urutan kedua menambahkan 1.020 pasien sembuh dan kumulatifnya menjadi 57.289 kasus. \r\n\r\nUrutan ketiga harian berada di Jawa Tengah menambahkan pasien sembuh sebanyak 859 kasus dan kumulatifnya sebanyak 46.907 kasus. Urutan keempat hari ini ada di Jawa Timur sebanyak 537 pasien sembuh, namun kumulatifnya masih kedua tertinggi mencapai 62.277 kasus. Dan urutan kelima di Riau menambahkan sebanyak 223 kasus dan kumulatifnya mencapai 20.478 kasus. \r\n\r\nLalu, pada pasien terkonfirmasi positif hari ini bertambah, sebanyak 6.725 kasus. Untuk jumlah kumulatifnya, atau pasien terkonfirmasi positif yang tercatat sejak kasus pertama hingga saat ini, berjumlah 636.154 kasus. Namun untuk jumlah kasus aktif, yakni pasien Covid-19 yang masih menjalani masa perawatan, per hari ini berjumlah 94.922 kasus atau 14.9% dari pasien terkonfirmasi. \r\n\r\nUntuk rincian penambahan pasien terkonfirmasi positif harian per provinsi, Jawa Barat urutan pertama dengan menambahkan pasien terkonfirmasi positif sebanyak 1.434 kasus dan kumulatifnya urutan ketiga mencapai 69.500 kasus. DKI Jakarta hari ini urutan kedua, menambahkan sebanyak 1.221 kasus dan kumulatifnya masih yang tertinggi sebanyak 156.343 kasus. \r\n\r\nDiikuti Jawa Timur urutan selanjutnya menambahkan sebanyak 755 kasus dan kumulatifnya masih urutan kedua sebanyak 72.124 kasus. Sulawesi Selatan hari ini masuk urutan keempat menambahkan 447 kasus dan kumulatifnya mencapai 24.019 kasus. Dan Jawa Tengah urutan kelima  harian menambahkan 421 kasus dan kumulatifnya di urutan keempat nasional dengan 68.681 kasus. \r\n\r\nDisamping itu, untuk kasus pasien meninggal harian juga masih bertambah sebanyak 137 kasus dan kumulatifnya menjadi 19.248 kasus atau 3,0% dari pasien terkonfirmasi. Dari rincian per provinsi, Urutan pertama harian berada di Jawa Timur dengan menambahkan pasien meninggal sebanyak 47 kasus kumulatifnya masih yang tertinggi menembus 5.016 kasus. Jawa Tengah urutan kedua menambahkan 24 kasus dan kumulatifnya mencapai 2.698 kasus. \r\n\r\nDKI Jakarta urutan ketiga menambahkan 22 pasien meninggal dan kumulatifnya juga masih urutan kedua bertambah menjadi 2.994 kasus. Urutan keempat di Kalimantan Timur menambahkan 8 kasus dan kumulatifnya 653 kasus. Dan urutan kelima di Lampung menambahkan 8 kasus dan kumulatifnya mencapai 229 kasus. Sementara Jawa Barat dengan jumlah kumulatifnya di urutan keempat mencapai sejumlah 1.081 kasus termasuk tambahan hari ini 1 pasien meninggal.\r\n\r\nSelain itu, dari data hasil uji 426 laboratorium jejaring per 16 Desember 2020, jumlah spesimen selesai diperiksa per hari sebanyak 61.291 spesimen dan kumulatifnya 6.546.376 spesimen. Jumlah orang yang diperiksa per hari ini ada 36.592 orang dan kumulatifnya 4.383.985 orang. \r\n\r\nSementara jumlah negatif Covid-19 dari hasil periksa, per hari ini sebanyak 29.867 orang dan kumulatifnya 3.747.831 orang. Selain itu per hari ini jumlah suspek tercatat ada 62.364 kasus. Untuk sebaran wilayah masih berada di 34 provinsi dan 510 kabupaten/kota.\r\n\r\nJakarta, 16 Desember 2020\r\n\r\nTim Komunikasi Komite Penanganan Corona Virus Disease 2019 (Covid-19) dan Pemulihan Ekonomi Nasional\r\n\r\n(ISTA/QQ/MJS)', 4, '3 [Recovered]-01.jpg', 'img_bt/3 [Recovered]-01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jurnalis`
--

CREATE TABLE `jurnalis` (
  `id_jurn` int(11) NOT NULL,
  `nama_jurn` varchar(50) NOT NULL,
  `username_jurn` varchar(50) NOT NULL,
  `password_jurn` varchar(12) NOT NULL,
  `email_jurn` varchar(50) NOT NULL,
  `phone_jurn` varchar(50) NOT NULL,
  `birth_jurn` date NOT NULL,
  `skill_jurn` varchar(255) NOT NULL,
  `img_jurn` varchar(255) NOT NULL DEFAULT 'image.jpg',
  `location_imgjurn` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `foto_jurn` varchar(255) NOT NULL,
  `location_fotojurn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurnalis`
--

INSERT INTO `jurnalis` (`id_jurn`, `nama_jurn`, `username_jurn`, `password_jurn`, `email_jurn`, `phone_jurn`, `birth_jurn`, `skill_jurn`, `img_jurn`, `location_imgjurn`, `status`, `foto_jurn`, `location_fotojurn`) VALUES
(3, 'Karel Leo Rivaldo', 'kareleo', 'kareleo', 'karel@pena.com', '085211772288', '1998-12-10', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque deleniti quae architecto impedit eveniet itaque, assumenda voluptatum rerum earum eum sed ipsum vitae eos minus! Doloribus illum praesentium inventore ratione.', 'kartu.png', 'img_jurnalis/kartu.png', 'APPROVED', '2-01.png', 'profile/2-01.png'),
(4, 'Vidjaretha Wardana', 'vidjaretha', 'vidjaretha', 'vidjaretha123@pena.com', '085211889922', '1999-10-27', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque deleniti quae architecto impedit eveniet itaque, assumenda voluptatum rerum earum eum sed ipsum vitae eos minus! Doloribus illum praesentium inventore ratione.', 'kartu.png', 'img_jurnalis/kartu.png', 'APPROVED', 'retha.png', 'profile/retha.png'),
(6, 'test', 'test', 'test', 'test@pena.com', '089867561234', '2000-01-18', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque deleniti quae architecto impedit eveniet itaque, assumenda voluptatum rerum earum eum sed ipsum vitae eos minus! Doloribus illum praesentium inventore ratione.', 'kartu.png', 'img_jurnalis/kartu.png', 'NOT APPROVED', '2-01.png', 'profile/2-01.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Kesehatan'),
(2, 'Ekonomi'),
(3, 'Vaksin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_jurn` (`id_jurn`);

--
-- Indexes for table `jurnalis`
--
ALTER TABLE `jurnalis`
  ADD PRIMARY KEY (`id_jurn`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jurnalis`
--
ALTER TABLE `jurnalis`
  MODIFY `id_jurn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `berita_ibfk_2` FOREIGN KEY (`id_jurn`) REFERENCES `jurnalis` (`id_jurn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
