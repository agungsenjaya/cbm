-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 14 Mar 2022 pada 23.57
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` enum('tips','edukasi','berita','tutorial') COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `img`, `kategori`, `content`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'tips pengecatan rumah', 'img/blog/1567570976noi.jpg', 'tutorial', '<p>Mengecat adalah kegiatan yang paling mudah yang bisa dilakukan untuk \nmendesain interior sebuah rumah. Aplikasi cat mampu memberikan pengaruh \nterhadap tampilan rumah secara keseluruhan. Namun tentunya Anda tidak \ningin cat yang sudah dipoleskan pada dinding hasilnya tidak sesuai \ndengan keinginan Anda bukan?</p><p><span style=\"\"font-family: \"\" \"\";\"\"=\"\"\"\"><span style=\"\"font-family: \"\" \"\";\"\"=\"\"\"\">Memperoleh hasil akhir pengecatan yang tidak sempurna mungkin membuat \nAnda kecewa, apalagi Anda sudah mengeluarkan biaya, waktu, dan tenaga. \nLalu bagaimana caranya agar hasil pengecatan dapat memuaskan hati ? \nBerikut beberapa hal yang harus Anda perhatikan:</span></span></p><p><b><span style=\"\"font-family: \"\" \"\";\"\"=\"\"\"\">ALAT APLIKASI KUAS DAN ROLL CAT</span></b></p><ul><li style=\"\"text-align: justify;\"\"> Sesuaikan jenis kuas dengan jenis \ncat yang Anda gunakan. Misalnya kuas sintetis dari nilon atau polyester \nbulu sangat cocok untuk cat lateks atau cat berbasis air, sedangkan kuas\n berbahan baku bulu sapi lebih cocok untuk cat berbasis minyak.</li><li style=\"\"text-align: justify;\"\">\n Untuk roller cat sebaiknya pilih yang berbahan plastik agar tahan lama.\n Roller cat bahan sintetis lebih cocok untuk cat berbasis air atau \nlateks, dan yang berbahan baku alami seperti bulu sapi lebih sesuai jika\n digunakan pada cat minyak.<br></li></ul><p><b><span style=\"\"font-family: \"\" \"\";\"\"=\"\"\"\"><b><span style=\"\"font-family: \"\" \"\";\"\"=\"\"\"\">CAT TEMBOK, JENIS CAT YANG BISA DIGUNAKAN</span></b></span></b></p><ul><li style=\"\"text-align: justify;\"\"> <strong>Flat,<em> </em></strong>jenis cat yang tidak berkilau. Cocok untuk mengecat bagian plafond rumah.</li><li style=\"\"text-align: justify;\"\"> <strong>E</strong><strong>gg</strong><strong>-</strong><strong>shell</strong><strong>/</strong><strong>satin, </strong>jenis cat ini memiliki kemilau tetapi sangat tipis.</li><li style=\"\"text-align: justify;\"\"> <strong>Semi gloss,</strong> cat yang memiliki kemilau yang bagus, sesuai digunakan untuk mengecat kamar tidur.</li><li style=\"\"text-align: justify;\"\"> <strong>Gloss,</strong>\n memiliki tingkat kemilau yang tinggi sehingga jenis cat ini akan \nmemperlihatkan cacat pada dinding yang tidak rata. Cocok diterapkan pada\n kamar mandi, dapur, atau di ruangan yang mudah kotor.</li></ul><p><strong>Cat primer/cat dasar</strong>, Untuk hasil terbaik pada dinding \nrumah Anda, usahakan selalu melapisi dengan cat primer terlebih dahulu. \nPilihlah cat primer yang jenis bahan bakunya sesuai dengan jenis bahan \nbaku cat tembok pilihan Anda, misalnya cat lateks dengan cat primernya \nberbahan lateks juga.</p><p><b>TEKNIK PENGECATAN</b></p><p>Tuangkan cat ke dalam ember atau wadah cat kemudian aduk hingga rata.Usahakan mengecat dari arah atas ke bawah, gerak dari kanan ke kiri kemudian ulangi dari kiri ke kanan.Ikuti petunjuk yang ada pada kemasan cat sebelum melanjutkan proses pengecatan berikutnya. Biasanya tertera aturan untuk menunggu hingga cat mulai mengering di dinding interior rumah Anda, sebelum Anda diperbolehkan melakukan pengecatan berikutnya.Hindari rol cat yang terlalu basah oleh cat tembok karena akan menyebabkan tetesan pada dinding serta memperbesar kemungkinan timbulnya cat yang tidak merata.<br><br><b><span style=\"\"font-family: \"\" \"\";\"\"=\"\"\"\"><b><span style=\"\"font-family: \"\" \"\";\"\"=\"\"\"\"></span></b></span></b></p>', 'tips-pengecatan-rumah', '2019-10-15 16:10:09', '2019-10-15 16:10:09'),
(2, 1, 'bagaimana cara mendesain rumah minimalis', 'img/blog/1571206208ss2.jpg', 'tutorial', '<p>Kehadiran desain minimalis di tengah masyarakat modern kian digandrungi. Desain rumah minimalis yang mampu mengakomodir semua kebutuhan ruang secara sederhana dengan cerdik menjadi salah satu alasannya. Desain minimalis tidak melulu mengusung kesederhanaan semata. Sebenarnya, desain rumah minimalis berarti mengoptimalkan semua elemen arsitektural untuk mengakomodir semua kebutuhan penghuninya dengan fungsional dan nyaman. Jadi, desain rumah minimalis berarti menggunakan semua elemen yang sederhana dan terbatas untuk mendapatkan efek atau kesan yang terbaik.<br><br>Lalu, bagaimana cara mendesain rumah minimalis? Konsep yang pertama-tama harus dikedepankan adalah ‘sedikit tapi optimal’. Setiap elemen dalam rumah minimalis harus benar-benar berfungsi dengan efisien dan sebisa mungkin multi-fungsi.</p><p><b>1. BENTUK DASAR GEOMETRIS SEBAGAI KARAKTER ARSITEKTUR MINIMALIS</b></p><p>Desain rumah minimalis kerapkali mengoptimalkan bentuk-bentuk dasar geometris. Tidak ada hiasan dan penambahan bentuk yang tidak perlu. Tampilan bangunan secara keseluruhan lebih murni dan lebih minimal dengan bentuk-bentuk geometri yang lebih ‘simple’.&nbsp; Setiap bentuk yang ada menekankan pada hal-hal yang bersifat esensial dan fungsional. Bentuk denah, bentuk massa bangunan, bentuk pintu, dan deret jendela yang kotak-kotak, mendominasi desain rumah minimalis.</p><p><b>2. KESEDERHANAAN YANG DINAMIS</b></p><p>Setiap bentuk fungsional yang ada dipadukan dan dikombinasikan dengan harmonis untuk menciptakan kedinamisan. Walau memanfaatkan bentuk-bentuk dasar geometris dengan bahan-bahan sederhana, namun desain rumah minimalis mampu tampil dinamis dengan pengulangan struktur sebagai ciri khasnya.<b><br></b></p><p>Minimalis tidak berarti ‘sedikit’ , tetapi mengoptimalkan fungsi setiap elemen yang&nbsp; diperlukan untuk mendapatkan keseluruhan kebutuhan dengan nyaman. Jadi, dapatkan desain rumah minimalis yang berkualitas, nyaman, bermanfaat optimal, dan elegan dengan menanamkan konsep ‘Simplicity for optimalism’.<b><br></b><br></p>', 'bagaimana-cara-mendesain-rumah-minimalis', '2019-10-15 16:10:09', '2019-10-15 16:10:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `brands`
--

INSERT INTO `brands` (`id`, `user_id`, `title`, `img`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'hotel the ritz carlton bali', 'upload/brand/16408673101.png', 'hotel-the-ritz-carlton-bali', '2021-12-30 05:28:31', '2021-12-30 05:28:31'),
(2, 1, 'conrad hotel bali', 'upload/brand/16408673612.png', 'conrad-hotel-bali', '2021-12-30 05:29:21', '2021-12-30 05:29:21'),
(3, 1, 'ibis hotel', 'upload/brand/16408673903.png', 'ibis-hotel', '2021-12-30 05:29:50', '2021-12-30 05:29:50'),
(4, 1, 'toserba yogya', 'upload/brand/16408674144.png', 'toserba-yogya', '2021-12-30 05:30:14', '2021-12-30 05:30:14'),
(5, 1, 'the kings shopping centre', 'upload/brand/16408674465.png', 'the-kings-shopping-centre', '2021-12-30 05:30:46', '2021-12-30 05:30:46'),
(6, 1, 'de java hotel bandung', 'upload/brand/16408675046.png', 'de-java-hotel-bandung', '2021-12-30 05:31:44', '2021-12-30 05:31:44'),
(7, 1, 'pt. nusa sarana indonesia', 'upload/brand/16408675297.png', 'pt-nusa-sarana-indonesia', '2021-12-30 05:32:09', '2021-12-30 05:32:09'),
(8, 1, 'pt. san central indah', 'upload/brand/16408675518.png', 'pt-san-central-indah', '2021-12-30 05:32:31', '2021-12-30 05:32:31'),
(9, 1, 'bhhh2 bandung', 'upload/brand/16408675699.png', 'bhhh2-bandung', '2021-12-30 05:32:49', '2021-12-30 05:32:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(92, '2014_10_12_000000_create_users_table', 1),
(93, '2014_10_12_100000_create_password_resets_table', 1),
(94, '2019_08_19_000000_create_failed_jobs_table', 1),
(95, '2021_12_07_131153_create_projects_table', 1),
(96, '2021_12_08_145211_create_blogs_table', 1),
(97, '2021_12_08_145233_create_sliders_table', 1),
(98, '2021_12_18_022222_create_contacts_table', 1),
(99, '2021_12_30_041410_create_brands_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_af` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` enum('rumah','proyek') COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`id`, `user_id`, `title`, `img`, `img_af`, `kategori`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hotel De Java Bandung', 'img/project/1552985839CBM_De_Java_Hotel_Bandung.jpg', NULL, 'proyek', 'hotel-de-java-bandung', '2019-03-18 18:57:20', '2019-03-18 18:57:20'),
(2, 1, 'Sekolah BPK Singgasana', 'img/project/1552986135CBM_Sekolah_BPK_Singgasana.jpg', NULL, 'proyek', 'sekolah-bpk-singgasana', '2019-03-18 19:02:15', '2019-03-18 19:02:15'),
(3, 1, 'Rumah Sakit UKM Bandung', 'img/project/1552986379CBM_Rumah_Sakit_UKM.jpg', NULL, 'proyek', 'rumah-sakit-ukm-bandung', '2019-03-18 19:06:19', '2019-03-18 19:06:19'),
(4, 1, 'Apartemen Sudirman Sweet', 'img/project/1552986673CBM_Apartemen_Sudirman_Sweet.jpg', NULL, 'proyek', 'apartemen-sudirman-sweet', '2019-03-18 19:11:13', '2019-03-18 19:11:13'),
(5, 1, 'Sekolah BPK Penabur Bogor', 'img/project/1552987577CBM_Sekolah_BPK_Penabur_Bogor.jpg', NULL, 'proyek', 'sekolah-bpk-penabur-bogor', '2019-03-18 19:26:17', '2019-03-18 19:26:17'),
(6, 1, 'Hotel Ibis Bandung', 'img/project/1552987778CBM_Hotel_Ibis_Bandung.jpg', NULL, 'proyek', 'hotel-ibis-bandung', '2019-03-18 19:29:38', '2019-03-18 19:29:38'),
(7, 1, 'Fave Hotel Garut', 'img/project/1552987924CBM_Fave_Hotel_Garut.jpg', NULL, 'proyek', 'fave-hotel-garut', '2019-03-18 19:32:04', '2019-03-18 19:32:04'),
(8, 1, 'Yogya Dept Store Indramayu', 'img/project/1552988365CBM_Yogya_Dept_Store_Indramayu.jpg', NULL, 'proyek', 'yogya-dept-store-indramayu', '2019-03-18 19:39:26', '2019-03-18 19:39:26'),
(9, 1, 'Yogya Dept Store Purwakarta', 'img/project/1553045447CBM_Yogya_Dept_Store_Purwakarta.jpg', NULL, 'proyek', 'yogya-dept-store-purwakarta', '2019-03-19 11:30:47', '2019-03-19 11:30:47'),
(10, 1, 'Hotel Ritz-Carlton Bali', 'img/project/1553045944CBM_Hotel_Ritz-Carlton_Bali.jpg', NULL, 'proyek', 'hotel-ritz-carlton-bali', '2019-03-19 11:39:04', '2019-03-19 11:39:04'),
(11, 1, 'Hotel Conrad Bali', 'img/project/1553046238CBM_Hotel_Conrad_Bali.jpg', NULL, 'proyek', 'hotel-conrad-bali', '2019-03-19 11:43:58', '2019-03-19 11:43:58'),
(12, 1, 'V Hotel Bandung', 'img/project/1553046651CBM_V_Hotel_Bandung.jpg', NULL, 'proyek', 'v-hotel-bandung', '2019-03-19 11:50:51', '2019-03-19 11:50:51'),
(13, 1, 'Living Plaza Bandung', 'img/project/1553156617CBM_Living_Plaza_Bandung.jpg', NULL, 'proyek', 'living-plaza-bandung', '2019-03-20 18:23:37', '2019-03-20 18:23:37'),
(14, 1, 'Apartemen Greko Bandung', 'img/project/1553156837CBM_Apartemen_Greko_Bandung.jpg', NULL, 'proyek', 'apartemen-greko-bandung', '2019-03-20 18:27:17', '2019-03-20 18:27:17'),
(15, 1, 'Kings Shopping Center', 'img/project/1566457660King.jpg', NULL, 'proyek', 'kings-shopping-center', '2019-08-21 17:07:40', '2019-08-21 17:07:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_web` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `img_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','deactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deactive',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Central Bangun Mandiri', 'scipaint@gmail.com', NULL, '$2y$10$4H71gStABBQMrQSfXsHjbe9wkhDN0UVVAYyg2slxCCyAurbCmG/Ou', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT untuk tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
