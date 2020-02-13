-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: 34.85.12.254    Database: yudistira2
-- ------------------------------------------------------
-- Server version	10.3.12-MariaDB-1:10.3.12+maria~bionic-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `antihoax`
--

DROP TABLE IF EXISTS `antihoax`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `antihoax` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(9) unsigned NOT NULL DEFAULT 1,
  `authors` varchar(250) DEFAULT NULL,
  `status` tinyint(1) NOT NULL COMMENT '1 = benar, 2 = salah',
  `classification` enum('-','False Connection','False Context','Satire','Manipulated Content','Misleading Content','Impostor Content','Fabricated Content','TRUE','Clarification') NOT NULL DEFAULT '-',
  `references` varchar(2048) DEFAULT NULL,
  `source_issue` varchar(90) DEFAULT NULL,
  `source_link` varchar(250) DEFAULT NULL,
  `picture1` varchar(250) DEFAULT NULL,
  `picture2` varchar(250) DEFAULT NULL,
  `picture3` varchar(250) DEFAULT NULL,
  `picture4` varchar(250) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_id` int(9) unsigned DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `region_id` int(9) DEFAULT NULL,
  `region_level` tinyint(1) DEFAULT NULL,
  `conclusion` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Tags` (`tags`) USING BTREE,
  KEY `Kesimpulan` (`classification`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=1133 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `antihoax`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `antihoax` WRITE;
/*!40000 ALTER TABLE `antihoax` DISABLE KEYS */;
INSERT INTO `antihoax` VALUES (4,1,NULL,2,'Fabricated Content','(1) https://goo.gl/WvwhPx, tentang teknik','whatsapp.com','whatsapp.com','https://scontent-sit4-1.xx.fbcdn.net/v/t31.0-8/23632695_1041717452634559_8732945662878769189_o.png?oh=0e300a2c5a59a91c6626f2268837a64f&oe=5A88D187','https://scontent-sit4-1.xx.fbcdn.net/v/t31.0-8/23736415_1041717495967888_7412720871395934205_o.png?oh=aea0f2189cea44c697198740c25d1350&oe=5A99923A',NULL,NULL,'2017-11-21','pki, cina, jokowi, pki, panglimatni, fbi, invasi, freeport, cekfakta','2018-12-27 14:22:48',3,'2017-11-21 00:51:43',904,1,''),(5,1,NULL,2,'Fabricated Content','https://youtu.be/YXeGUPoDEzM','facebook.com','','https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/23722770_1041666375973000_7757130084239014121_n.jpg?oh=f274ec8c931496e4e5403da215031a84&oe=5A9EA05A','https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-9/23755646_1041666432639661_8023688260564111183_n.png?oh=874fa22eed609aa232401ce9aaedcd77&oe=5A8E5B8D',NULL,NULL,'2018-11-21','setnov, cina, wisatawan, komunis, kiamat, cekfakta','2019-01-17 07:58:27',14,'2017-11-21 01:02:14',904,1,''),(7,1,NULL,2,'Fabricated Content','(1) http://www.galamedianews.com/haji/169468/kemenag-viral-surat-penetapan-pemberangkatan-haji-2018-hoax.html (2) http://prfmnews.com/berita.php?detail=kemenag-pastikan-surat-penetapan-pemberangkatan-haji-2018-hoax (3) https://kemenag.go.id/berita/read/506212/viral-surat-penetapan-pemberangkatan-haji-2018--dirjen-phu--itu-hoax (4) https://kumparan.com/mediamadura/pemberangkatan-haji-dan-nomor-porsi-bisa-dicek-secara-online (5) https://nasional.tempo.co/read/752939/pemerintah-janjikan-calon-jemaah-haji-berangkat-sesuai-antrian (6) https://www.facebook.com/groups/fafhh/permalink/558914381107768/','facebook.com','','https://scontent-sit4-1.xx.fbcdn.net/v/t31.0-8/23825958_1041650535974584_7951762188063873215_o.png?oh=9d67d84326eb4c930e3d66b1afb4f344&oe=5A933353','',NULL,NULL,'2017-11-21','haji, 2018, siskohaji, cekfakta','2019-01-17 08:03:36',14,'2017-11-21 01:05:52',904,1,''),(8,1,NULL,1,'TRUE','(1) http://megapolitan.kompas.com/read/2017/11/19/21001611/pilotnya-berkata-rasis-garuda-indonesia-minta-maaf-dan-berikan-sanksi (2) https://news.detik.com/berita/d-3733910/viral-video-pilot-bicara-singgung-etnis-ini-penjelasan-garuda','twitter.com','','https://scontent-sit4-1.xx.fbcdn.net/v/t31.0-8/23737940_1041619199311051_5514239822735885275_o.jpg?oh=ada5bb4a703b693d354a11a214398141&oe=5A92D8D8','https://scontent-sit4-1.xx.fbcdn.net/v/t31.0-8/23736205_1041619169311054_8772109113880047952_o.jpg?oh=29a1b7a4a716eae997a6e650c2d95579&oe=5A939153',NULL,NULL,'2017-11-21','garudaindonesia, pilot, cina, sara, cekfakta','2019-01-17 07:56:05',14,'2017-11-21 01:10:24',904,1,''),(9,1,NULL,2,'-','https://news.detik.com/berita/3312414/begini-aturan-main-pengumpulan-dana-kampanye-dalam-pilkada-2017','facebook.com','SocialMedia','https://turnbackhoax.id/wp-content/uploads/2018/01/16649177_10154075828447315_1559721213315838794_n-540x381.jpg','',NULL,NULL,'2018-04-29','Disinformasi, GNPF MUI, TEMAN AHOK, cekfakta','2019-01-17 07:45:18',14,'2018-04-29 14:59:39',904,1,''),(10,1,NULL,2,'-','https://www.facebook.com/groups/fafhh/permalink/424358001230074/\r\n\r\nhttps://m.youtube.com/watch?v=1W0rUWb8nOo&feature=youtu.behttp://m.viva.co.id/…/884695-data-real-count-kpu-berubah-su…\r\nhttp://megapolitan.kompas.com/…/kpu.dki.akui.sempat.salah.m…','facebook.com','SocialMedia','https://turnbackhoax.id/wp-content/uploads/2018/01/16831823_10154686291458591_8852958332514257808_n.jpg','',NULL,NULL,'2018-04-29','Disinformasi, Anies - Sandi, KPU, cekfakta','2019-01-17 07:44:06',14,'2018-04-29 14:59:39',904,1,''),(11,1,NULL,2,'-','https://www.facebook.com/groups/fafhh/permalink/424342684564939/','facebook.com','SocialMedia','https://turnbackhoax.id/wp-content/uploads/2018/01/16649165_1293235387423596_5120339516366495348_n.jpg','',NULL,NULL,'2018-04-29','Badja Uang, cekfakta','2019-01-17 07:40:05',14,'2018-04-29 14:59:39',904,1,''),(12,1,NULL,2,'-','http://www.satuharapan.com/…/wagub-dki-sumbang-rp-20-juta-u…\r\n\r\nhttps://www.facebook.com/groups/fafhh/permalink/424523074546900/\r\n\r\nhttps://www.facebook.com/groups/fafhh/permalink/424398761225998/','facebook.com','','https://turnbackhoax.id/wp-content/uploads/2018/01/16864139_10154563238043542_4317643679418567700_n.jpg','',NULL,NULL,'2018-04-29','Djarot, Kristen, cekfakta','2019-01-17 07:34:34',14,'2018-04-29 14:59:39',904,1,''),(13,1,NULL,1,'-','https://www.facebook.com/youthmanualid/posts/625387854320164','','SocialMedia','https://turnbackhoax.id/wp-content/uploads/2018/01/Snipaste_2018-01-27_08-10-52-678x381.pnghttps://turnbackhoax.id/wp-content/uploads/2018/01/Snipaste_2018-01-27_08-10-26-300x231.png','',NULL,NULL,'2018-04-29','Tipe HOAX, cekfakta','2019-01-17 07:30:10',14,'2018-04-29 14:59:39',904,1,''),(15,1,NULL,2,'-','https://kumparan.com/jofie-yordan/ainun-najib-bantah-ikut-urus-situs-kpu-dan-kawalpilkada\r\n\r\nhttps://www.facebook.com/groups/fafhh/permalink/423320498000491/','facebook.com','','https://turnbackhoax.id/wp-content/uploads/2017/02/8088e929-750a-4ba9-a29c-b7c-768x2430.jpghttps://turnbackhoax.id/wp-content/uploads/2017/02/16830956_10154555277362981_7285334995229532920_n.jpg','',NULL,NULL,'2018-04-29','Ainun najib, cekfakta','2019-01-17 07:12:42',14,'2018-04-29 14:59:39',904,1,'');
/*!40000 ALTER TABLE `antihoax` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `antihoax_content`
--

DROP TABLE IF EXISTS `antihoax_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `antihoax_content` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `antihoax_id` int(11) unsigned NOT NULL,
  `title` varchar(512) DEFAULT NULL,
  `content` varchar(8192) DEFAULT NULL,
  `fact` varchar(8192) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2928 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `antihoax_content`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `antihoax_content` WRITE;
/*!40000 ALTER TABLE `antihoax_content` DISABLE KEYS */;
INSERT INTO `antihoax_content` VALUES (877,4,'[HOAX] \"PKI DAN CINA SDH SIAP MERAMPAS INDONESIA\"','\"PKI DAN CINA SDH SIAP MERAMPAS INDONESIA.\r\nMEREKA BERSUMPAH AKAN MENYEMBELIH KAUM MUSLIMIN\r\nBismillahirrohmanirohiim,..\r\nLindungi kami Ya Allah.....\r\nUlasan dr sahabat salah satu anggota dewan/parpol (semoga bermanfaat, silahkan disikapi dgn baik) :\r\n( Ini berita dari temen yg dosen di Bandung )\r\n[19/12 19.37] YY: Saya tadi jam 14 diundang rapat koordinasi di kampus pascasarjana dan yg mengundang adalah direktur pascasarjana sekaligus tokoh Jawa Barat... Isinya mengajak untuk bersatu padu dalam NKRI.. Beliau diminta juga untuk memberikan arahan dan duduk bersama dgn panglima TNI... Reuwas oge... Ternyata benar oge.. Ancaman sudah di depan mata tinggal menunggu waktu\r\n[19/12 19.38] YY: Jadi naon hubunganana sama bidang pendidikan.. Ternyata juga sudah dimulai efek global nya\r\n[19/12 19.38] YY: Dari luar\r\nSaat ini masih perang Proxy... Issue ini sudah lama, tapi baru nyadar dan berasa dampaknya sekarang.\r\nKata Panglima kalo pun kita harus melawan atau perang kita hanya bisa bertahan 3 hari saja..\r\nIndonesia sudah tidak bisa bayar hutang Ke China, makanya Asset negara banyak dijualin..\r\nKalo sampe rusuh lagi kayak 98. Itulah alasan China mengancam akan kirim militernya ke Indonesia, China di dukung Australia, Singapore dan Malaysia. Saat ini mereka sudah stand by. Bila kejadian 98 terulang mereka akan masuk Indonesia dengan alasan mengamankan asetnya, padahal misinya menguasai Indonesia. China akan berhadapan dgn Amerika. Jadi Indonesia sbg tempat pertaruhan negara2 itu.\r\nMakanya banyak China masuk Indonesia, karena Joko\'Wie dipaksa buat Amandemen bebas masuk Indonesia dan bisa jadi WNI..\r\nIni semua ulah si Joko\'Wie...!!\r\nPejabat negara, Polri, DPR MPR udah di beli China semua...\r\nChina ngincer Freeport endingnya head to head sama USA... Indonesia sbg ladang rebutan mereka kita yg jadi korbannya. Semua itu sekali lg krn kebijakkan Joko\'Wie\r\nJadi kenapa Panglima mengajak masyarakat dan kalangan akademisi buat bersatu dan tenang, agar tidak terjadi kerusahan seperti 98. Biarkan si Joko\'Wie itu kelarin masa jabatannya. Supaya tidak ada alasan negara2 itu masuk Indonesia dengan alasan bantu pengamanan. Dengan begitu kita tidak kasih kesempatan mereka masuk ke dalam negeri ini.\r\nTahan Imigran2 dari China, kirim balik ke negara mereka. Karena mereka di set selain sbgi mata-mata, juga sbgi team advance militer China utk buat Strategi, bayangkan China2 yg masuk indonesia kelak mereka akan membunuh menyiksa kita dan keluarga kita !!\r\nMakanya sebelum itu terjadi kita masyarakat dihimbau utk dapat memberikan informasi ke Aparat utk menangkap dan memulangkan ke China.\r\nJadi kita skrng paham ya, kenapa Ahok begitu Pede bilang kelak bakal jadi RI1. Ya kalo invasi China masuk Indonesia besar-besaran, bisa dibayangkan kemudian kita bakal dijajah China.\r\nJadi skrng gak usah rusuh, tetap tenang, biarkan Si Joko\'wie selesai kan masa jabatannya, bantu aparat menemukan Imigran2 gelap dari negara manapun, terutama China, tangkap dan laporin.\r\nSekarang mereka pura2 lugu, padahal mereka itu \"binatang bengis\"\r\nFaham PKI mereka hidupkan lagi di Indonesia dengan pake Kamuflase di atas dengan nama FBI atau Forum Bhayangkara Indonesia.\r\nJokoWie nanggung dosa besar kelak dari sepanjang sejarah Indonesia.\r\nLewat Masa Jabatan JokoWie barulah kita hadang mereka-mereka, ganti Kepala negara dulu baru ganyang China !!!!\r\nSEBARKAN KESEMUA MASYARAKAT NKRI BILA KAMU MEMILIKI JIWA DAN DARAH MERAH PUTIH !!!\r\n# saveNKRI\r\n# tafakur\"','Dari beberapa klaim sumber-sumber informasi dan peristiwa yang disebutkan di narasi, (1)'),(878,5,'\"Ramai Berita SetNov Warga China Terus Datang\"','\"Di Tengah Ramainya Berita SetNov, Warga Kebangsaan China Sampai Saat ini Terus Berduyun\" Masuk ke Negeri ini\r\nDi Sengaja atau Tidak, Wallahu A\'llam\r\nLebih Parahnya Semua Media Bungkam, Mengecoh Langit Menyebrangi Lautan kah\r\n#Indonesia_Waspada_Komunis\r\n#Generasi_Muda_Akhir_Zaman\"','\"Faktanya Video yang diberikan oleh pemosting adalah video lama pada Tahun 2016 bukan pada saat ini, video di yotube sendiri mengenai kedatangan wisatawan RRC yang mendatangi Manado pada tahun tersebut Video Youtube: https://youtu.be/YXeGUPoDEzM Mari Bijak dalam membagikan dan menerima Info dengan cek kebenaran dari sebuah Info tersebut. #berinternetBijak #berinternetSehat #berinternetCerdas #beSmart #stophoax #stopprovokasi #stoppropagandanegatif #stoppembodohanmassal\"'),(879,7,'Surat Penetapan Pemberangkatan Haji Tahun 2018','\"SURAT PENETAPAN PEMBERANGKATAN HAJI TAHUN 2018\r\nSehubungan dengan akan datangnya musim Haji tahun 2018, dan sesuai data yang ada di Sistem Komputerisasi Haji (SISKOHAJI) Kementerian Agama RI, maka perlu adanya penetapan pemberangkatan calon jamaah haji tahun 2018, agar tidak terjadi perubahan dikemudian hari.\r\nYang tersebut dibawah ini:\r\nNama : RENALDY RIRIN BIN RIRIN\r\nTempat Tanggal Lahir : Bukit Tinggi, 17 April 1951\r\nAlamat : Cipinang Bawah, Rt.002/014 Kelurahan Cipinang, Kecamatan Pulogadung, Jakarta Timur\r\nNo. SPPH : 405688\r\nNo. Porsi : 162559\r\nKloter : 16\r\nEmbarkasi : DKI Jakarta\r\nDemikian Surat Penetapan ini dibuat untuk dapat dipergunakan sebagaimana mestinya.\r\nJakarta, 16 Nopember 2017\r\nKEMENTRIAN AGAMA RI\r\nPENYELENGGARA HAJI & UMROH\r\nDR. H. NURSYAM, MA\r\n19590812982031007\".','Dirjen Penyelenggaraan Haji dan Umrah, Nizar Ali memastikan bahwa informasi yang tersebar dalam bentuk surat tersebut tidak benar atau hoax. “Itu jelas hoax alias palsu. Siapapun yang mendapatkannya agar diabaikan saja. Surat itu ditandatangani Pak Nur Syam selaku Penyelenggara Haji dan Umroh. Padahal, beliau kan Sekjen Kemenag,” kata Nizar, Jumat (17/11). Nizar menambahkan jamaah haji yang akan berangkat tahun 2018 akan diumumkan resmi oleh Ditjen Penyelenggaran Haji dan Umroh, Kementerian Agama. Yang akan berangkat tentu sesuai dengan nomor urutnya, namun pengumumannya tidak dilakukan sekarang. “Nanti akan kita umumkan nama-nama yang berangkat agar bersiap untuk melakukan pelunasan. Akan tetapi belum kita lakukan sekarang,” ujarnya. Sebelumnya, Kepala Seksi Haji dan Umroh, Sampang Syamsuri, mengungkapkan calon jamaah haji yang sudah mendaftar dan mendapat nomor porsi bisa mengkroscek keberangkatannya melalui sistem online. “Cek online ini untuk mendapatkan informasi keberangkatan lebih pasti. Berdasarkan nomor porsi haji itu calon jemaah bisa mengecek keberangkatannya sehingga dapat mempersiapkan segala sesuatunya dengan lebih matang,” katanya, Rabu (21/6). Selain itu, Kepala Sub Direktorat Pendaftaran Haji, Nur Aliya Fitra pernah mengaskan tidak ada penumpang gelap pengguna jatah jemaah haji. Dan Ia meminta agar jemaah haji sabar karena daftar antrian reguler saat ini mencapai 3 juta jemaah dengan waktu tunggu keberangkatan tertinggi hingga 37 tahun. \"Pemerintah menetapkan penentuan jemaah yang berhak melunasi sudah berdasarkan data base sistem komputerisasi haji terpadu. Tidak dimungkinkan lagi jemaah yang tidak sesuai persyaratan bisa dipanggil untuk menyetorkan biaya pelunasan haji,\" tegasnya, Jumat (11/3/2016).'),(880,8,'Pilot Garuda Berkata Rasis saat Petugas Bea Cukai Periksa Kabin Pesawat','“how about this @IndonesiaGaruda racism on your airplane? I believe this is one of your Pilot!” “Kerjain saja CINA2 ITU” (just work on that Chinese)”\r\n\r\nSebuah video yang memperlihatkan seorang pilot dari maskapai milik negera Indonesia sedang berseteru tegang dengan petugas bea cukai di kabin pesawat, menjadi viral di media sosial. Dalam video yang berdurasi 2 menit 8 detik itu, sang pilot menolak diperiksa oleh pilot menolak diperiksa petugas Bea-Cukai di dalam pesawat. Ia juga mengatakan selama menjalankan tugas sebagai pilot Garuda Indonesia tak pernah diperiksa seperti itu. Sang pilot pun malah menyarankan untuk memeriksa maskapai lain.\r\n“Bukan kalian tidak boleh ke pesawat, boleh! Tapi, ini pesawat punya negara. Kalau kau mau kerjain tu China China itu tuh, Sriwijaya sana tuh,” ucap pilot tersebut seperti terekam dalam video.\r\n\r\nKejadian bermula saat pesawat dengan nomor penerbangan GA8510 SIN-DTB baru mendarat di Bandara Silangit, Siborong-borong. Setelah penumpang turun, petugas Bea Cukai kemudian naik memeriksa pesawat dan tas kru. Pilot menolak diperiksa karena merasa selama ini belum pernah ada pemeriksaan di dalam pesawat. Kemungkinan juga pilot belum mengetahui bahwa sesuai SOP, petugas Bea Cukai berhak masuk ke dalam pesawat.','Pihak Garuda Indonesia langsung memberikan klarifikasi terkait peristiwa itu. Dikutip dari kompas.com, Hengki Heriandono, Pelaksana Harian Vice President Corporate Secretary Garuda Indonesia, mengatakan telah menerima dan melihat video tersebut. “Garuda Indonesia sangat menyesalkan perilaku dan pernyataan pilot tersebut. Meskipun pilot memberikan izin petugas Bea Cukai melakukan pemeriksaan di dalam pesawat, pernyataan dan sikap pilot sangat disayangkan,” kata Hengki kepada Kompas.com, Minggu (19/11/2017) malam. Menurut Hengki, Garuda Indonesia sebagai maskapai nasional Indonesia menghormati semua stakeholders dan institusi yang menjadi mitra kerja, baik secara langsung maupun tidak langsung, serta menghormati prosedur kerja setiap petugas yang menjalankan tugasnya. Garuda Indonesia telah berkoordinasi dengan Bea Cukai serta menjelaskan kesalapahaman yang terjadi dan tidak menoleransi sikap dan pernyataan pilot tersebut sehinga permasalahan sudah dapat dipahami bersama. “Direksi Garuda Indonesia juga sudah menyampaikan secara langsung permohonan maaf kepada direksi maskapai yang disebut dan permasalahan sudah diselesaikan dengan baik,” ucap Hengki. Garuda Indonesia juga sudah melakukan investigasi internal terhadap pilot yang bersangkutan dan pilot tersebut sudah diberikan sanksi tegas sesuai tingkat pelanggaran yang dilakukan. Dan, inilah pernyataan lengkap klarifikasi Garuda Indonesia yang didapat dari sumber detik.com: 1. Rekaman video percakapan antara pilot Garuda Indonesia dan petugas bea cukai tersebut terjadi pada tanggal 31 Oktober 2017 di bandara Silangit. Pada saat itu GA8510 SIN-DTB baru mendarat di Silangit. Setelah penumpang turun, kemudian naik petugas Bea-Cukai yang akan memeriksa pesawat dan tas kru. 2. Pilot menolak diperiksa karena merasa selama ini belum pernah ada pemeriksaan di dalam pesawat. Kemungkinan pilot belum mengetahui secara menyeluruh bahwa sesuai SOP petugas Bea-Cukai berhak masuk ke dalam pesawat. 3. Pada saat pilot memberikan penolakan secara tidak sengaja dalam kondisi emosi terucap kata-kata yang bernada menyinggung etnis tertentu dan maskapai tertentu. 4. Garuda Indonesia sangat menyesalkan perilaku dan pernyataan pilot tersebut. Meskipun pilot memberikan izin petugas Bea-Cukai melakukan pemeriksaan di dalam pesawat namun pernyataan dan sikap pilot sangat disayangkan dan tidak dapat ditolerir. 5. Garuda Indonesia sebelumnya juga telah menyampaikan langsung permohonan maaf kepada pihak-pihak terkait (antara lain kepada instansi Bea-Cukai dan maskapai yang disebut dalam video tsb) atas pernyataan personal oknum pilot tersebut dan sudah dapat diterima dan diselesaikan dengan baik. 6. Garuda Indonesia memastikan pernyataan yang diucapkan pilot tersebut merupakan hal yang bertentangan dengan komitmen Garuda Indonesia sebagai national flag carrier yang menjunjung tinggi etika keberagaman budaya dalam budaya kerja yang dijalankan perusahaan. 7. Garuda Indonesia menghormati semua stakeholder dan institusi yang menjadi mitra baik secara langsung maupun tidak langsung, dan menghormati setiap prosedur kerja masing-masing institusi dan petugas yang sedang menjalankan tugas. 8. Melalui budaya kerja yang ditanamkan kepada karyawan perusahaan, dan juga telah dipahami oleh seluruh karyawan, Garuda Indonesia kembali menegaskan bahwa Manajemen Garuda Indonesia akan menindak tegas setiap tindakan yang berlawanan dengan prinsip dan budaya kerja yang dijunjung tinggi perusahaan tersebut. 9. Dalam kaitan hal tersebut Garuda Indonesia telah berkoordinasi dengan Bea-Cukai maupun pihak pihak lain yang disebutkan dalam rekaman video tersebut dan menjelaskan sikap Garuda Indonesia yang tidak mentoleransi hal tersebut. 10. Kesalahpahaman tersebut juga telah dapat diselesaikan dengan baik oleh Garuda Indonesia dengan pihak-pihak terkait dan seluruh pihak sepakat untuk saling mendukung untuk memberikan pelayanan terbaik kepada para penumpang dan masyarakat umum. 11. Perusahaan juga telah melakukan investigasi internal kepada Pilot yang bersangkutan dan telah memberikan sanksi yang tegas sesuai tingkat pelanggaran yang dilakukan.'),(881,9,'[DISINFORMASI] Perlakuan Berbeda antara GNPF MUI dengan Teman Ahok Terkait Sumbangan Dana di Hadapan Polri','GNPF- Dana sedekah umat jelas sumbernya dan penggunaannya, Dipolisikan\r\nTeman Ahok : Dana sumbangan untuk kegiatan poltik dan tidak jelas sumbernya. Dibiarkan.\r\nKok beda perlakuannya? Apakah umat tidak boleh bersedekah','1. Teman Ahok pernah diperiksa KPK.\r\nLink : https://googleweblight.com/…\r\n\r\n2. Teman Ahok didirikan memang untuk membantu kampanye Calon Gubernur Basuki Tjahya Purnama atau dengan kata lain kegiatan politik. Visi misi Teman Ahok jelas tertera di websitenya.\r\nhttp://temanahok.com/visi-ahok?l=id\r\n\r\n3. Laporan keuangan teman Ahok bisa diakses siapa saja di laman http://www.temanahok.com/laporan?l=id\r\n\r\n4. Laporan Keuangan GNPF sebenarnya tidak jelas sumber dan penggunannya. Tidak ada laporan yang bisa diakses publik melalui media apapun selain klaiman dari pihak GNPF sendiri. Bahkan penggunaan dana aksi demo dicurgai sebagai pencucian uang kini sedang diusut pihak Kepolisian\r\nhttp://www.cnnindonesia.com/…/ketua-gnpf-mui-jalani-pemeri…/\r\n\r\n5. Dan yang terakhir tentu saja umat masih boleh bersedekah.\r\nSalah satu laman acuan untuk bersedekah\r\nhttp://ayosedekah.org/'),(882,10,'[DISINFORMASI] Perubahan Suara saat Hitungan KPU sudah 100%, Perolehan Suara Anies-Sandi Berkurang 7000 suara','https://turnbackhoax.id/wp-content/uploads/2018/01/16831823_10154686291458591_8852958332514257808_n.jpg','“Iya, ada kesalahan input data, di TPS 10 Kelurahan Pela Mampang, Mampang Prapatan di Jakarta Selatan untuk paslon 3, dari mestinya 266 tertulis 7.266,” kata Sumarno kepada VIVA.co.id, Sabtu malam, 18 Februari 2017.\r\n\r\nSementara itu, untuk TPS 12 Tanjung Barat, lanjut dia, terjadi kesalahan data suara untuk pasangan calon nomor urut 2 yang semestinya 286, tetapi didata Situng tertulis 236. Artinya, pasangan calon nomor urut 2 suaranya bertambah sebanyak 50 suara. “Sudah diperbaiki pada jam 11.00 WIB tadi,” ujar dia.'),(883,11,'[HOAX] Uang Bayaran dari Tim Basuki-Djarot','https://turnbackhoax.id/wp-content/uploads/2018/01/16649165_1293235387423596_5120339516366495348_n.jpg','Foto berupa tiga lembar uang Rp. 100.000 dengan amplop putih dan brosur kampanye Badja dibagikan oleh banyak akun FB, salah satunya Ratna Naomy yg memang sering membagikan berita hoax. Caption semua foto menuliskan status seolah itu adalah uang sogokan yg mereka terima dalam “serangan fajar”.\r\n\r\nFoto tersebut itu di setting, terlihat dari ;\r\n\r\n1. Ketiga uang yg ada di semua foto nomor serinya sama\r\n2. Amplop yg ditunjukkan mulus bagian lemnya, seolah tidak pernah ditempel atau mungkin dibuka dengan cara yg sangat canggih.\r\n\r\nKesimpulan ; Hoax yang direplikasi dengan menggunakan foto yang sama.'),(884,12,'[KLARIFIKASI] Foto Wagub DKI Sedang Berada di Sebuah Gereja dan Mempertanyakan Agama Djarot','https://turnbackhoax.id/wp-content/uploads/2018/01/16864139_10154563238043542_4317643679418567700_n.jpg','1. Secara resmi dan sah Djarot beragama Islam\r\nSumber :\r\nhttps://id.m.wikipedia.org/wiki/Djarot_Saiful_Hidayat\r\n\r\n2. Foto tersebut diambil pada oktober 2015 ketika Djarot sebagai wagub DKI menghadiri peletakan batu pertama gereja HKBP Semper dan hal itu sah sah saja dilakukan karena posisi Djarot sebagai pejabat publik dan bangunan yang di hadiri ketikaa peletakan batu pertama adalah rumah ibadah dari salah satu agama yang diakui di Indonesia.\r\nSumber :\r\nhttp://www.satuharapan.com/…/wagub-dki-hadiri-pesta-peletak…\r\n\r\n3. Djarot juga menunjukkan identitas sebagai muslim ketika peletakan batu pertama gereja tersebut dimana beliau mengucapkan Assalamualaikum kepada jemaat yang hadir dan di sambut balik dengan ucapan Waalaikumsalam oleh jemaat.\r\nSumber :\r\nhttp://www.satuharapan.com/…/djarot-assalamualaikum-jemaat-…\r\n\r\n4. Djarot saat itu juga menyanyikan lagu Indonesia Pusaka sesuai keterangan gambar. Karena ada isu yg menyatakan dia ikut bernyanyi dlm rangka ibadah.'),(885,13,'(EDUKASI) 7 Tipe Informasi Hoax','','Dari yang saya amati, “tema” pesan hoax biasanya seputar:\r\nKesehatan.\r\nBiasanya sih, berisi hal-hal yang bikin parno, seperti seputar penyakit atau hal/produk yang membahayakan kesehatan. Atau bisa juga info mengenai obat ampuh.\r\nPesannya sering dilengkapi cerita para penderita plus mencatut nama ahli atau badan kesehatan, supaya terkesan real. Orang sering menyebarkan hoax seperti ini tanpa sengaja. Lebih karena kepedulian dan merasa khawatir.\r\nHal yang membahayakan diri.\r\nMisalnya, orang yang tersetrum charger hape hingga tewas, main game tertentu bikin serangan jantung hingga dilarikan ke rumah sakit.\r\nSama seperti poin 1, pesan ini menyebar karena berkaitan dengan keselamatan manusia.\r\nKejadian yang bikin panik atau mempengaruhi kehidupan orang banyak.\r\nSeperti serangan teror, bom, kebanjiran, kebakaran besar, serta lainnya.\r\nBiasanya, langsung muncul tuh, info “update” tentang lokasi yang jadi target, lokasi yang harus dihindari, dan lain sebagainya. Pesan kayak begini lagi-lagi cepat menyebar sebelum terklarifikasi lantaran dianggap urgent.\r\nPeneror pun makin “happy” dengan banyaknya hoax dan kepanikan yang tersebar. Grrrrrggghhhh!\r\nPesan “multilevel”.\r\nYang ujung-ujungnya meminta disebarkan ke sekian orang, dan jika tidak dilakukan akan terkena musibah. Oh, c’mon?! Nggak ngerti lagi deh, sama orang yang bikin hoax begini. Membohongi, menakuti dan bikin rempong!\r\nBlack campaign atau menggosipkan seseorang.\r\nWalau ganggu, tapi hoax model begini, menurut saya nggak terlalu bahaya.\r\nKenapa?\r\nSoalnya, orang udah lebih cerdas, dan nggak langsung percaya. Biasanya sih, yang menyebarkan info kayak begini cuma oknum tertentu yang nggak suka dengan seseorang.\r\nBerita terkini yang salah.\r\nSeperti medsos tertentu yang akan ditutup dan menghapus data kamu (padahal ternyata nggak), foto demonstratsi yang sedang berlangsung (padahal itu foto setahun yang lalu) dan lain sebagainya.\r\nBiasanya informasinya error, alias salah, nggak tepat, terlalu gegabah ngambil kesimpulan, atau bisa juga sengaja buat memprovokasi.\r\nHadiah.\r\nMisalnya: Sebarkan link ini ke 10 orang, dan kamu akan mendapat hadiah langsung jalan-jalan ke Paris…. Paris Van Java… Zzzzzz\r\nPenting banget nih, melawan dan menyetop hoax, setidaknya dengan nggak membiarkan diri kita terpengaruh atau ikutan menyebarkannya. Yuk ikutan ngobrol publik tentang “Hoax dan Kebijakan Literasi” dalam rangkaian Pesta Pendidikan di Kota Bandung.\r\n*Edukasi ini lansiran dari Fanpage Youth Manual'),(886,15,'HOAX: KPU Dipimpin Ainun Najib Dan Servernya Dikendalikan Dari Singapura','Beredar berita hoax dengan narasi seperti berikut:\r\n\r\n‘Ternyata kepala administrator server KPU si ainin nadjib… Team pemenang jokowi di pilpres masa lalu yg tinggal di singapore… Dan skrg pun ternyata server kpu dikendalikan dr singapore…\r\n\r\nInnalillahi…\r\n\r\nLah skrg lembaga negara… servernya dikendalikan dr singapore?\r\n\r\nLaa hawla wa laa quwwata illaa billaah…’','Ainun Najib membantah keterlibatannya dalam operasional situs maupun server KPU, baik Pilkada wilayah Jakarta atau di daerah sebagaimana dimuat dalam sebuah artikel portal berita kumparan.com seperti berikut:');
/*!40000 ALTER TABLE `antihoax_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `antihoax_draft`
--

DROP TABLE IF EXISTS `antihoax_draft`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `antihoax_draft` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(9) unsigned NOT NULL DEFAULT 1,
  `authors` varchar(250) DEFAULT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0="Dalam Proses", 10="In Progress", 1="BENAR", 11="TRUE", 2="SALAH", 12="FALSE", 3="Berita", 13="News", 4="Edukasi", 14="Education", 5="Klarifikasi", 15="Clarification"',
  `classification` enum('-','False Connection','False Context','Satire','Manipulated Content','Misleading Content','Impostor Content','Fabricated Content','TRUE') NOT NULL DEFAULT '-',
  `references` varchar(2048) DEFAULT '',
  `source_issue` varchar(90) DEFAULT '',
  `source_link` varchar(250) DEFAULT '',
  `picture1` varchar(250) DEFAULT '',
  `picture2` varchar(250) DEFAULT '',
  `picture3` varchar(250) DEFAULT '',
  `picture4` varchar(250) DEFAULT '',
  `tanggal` date DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_id` int(9) unsigned DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `region_id` int(9) DEFAULT NULL,
  `region_level` tinyint(1) DEFAULT NULL,
  `conclusion` varchar(1024) DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `Tags` (`tags`) USING BTREE,
  KEY `Klasifikasi` (`classification`) USING BTREE,
  KEY `Wilayah` (`region_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `antihoax_draft`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `antihoax_draft` WRITE;
/*!40000 ALTER TABLE `antihoax_draft` DISABLE KEYS */;
INSERT INTO `antihoax_draft` VALUES (1,1,'32, 24, 27, 35',0,'Fabricated Content','Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data.','admin','admin.org','https://laravel.io/images/blackfire-io.png','https://laravel.io/images/digitalocean.png',NULL,NULL,'2018-11-13','admin, test','2018-11-14 20:19:39',1,'2018-11-14 14:57:38',904,1,'Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data.'),(2,1,'23',10,'False Context','Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing\r\nTesting Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing\r\nTesting Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing','Testing','Testing','https://laravel.io/images/blackfire-io.png','https://laravel.io/images/digitalocean.png',NULL,NULL,NULL,'testing','2018-11-14 20:24:24',1,'2018-11-14 20:24:24',904,1,'Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing\r\nTesting Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing\r\nTesting Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing\r\nTesting Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing\r\nTesting Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing'),(3,28,'29',2,'Manipulated Content','https://www.liputan6.com/cek-fakta/read/3692146/cek-fakta-foto-syur-grace-natalie-yang-viral-ternyata-hasil-editan','Facebook','https://www.facebook.com/dwi.sayekty.3/posts/192331321670127','https://cdn1-production-images-kly.akamaized.net/9HjMTZPbLO87hikH7yPvymz56Xs=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/2408284/original/080920100_1542193236-20181114-Grace_Natalie.jpg','',NULL,NULL,'2018-11-15','Grace Natalie','2018-11-15 03:32:52',28,'2018-11-15 03:32:52',0,0,'Berdasarkan penelusuran, ternyata foto tersebut adalah hasil manipulasi. Pimpinan Partai Solidaritas Indonesai  (PSI) juga telah membantah foto tersebut.'),(4,40,'14',2,'Manipulated Content','https://metro.tempo.co/read/1151438/genset-dekat-panggung-utama-reuni-akbar-212-meledak\r\nhttps://www.cnnindonesia.com/nasional/20181201231234-20-350431/genset-meledak-di-area-reuni-aksi-212-massa-tetap-tenang','Facebook','https://www.facebook.com/sufriyadi.alzaelani/videos/pcb.2212137639040479/2212137585707151/?type=3&theater','https://cdn.tmpo.co/data/2018/12/12/id_803529/803529_720.jpg','',NULL,NULL,'2018-12-12','Reuni 212, 212','2018-12-17 07:06:38',40,'2018-12-17 07:05:52',9041304,3,'Dari penelusuran fakta di atas informasi adanya Bom Monas pada Reuni 212 adalah keliru.');
/*!40000 ALTER TABLE `antihoax_draft` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `antihoax_draft_content`
--

DROP TABLE IF EXISTS `antihoax_draft_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `antihoax_draft_content` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `antihoax_id` int(11) NOT NULL,
  `title` varchar(512) DEFAULT '',
  `content` varchar(8192) DEFAULT '',
  `fact` varchar(8192) DEFAULT '',
  PRIMARY KEY (`id`,`antihoax_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `antihoax_draft_content`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `antihoax_draft_content` WRITE;
/*!40000 ALTER TABLE `antihoax_draft_content` DISABLE KEYS */;
INSERT INTO `antihoax_draft_content` VALUES (6,1,'Admin test for creating draft data','Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data.','Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data Admin test for creating draft data.'),(7,2,'Testing','Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing\r\nTesting Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing\r\nTesting Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing\r\nTesting Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing\r\nTesting Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing','Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing\r\nTesting Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing\r\nTesting Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing\r\nTesting Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing\r\nTesting Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing Testing'),(8,3,'[SALAH] Foto Syur Grace Natalie yang Viral Ternyata Hasil Editan','Beredar sebuah foto syur yang diduga Ketua Umum Partai Solidaritas Indonesia (PSI) Grace Natalie di facebook.','Foto yang diduga Grace ternyata foto suntingan atau editan. Akun facebook bernama Aribowo Sasmito lewat unggahannya di grup facebook Forum Anti Fitnah, Hasut, dan Hoax sudah menjelaskan bahwa foto tersebut adalah editan. Bantahan juga telah disampaikan pihak PSI.'),(9,4,'Benarkah Ada Bom Meledak Saat Reuni 212 di Monas?','Informasi tentang adanya bom meledak saat reuni 212 di Monas, menjadi viral di media sosial. Pengunggahnya adalah akun di Facebook bernama Supri Yadi Ibn Almahdi pada 8 Desember 2018. Unggahan ini telah dibagikan hingga 2,1 ribu kali.\r\n\r\nAkun tersebut mengunggah satu buah video dan tiga poster. Video berdurasi 2 menit 44 detik berisi potongan gambar dan tulisan yang menggambarkan adanya bom meledak saat peserta reuni 212 sedang berkumpul di depan panggung. Pada vídeo itu tertera judul mencolok “Bom Monas di Acara Reuni Akbar 212”\r\n\r\n“Ada peristiwa yg belum dipublikasikan Panitia Reuni Akbar Mujahid 212 di Monas yaitu: Dua bom paralon dipasang musuh bangsa dan negara di lokasi acara reuni akbar 212. Bom paralon pertama meledak dekat genset acara reuni 212 hari Sabtu 1 Desember 2018 jam 18.15 WIB. Saat terjadi ledakan beberapa laskar FPI dan aparat keamanan berkumpul di lokasi mengumpulkan semua serpihan ledakan dan barang bukti lainnya utk penyelidikan.\r\n\r\nLaskar FPI bersama aparat TNI dan Polri menyisir semua lokasi acara yang vital di lingkungan monas spt panggung, kemah dan tempat logistik. Laskar FPI sempat mengeluarkan jamaah peserta reuni dari beberapa ruas dan menutup beberapa pintu Monas untuk pensterilan bersama aparat. Setelah dipastikan aman, baru semua pintu dibuka kembali dan jamaah dipersilakan masuk kembali.\r\n\r\nPada Sabtu 1 Desember 2018 ba’da isya setelah disisir laskar FPI bersama aparat ditemukan bom paralon yang belum meledak di bawah panggung acara reuni 212 kemudian diamankan aparat. Bom ini terdiri dari 2 pipa dan kotak yang berisi kabel-kabel. Di dalam kotak juga terdapat sebuah handphone tipe lama.\"\r\n\r\nSelain video tersebut, ada tiga buah poster bergambarkan Habib Rizieq Al Shihab lengkap dengan latar monas dan ledakan besar di tengah peserta reuni 212. Isi poster itu menuntut agar pelaku dan aktor intelektualnya diusut tuntas. Salah satu poster itu juga menerangkan bahwa panitia sengaja menutup berita itu agar umat tidak panik.\r\n\r\nBenarkah terjadi ledakan di Monas yang menjadi lokasi reuni 212?','1. Ledakan karena korsleting\r\nLedakan memang terjadi pada Sabtu malam 1 Desember 2018. Akan tetapi ledakan tersbeut bukan bersumber dari bom paralon, melainkan berasal dari mesin generator listrik (genset) yang berada di belakang panggung utama di sisi Barat Monas.\r\n\r\nPemberitaan Tempo Sabtu 1 Desember pukul 22.14 WIB menyebutkan, bahwa saat itu Kepolisian Resor Jakarta Pusat langsung menyisir lokasi. Kapolres Jakarta Pusat, Komisaris Besar Roma Hutajulu Roma menjelaskan, ledakan terjadi sekitar Pukul 19.20 WIB. Suaranya cukup keras namun tak sampai menimbulkan korban.\r\n\r\nKepala Kepolisian Sektor Gambir Ajun komisaris Besar Johaness mengatakan genset meledak diduga karena korsleting. \"Tapi masih diselidiki,\" katanya sambil menambahkan pula, \"Ada handphone di genset tersebut.”\r\n\r\nCNN Indonesia juga menuliskan bahwa ledakan tersebut terdengar cukup keras dan sempat membuat terkejut warga yang berada di sekitar Monas. Namun, tidak sampai membuat kepanikan karena diketahui bahwa ledakan berasal dari salah satu genset yang berada di belakang panggung utama.\r\n\r\nKapolsek Gambir AKBP Johaness Kindangen mengatakan pihaknya telah melakukan penyelidikan atas ledakan tersebut. Dugaan awal, kata dia, terjadi korsleting listrik. Ia mengatakan sejumlah barang bukti telah diamankan untuk penyelidikan lebih lanjut. Seperti sejumlah serpihan akibat ledakan tersebut dan juga unit handphone. Selain itu, pihaknya juga meminta keterangan orang-orang yang ada di sekitar lokasi kejadian serta pihak-pihak yang mengamankan genset tersebut.\r\n\r\n2. Video Suntingan\r\n\r\nMunculnya ledakan besar dengan kobaran api yang meymbubung tinggi —sebagaimana ditunjukkan dalam video maupun gambar pada poster, terlihat hasil suntingan. Tidak satupun sumber dapat memverifikasi munculnya kobaran api besar baik pada Sabtu malam 1 Desember maupun saat pelaksanaan reuni pada 2 Desember 2018.\r\n\r\nCNN Indonesia menulis meski terdengar ledakan karena korsleting pada genset, namun tidak sampai membuat kepanikan peserta. Saat itu massa aksi yang sudah berada di areal monas tengah asyik menikmati gelaran musik yang tampil di panggung utama. Massa terus berdatangan ke lokasi ini.\r\n\r\nDemikian juga pada pelaksanaan reuni 212 keesokan harinya, berlangsung dengan aman. Tidak ada ledakan besar yang menyerang massa aksi tersebut.');
/*!40000 ALTER TABLE `antihoax_draft_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `antihoax_media`
--

DROP TABLE IF EXISTS `antihoax_media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `antihoax_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `media_name` varchar(600) NOT NULL,
  `media_path` varchar(600) NOT NULL,
  `media_hash` varchar(600) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `antihoax_media`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `antihoax_media` WRITE;
/*!40000 ALTER TABLE `antihoax_media` DISABLE KEYS */;
INSERT INTO `antihoax_media` VALUES (29,1128,'iconfinder_codeigniter-icon_1285073','uploads/media/2019/02/508b5ed40974c0ec290ab097939c77880af3912400c6b55002ff9078732975b0d9b54337bf8bbaa6a5a7a7e442e1606c8ef391e2f639bc708698857c4079e222.png','fea8efd5eb9b799292c8195fe80bdac570c7527333c653ab53a2bf413397fa7454872e539f4820ba236bbd18382f677f3e2ee36293f6d3d16ea0a061121968cd','2019-02-09 14:29:43',25,'2019-02-09 14:29:43',25),(33,1129,'3f942e71-7211-43a7-a4d5-5aaf5ca7da4d','uploads/media/2019/02/f2c82044f8dbd9cfd1d830894ce7470bc0451f85cd19aa31e4a6d36ba1c563a68be1e2dc3cd48f07e2b1b4eacc469461e8d84d6e11f3011c1ced34e32bbacdd9.jpeg','15cffeccf1c1b6fbb84a18fe9030e681a75ed4b0e15c35c82b5c91177c726c95af41b36fa3f5b128f5362d7435b7760485e3c6d386d5984ab841fa6961f8fae5','2019-02-10 07:42:35',4,'2019-02-10 07:42:35',4),(34,1129,'home_new','uploads/media/2019/02/27ec9656881d6bcefcbad4085a5ae7ad35faa77c26f6c48d79117305e1072568553a1009a8d50449468e35adfbd090559ef88364eac017badd847b68509b1e74.jpeg','b1487db339d36e1275fa5097d9b47fc279bea97fcb719c8234c732c906ab747e45f6c250ca5914e7eb54d5d05a4e8a5316461c22add805472efb582fd8798e2a','2019-02-10 07:59:00',25,'2019-02-10 07:59:00',25),(35,1129,'home_to_gabriel','uploads/media/2019/02/88c771fbdcfd93234e494645e10f34652af5b240bf9a4e518382b236772cff31eb0b42392fa87d196f13246ead3c655070a0908436b94ea566018adc70fcb694.jpeg','b1487db339d36e1275fa5097d9b47fc279bea97fcb719c8234c732c906ab747e45f6c250ca5914e7eb54d5d05a4e8a5316461c22add805472efb582fd8798e2a','2019-02-10 08:03:10',25,'2019-02-10 08:03:10',25),(36,1130,'WhatsApp_Image_2019-03-09_at_12_03_59','uploads/media/2019/03/42a177cd6b59765cc93eeaf31503433bfc079afc30d837f9719ecb80d9987cbe230c2026aed0f157df13ef51b0c43830afefd0cde721dd6ae02d4e5e182b323b.jpeg','14936fd764508fd7231f2c7354150f074b78a062b315b1d0e9478d8d86737341f29bfbacf7b285060812f235404412394fdec3d45b657e3df367a490aa3be087','2019-03-09 07:45:20',14,'2019-03-09 07:45:20',14),(37,1131,'f7be4d59309b9e3f349a0414f808c496cd6c64251738cc0c0d68803ff2e332f773d6a79a70e39f1c311dd1a2c93b3ac07c0716a006d09d38b2a2f637b0e1a553','uploads/media/2019/04/73326ced515386f3145cc4c2f0954fdeaffa8e0adb1da8d9e7f5e171cd8db2a864425ac69814990c0dfc034eaff0e3e3ed8af2721f287932752316dd2ecd17f8.jpeg','f7be4d59309b9e3f349a0414f808c496cd6c64251738cc0c0d68803ff2e332f773d6a79a70e39f1c311dd1a2c93b3ac07c0716a006d09d38b2a2f637b0e1a553','2019-04-08 23:59:53',4,'2019-04-08 23:59:53',4),(38,1131,'3c7c0039-ee55-458c-811d-07ca20105902','uploads/media/2019/04/8bbd63e8fab943cd962c74893f7d3a29a47047170b2b4d51b6b4a21e7c4511ae1d269494a660770e9cd9de328d644be23a5766c38e4fe073dd91e3d283d76f57.jpeg','f7be4d59309b9e3f349a0414f808c496cd6c64251738cc0c0d68803ff2e332f773d6a79a70e39f1c311dd1a2c93b3ac07c0716a006d09d38b2a2f637b0e1a553','2019-04-09 00:00:46',4,'2019-04-09 00:00:46',4);
/*!40000 ALTER TABLE `antihoax_media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `antihoax_temp`
--

DROP TABLE IF EXISTS `antihoax_temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `antihoax_temp` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(9) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL,
  `klasifikasi` enum('unspecified','HOAX','HASUT','FITNAH','TRUE') NOT NULL,
  `kesimpulan` varchar(512) DEFAULT NULL,
  `isi` varchar(8192) DEFAULT NULL,
  `fakta` varchar(8192) DEFAULT NULL,
  `rujukan` varchar(2048) DEFAULT NULL,
  `sumber` varchar(32) DEFAULT NULL,
  `gambar1` varchar(256) DEFAULT NULL,
  `gambar2` varchar(256) DEFAULT NULL,
  `subklarifikasi` varchar(512) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `tags` varchar(256) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_id` int(9) unsigned NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Tags` (`tags`) USING BTREE,
  KEY `Kesimpulan` (`status`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `antihoax_temp`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `antihoax_temp` WRITE;
/*!40000 ALTER TABLE `antihoax_temp` DISABLE KEYS */;
/*!40000 ALTER TABLE `antihoax_temp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `author`
--

DROP TABLE IF EXISTS `author`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `author` (
  `id` mediumint(6) NOT NULL AUTO_INCREMENT,
  `nama` char(64) NOT NULL,
  `deskripsi` varchar(2048) DEFAULT NULL,
  `website` varchar(256) DEFAULT NULL,
  `icon` varchar(128) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_id` int(9) unsigned NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `icon` (`icon`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `author`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `author` WRITE;
/*!40000 ALTER TABLE `author` DISABLE KEYS */;
INSERT INTO `author` VALUES (10,'Detik','Detikcom adalah sebuah portal web yang berisi berita dan artikel daring di Indonesia. Detikcom merupakan salah satu situs berita terpopuler di Indonesia. Berbeda dari situs-situs berita berbahasa Indonesia lainnya, Detikcom hanya mempunyai edisi daring dan menggantungkan pendapatan dari bidang iklan. Meskipun begitu, Detikcom merupakan yang terdepan dalam hal berita-berita baru (breaking news). Sejak tanggal 3 Agustus 2011, detikcom menjadi bagian dari PT Trans Corporation, salah satu anak perusahaan CT Corp.','detik.com','ec5dec516e85f01aa607e2f33ab0026d.png','2018-05-26 09:45:28',14,'2018-05-02 19:50:48'),(11,'Kompas','Kompas.com adalah salah satu pionir media online di Indonesia ketika pertama kali hadir di Internet pada 14 September 1995 dengan nama Kompas Online. \r\nMulanya, Kompas Online atau KOL yang diakses dengan alamat kompas.co.id hanya menampilkan replika dari berita-berita harian Kompas yang terbit hari itu. \r\nTujuannya adalah memberikan layanan kepada para pembaca harian Kompas di tempat-tempat yang sulit dijangkau oleh jaringan distribusi Kompas. Dengan hadirnya Kompas Online, para pembaca harian Kompas terutama di Indonesia bagian timur dan di luar negeri dapat menikmati harian Kompas hari itu juga, tidak perlu menunggu beberapa hari seperti biasanya.','kompas.com','b4c037606f2296645a08a866288e6e5a.png','2018-05-26 18:12:31',14,'2018-05-03 00:21:23'),(14,'Tempo','Sejak 2008, Tempo.co telah lahir kembali dengan wajah baru dan sajian berita yang berkualitas. Kami berupaya menerapkan standar tinggi jurnalisme dalam meliput peristiwa dan menuliskannya secara tajam, cerdas dan berimbang. Prinsip kami, enak dibaca dan perlu, bahkan jenaka pun bisa.\r\nSemua itu adalah upaya kami untuk membuat Indonesia lebih baik. Tempo, Untuk Publik, Untuk Republik.','tempo.co','2e051cb97ef38d3a0bed0b490bd47f71.png','2018-05-26 10:12:24',14,'2018-05-03 05:20:00'),(15,'Kantor Berita Radio','KBR adalah penyedia konten berita berbasis jurnalisme independen yang berdiri sejak 1999. Dengan dukungan reporter dan kontributor terbaik di berbagai kota di tanah air dan Asia, produk KBR telah digunakan lebih dari 500 radio di Nusantara dan 200 radio di Asia dan Australia. Berita-berita KBR juga bisa disimak lewat website KBR.id, juga di media sosial di Facebook dan Twitter.\r\n\r\nSepanjang usianya, KBR telah meraih beragam penghargaan nasional dan internasional untuk sepak terjangnya sebagai media serta karya-karya jurnalistik berkualitas. KBR adalah salah satu media yang sudah mendapat verifikasi dari Dewan Pers. KBR adalah satu-satunya media di dunia yang pernah mendapat penghargaan dari Raja Belgia, King Baudouin Award. ','kbr.id','ced470a5eb009f527d602775b7a9f8c4.png','2018-05-26 16:34:37',14,'2018-05-04 03:18:51'),(16,'Riau Online','RIAUONLINE merupakan portal berita yang menyajikan informasi terhangat, baik peristiwa politik nasional dan Riau, Rantau Riau, internasional, bisnis, tekno life-style, bola, lingkungan, wisata, komunitas, netizen, dan rupa-rupa.\r\n\r\nItu semua dikemas dengan bahasa ringan, lugas dan tanpa tendensi atau prasangka. Informasi tersaji 24 jam, dapat dinikmati melalui desktop, laptop hingga beragam gadget atau perangkat mobile lainnya.','riauonline.co.id','bf00bdaadbfb5feb226a95c243111b53.png','2018-05-27 07:48:26',14,'2018-05-04 05:52:26'),(17,'Kabar Makassar','KabarMakassar.com atau KM adalah portal berita lokal pertama di Makassar yang lahir tanpa dukungan korporasi dan sindikasi media besar di daerah Sulawesi Selatan pada khususnya dan Indonesia Timur pada umumnya. Portal berbasis data yang berada di Kota Makassar, Sulawesi Selatan ini diluncurkan pertama kali pada tanggal 29 Agustus 2009, oleh Gubernur Sulawesi Selatan Dr. Syahrul Yasin Limpo dan Wakil Walikota Makassar Alm. Supomo Guntur.\r\n\r\nKM awalnya berada di bawah naungan Yayasan Jurnalis Indonesia yang diinisiasi oleh tiga orang tokoh, yakni DR Abraham Samad, mantan Ketua KPK; Dr. Aidir Amin Daud, jurnalis senior yang sekarang tercatat sebagai Irjen Kementerian Hukum dan HAM Indonesia; dan Upi Asmaradhana aktifis jurnalis. Namun sejalan dengan perkembangannya, KM kemudian dikelolah secara profesional, dibawah bendera PT Kabar Grup Indonesia atau PT KGI.','kabarmakassar.com','e205d651f421ef2e9ed0c35573a75f98.png','2018-05-26 15:22:17',14,'2018-05-04 06:24:56'),(18,'Suara.com','Suara.com adalah portal berita yang menyajikan informasi terhangat baik peristiwa politik, bisnis, hukum, sepakbola, entertainment, gaya hidup, otomotif, sains teknologi hingga jurnalisme warga. Dikemas dengan bahasa ringan, lugas dan tanpa prasangka. Informasi tersaji 24 jam, dapat dinikmati melalui desktop, laptop hingga beragam gadget atau perangkat mobile lainnya.','suara.com','523629e1f99de70d85aadd3736d19ba1.png','2018-05-26 10:17:51',14,'2018-05-04 06:26:58'),(19,'Tirto.id','Tirto.id menyajikan berita berbasis fakta dan analisis data, ditulis secara menarik dan senantiasa dilengkapi Infografik. Nama tirto kami pilih sebagai ungkapan rasa hormat kami kepada Tirto Adhi Soerjo (Sang Pemula) sekaligus keinginan kami untuk sejalan dengan filosofi tirta (air) yang jernih, mengalir, mencerahkan.','tirto.id','a0ae1c9105f21f43bc08791ccc4cfab0.png','2018-05-26 22:03:31',14,'2018-05-04 06:33:51'),(20,'Kontan.co.id','Media Bisnis dan Investasi, \r\nKelompok Kompas Gramedia (KG).','kontan.co.id','91b358c222b1336e43609212839a700b.png','2018-05-27 06:24:06',14,'2018-05-04 06:36:25'),(21,'Dream.co.id','Dream.co.id mulai beroperasi pada bulan April 2014. Menjadi situs muslim lifestyle pertama di Indonesia yang fokus pada selebritis, kuliner, gaya hidup, kecantikan, kesehatan, parenting, travel, ekonomi syariah, dan komunitas para hijaber. Juga menyajikan kisah-kisah inspiratif yang menggugah hati, sahabat bagi hijaber dan muslimah.\r\n\r\nDream.co.id menyajikan berita-berita terbaru yang juga mengupas sisi positif para artis, peristiwa-peristiwa menarik baik dari dalam negeri maupun luar negeri.','dream.co.id','55c623ea158f3a3e0eb12d0679a6e3dd.png','2018-05-26 11:35:11',14,'2018-05-04 06:38:17');
/*!40000 ALTER TABLE `author` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `author_link`
--

DROP TABLE IF EXISTS `author_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `author_link` (
  `id` bigint(12) NOT NULL AUTO_INCREMENT,
  `data_id` int(11) unsigned NOT NULL,
  `author_id` mediumint(6) unsigned NOT NULL,
  `urutan` smallint(4) unsigned DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `Linked` (`data_id`,`author_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=1405 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `author_link`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `author_link` WRITE;
/*!40000 ALTER TABLE `author_link` DISABLE KEYS */;
INSERT INTO `author_link` VALUES (1,4,10,1,'2018-05-12 01:09:58'),(2,4,11,2,'2018-05-12 01:10:03'),(3,4,14,3,'2018-05-12 01:10:10'),(4,28,12,1,'2018-05-12 01:13:52'),(5,28,14,2,'2018-05-12 01:14:01'),(6,28,11,3,'2018-05-12 01:14:07'),(7,28,10,4,'2018-05-12 01:14:12'),(8,59,13,1,'2018-05-12 01:16:31'),(9,59,14,2,'2018-05-12 01:16:36'),(10,59,12,3,'2018-05-12 01:16:42');
/*!40000 ALTER TABLE `author_link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(255) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT 0,
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claim_author_type`
--

DROP TABLE IF EXISTS `claim_author_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claim_author_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claim_author_type`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `claim_author_type` WRITE;
/*!40000 ALTER TABLE `claim_author_type` DISABLE KEYS */;
INSERT INTO `claim_author_type` VALUES (1,'Organization','2018-11-04 15:34:43'),(2,'Person','2018-11-04 15:34:49');
/*!40000 ALTER TABLE `claim_author_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claim_rating`
--

DROP TABLE IF EXISTS `claim_rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claim_rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rating` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claim_rating`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `claim_rating` WRITE;
/*!40000 ALTER TABLE `claim_rating` DISABLE KEYS */;
INSERT INTO `claim_rating` VALUES (1,'False','2018-11-04 06:51:00'),(2,'Mostly false','2018-11-04 06:51:37'),(3,'Half true','2018-11-04 06:51:37'),(4,'Mostly true','2018-11-04 06:51:37'),(5,'True','2018-11-04 06:51:37');
/*!40000 ALTER TABLE `claim_rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claim_review`
--

DROP TABLE IF EXISTS `claim_review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claim_review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `claim_date_published` date DEFAULT NULL,
  `claim_url` varchar(255) NOT NULL,
  `claim_title` varchar(255) DEFAULT NULL,
  `claim_author_name` varchar(255) DEFAULT NULL,
  `claim_rating_value` int(11) DEFAULT NULL,
  `claim_author_type` int(1) DEFAULT NULL,
  `claimed_item_author_name` varchar(255) DEFAULT NULL,
  `claimed_item_author_type` varchar(255) DEFAULT NULL,
  `claimed_item_url` varchar(255) DEFAULT NULL,
  `claimed_item_published_date` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claim_review`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `claim_review` WRITE;
/*!40000 ALTER TABLE `claim_review` DISABLE KEYS */;
INSERT INTO `claim_review` VALUES (1,1129,'2019-02-10','http://google.com','Claim Title','Claim Author Name',2,2,'Author','1','http://google.com','2019-02-10','2019-02-10 03:33:11',25,'2019-02-10 03:33:11',25),(2,1129,'2019-02-10','http://google.com','Claim Title Next Generation','Claim Author Name X',2,1,'Author','1','http://google.com','2019-02-10','2019-02-10 03:33:24',25,'2019-02-10 03:33:24',25);
/*!40000 ALTER TABLE `claim_review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `claimed_item_author_type`
--

DROP TABLE IF EXISTS `claimed_item_author_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `claimed_item_author_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `claimed_item_author_type`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `claimed_item_author_type` WRITE;
/*!40000 ALTER TABLE `claimed_item_author_type` DISABLE KEYS */;
INSERT INTO `claimed_item_author_type` VALUES (1,'Organization','2018-11-04 15:35:17'),(2,'Person','2018-11-04 15:35:24');
/*!40000 ALTER TABLE `claimed_item_author_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(9) NOT NULL,
  `email` varchar(32) NOT NULL,
  `domain` varchar(64) DEFAULT NULL,
  `ip` char(15) NOT NULL,
  `key` char(60) NOT NULL,
  `quota` mediumint(7) DEFAULT NULL,
  `daily_request` mediumint(7) DEFAULT NULL,
  `status` enum('pending','suspend','active') NOT NULL,
  `expired_at` date DEFAULT NULL,
  `accessed_at` datetime DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `updated_id` int(9) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `IP` (`ip`) USING BTREE,
  UNIQUE KEY `API Key` (`key`) USING BTREE,
  KEY `Daily request quota` (`quota`) USING BTREE,
  KEY `Current daily request` (`daily_request`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,25,'nugi.hs@gmail.com','sidalih.com','127.0.0.1','65ecd1c8c4cb2d426a455e826de46ba1f5dc6b3593d9d6dab1666d929c96',0,NULL,'active','2100-12-31','2017-11-12 16:00:44','2019-03-26 14:44:50',1,'2017-11-11 13:47:48'),(2,1,'admin@admin.org','administrasi.org','129.132.233.240','iO31VYnxqwBslFhcxZPhFQfPSw6W2ba8d9a5d548deff3f24f9cca2e8f235',1000,0,'active','2100-12-31','2017-11-12 18:05:43','2017-11-12 18:02:06',1,'2017-11-12 18:05:37'),(3,1,'admin@kpu.go.id','kpu.go.id','129.232.233.240','xAl/4blmLBg/hoBsfPwxmGs3iErW33c8eee106cdb9ad74a7a87866325079',1000,0,'active','2100-12-31','2000-01-01 00:00:00','2017-11-12 20:43:18',1,'2017-11-12 20:43:18'),(8,3,'andy.n@aol.com','cekfakta.com','123.123.123.123','bc9b031be40bb10742ebd7d3ed09180e6a4b2ae8c0f7be7023a849aaf3c9',99000,0,'active','2100-12-31','2000-01-01 00:00:00','2018-12-06 05:53:13',1,'2018-05-07 09:06:04'),(10,14,'albertbillalroy@gmail.com','','100.10.10.10','9be83e175b6985d5e6a40e7a9f389a277a60f5e0c46f4684d17807e80cd5',1000,0,'active','2100-12-31','2000-01-01 00:00:00','2018-07-12 12:58:43',1,'2018-07-12 10:34:12'),(12,14,'adisyafitrah@gmail.com','kalbar.turnbackhoax.id','35.237.246.222','06e9cfea7772e573ed421e327ae0bf151d89b75714be0c15ac3e469dffbe',1000,0,'active','2100-12-31','2000-01-01 00:00:00','2018-07-28 17:21:52',1,'2018-07-12 13:39:32'),(19,14,'azyyati.arita@gmail.com','','168.172.190.190','49bf82cc6715eda53ec9943dee934fc6c6d23ec8863ae0c469e12f6f34e8',1000,0,'active','2100-12-31','2000-01-01 00:00:00','2018-09-24 13:40:12',1,'2018-09-24 13:40:12'),(20,14,'duhitakarin@gmail.com','','188.99.100.20','2e130d50203059166bff8359656263fcf33bcb2de10ac9b71a5a171a0dba',1000,0,'active','2100-12-31','2000-01-01 00:00:00','2018-10-13 15:44:36',1,'2018-10-13 15:44:36'),(21,14,'annasjpratama@gmail.com','','192.167.100.1','3fc2ca46d805db5b40587b606aa0ddded7422afa59685a4aa71aac05f2b3',1000,0,'active','2100-12-31','2000-01-01 00:00:00','2018-10-17 06:30:52',1,'2018-10-17 06:30:52'),(22,14,'andrewgully@google.com','','130.198.23.9','2dc968c5de54eddf89f424777869af47712d659a95d4ec6fb72829960d16',1000,0,'active','2100-12-31','2000-01-01 00:00:00','2018-11-06 11:09:31',1,'2018-11-06 11:09:31');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colaboration`
--

DROP TABLE IF EXISTS `colaboration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colaboration` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(15) NOT NULL,
  `type_id` int(11) unsigned NOT NULL,
  `role` enum('colaborator','member','watcher','admin') DEFAULT 'colaborator',
  `user_id` int(11) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`) USING BTREE,
  KEY `user_id` (`user_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colaboration`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `colaboration` WRITE;
/*!40000 ALTER TABLE `colaboration` DISABLE KEYS */;
INSERT INTO `colaboration` VALUES (1,'draft_main',1,'colaborator',1,'2018-11-14 14:57:38'),(2,'draft_main',2,'colaborator',1,'2018-11-14 20:24:24'),(3,'draft_main',3,'colaborator',28,'2018-11-15 03:32:52'),(4,'draft_main',4,'colaborator',40,'2018-12-17 07:05:52');
/*!40000 ALTER TABLE `colaboration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL DEFAULT '',
  `description` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `keys`
--

DROP TABLE IF EXISTS `keys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keys`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `keys` WRITE;
/*!40000 ALTER TABLE `keys` DISABLE KEYS */;
/*!40000 ALTER TABLE `keys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lapor`
--

DROP TABLE IF EXISTS `lapor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lapor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `teks_hoax` text DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `prioritas` int(1) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `screenshot_1` varchar(255) DEFAULT NULL,
  `screenshot_2` varchar(255) DEFAULT NULL,
  `screenshot_3` varchar(255) DEFAULT NULL,
  `screenshot_4` varchar(255) DEFAULT NULL,
  `is_data_yudistira` smallint(1) unsigned zerofill DEFAULT NULL,
  `status_record` smallint(1) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lapor`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `lapor` WRITE;
/*!40000 ALTER TABLE `lapor` DISABLE KEYS */;
INSERT INTO `lapor` VALUES (4,'1haha','azh.azuharu@gmail.com','sesuatu','teks','pesan',1,2,'ucMz0bVYmn3DdS8P.png','4bcd3MhFoxaOX2mW.png',NULL,NULL,NULL,1,'2018-09-20 21:23:56',NULL,'2018-09-20 21:23:56',NULL);
/*!40000 ALTER TABLE `lapor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lapor_assignment`
--

DROP TABLE IF EXISTS `lapor_assignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lapor_assignment` (
  `id` bigint(12) NOT NULL AUTO_INCREMENT,
  `lapor_id` int(11) unsigned NOT NULL,
  `author_id` mediumint(6) unsigned NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `Linked` (`lapor_id`,`author_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lapor_assignment`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `lapor_assignment` WRITE;
/*!40000 ALTER TABLE `lapor_assignment` DISABLE KEYS */;
INSERT INTO `lapor_assignment` VALUES (1,4,10,'2018-05-27 13:50:37'),(5,4,18,'2018-05-27 14:05:36'),(6,2,11,'2018-05-27 14:07:16'),(7,2,14,'2018-05-27 14:09:20'),(10,6,19,'2018-05-27 14:51:09'),(12,6,15,'2018-05-27 14:52:30'),(13,6,24,'2018-05-27 14:52:34'),(14,12,10,'2018-05-27 15:45:52'),(18,4,14,'2018-07-05 09:31:21');
/*!40000 ALTER TABLE `lapor_assignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lapor_notes`
--

DROP TABLE IF EXISTS `lapor_notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lapor_notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `lapor_id` int(11) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lapor_notes`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `lapor_notes` WRITE;
/*!40000 ALTER TABLE `lapor_notes` DISABLE KEYS */;
INSERT INTO `lapor_notes` VALUES (1,0,12,'laporan ini benar adanya',1,'2018-05-27 15:35:33'),(2,0,12,'Apakah betul?',1,'2018-05-27 15:45:10'),(3,0,12,'betul pak',1,'2018-05-27 15:47:13'),(4,0,14,'Ini hoax bangets',25,'2018-06-24 04:52:46'),(5,0,12,'ada bukti?',14,'2018-07-26 17:41:09');
/*!40000 ALTER TABLE `lapor_notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_attempts`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `login_attempts` WRITE;
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
INSERT INTO `login_attempts` VALUES (4,'202.164.220.226','2017-12-15 08:54:34'),(5,'202.164.220.226','2017-12-15 08:54:38'),(6,'202.164.220.226','2017-12-15 08:54:44'),(7,'202.62.18.43','2017-12-19 15:58:54'),(8,'202.62.18.43','2017-12-19 15:59:08'),(9,'112.215.208.43','2018-02-18 18:48:58'),(18,'61.94.67.75','2018-05-14 14:12:59'),(19,'103.76.14.238','2018-05-18 02:58:40'),(20,'103.76.14.238','2018-05-18 02:58:49'),(21,'103.76.14.238','2018-05-18 02:59:08');
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `method` varchar(6) NOT NULL,
  `params` text DEFAULT NULL,
  `api_key` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` int(11) NOT NULL,
  `rtime` float DEFAULT NULL,
  `authorized` varchar(1) NOT NULL,
  `response_code` smallint(3) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT INTO `logs` VALUES (0,'confirm','get','a:8:{s:4:\"Host\";s:7:\"tb.hoax\";s:10:\"Connection\";s:10:\"keep-alive\";s:10:\"User-Agent\";s:114:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36\";s:25:\"Upgrade-Insecure-Requests\";s:1:\"1\";s:6:\"Accept\";s:85:\"text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8\";s:15:\"Accept-Encoding\";s:13:\"gzip, deflate\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:37:\"__unam=f6fe7f8-15f6490c7b5-32bf1af2-4\";}','','::1',1509573669,20.6667,'0',200),(0,'confirm','get','a:8:{s:4:\"Host\";s:7:\"tb.hoax\";s:10:\"Connection\";s:10:\"keep-alive\";s:10:\"User-Agent\";s:114:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36\";s:25:\"Upgrade-Insecure-Requests\";s:1:\"1\";s:6:\"Accept\";s:85:\"text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8\";s:15:\"Accept-Encoding\";s:13:\"gzip, deflate\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:37:\"__unam=f6fe7f8-15f6490c7b5-32bf1af2-4\";}','','::1',1509573669,20.6667,'1',200),(0,'confirm','get','a:9:{s:4:\"Host\";s:7:\"tb.hoax\";s:10:\"Connection\";s:10:\"keep-alive\";s:13:\"Cache-Control\";s:9:\"max-age=0\";s:10:\"User-Agent\";s:114:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36\";s:25:\"Upgrade-Insecure-Requests\";s:1:\"1\";s:6:\"Accept\";s:85:\"text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8\";s:15:\"Accept-Encoding\";s:13:\"gzip, deflate\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:37:\"__unam=f6fe7f8-15f6490c7b5-32bf1af2-4\";}','','::1',1509573753,20.6667,'0',200),(0,'confirm','get','a:9:{s:4:\"Host\";s:7:\"tb.hoax\";s:10:\"Connection\";s:10:\"keep-alive\";s:13:\"Cache-Control\";s:9:\"max-age=0\";s:10:\"User-Agent\";s:114:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36\";s:25:\"Upgrade-Insecure-Requests\";s:1:\"1\";s:6:\"Accept\";s:85:\"text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8\";s:15:\"Accept-Encoding\";s:13:\"gzip, deflate\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:37:\"__unam=f6fe7f8-15f6490c7b5-32bf1af2-4\";}','','::1',1509573753,20.6667,'1',200),(0,'confirm','post','a:10:{s:13:\"cache-control\";s:8:\"no-cache\";s:13:\"Postman-Token\";s:36:\"b77cc478-5c64-4a2a-8946-cf90cbbbbe9c\";s:12:\"Content-Type\";s:33:\"application/x-www-form-urlencoded\";s:10:\"User-Agent\";s:20:\"PostmanRuntime/6.4.1\";s:6:\"Accept\";s:3:\"*/*\";s:4:\"Host\";s:7:\"tb.hoax\";s:15:\"accept-encoding\";s:13:\"gzip, deflate\";s:14:\"content-length\";s:3:\"564\";s:10:\"Connection\";s:10:\"keep-alive\";s:4:\"news\";s:423:\"Lembaga survei Populi Center merilis elektabilitas calon presiden (capres) menjelang Pilpres 2019. Hasilnya, Presiden Joko Widodo (Jokowi) menempati posisi pertama, disusul Ketum Gerindra Fadli Zon. Dalam survei tersebut masyarakat diberikan pertanyaan \'Jika Pilpres diadakan lagi pada hari ini, siapakah yang akan anda pilih untuk menjadi presiden?\'. Hasilnya 49,4% masyarakat memilih Jokowi dan 21,7 persen untuk Prabowo.\";}','','127.0.0.1',1509598266,20.6667,'0',200),(0,'confirm','post','a:10:{s:13:\"cache-control\";s:8:\"no-cache\";s:13:\"Postman-Token\";s:36:\"b77cc478-5c64-4a2a-8946-cf90cbbbbe9c\";s:12:\"Content-Type\";s:33:\"application/x-www-form-urlencoded\";s:10:\"User-Agent\";s:20:\"PostmanRuntime/6.4.1\";s:6:\"Accept\";s:3:\"*/*\";s:4:\"Host\";s:7:\"tb.hoax\";s:15:\"accept-encoding\";s:13:\"gzip, deflate\";s:14:\"content-length\";s:3:\"564\";s:10:\"Connection\";s:10:\"keep-alive\";s:4:\"news\";s:423:\"Lembaga survei Populi Center merilis elektabilitas calon presiden (capres) menjelang Pilpres 2019. Hasilnya, Presiden Joko Widodo (Jokowi) menempati posisi pertama, disusul Ketum Gerindra Fadli Zon. Dalam survei tersebut masyarakat diberikan pertanyaan \'Jika Pilpres diadakan lagi pada hari ini, siapakah yang akan anda pilih untuk menjadi presiden?\'. Hasilnya 49,4% masyarakat memilih Jokowi dan 21,7 persen untuk Prabowo.\";}','','127.0.0.1',1509598266,20.6667,'1',200),(0,'confirm','get','a:8:{s:13:\"cache-control\";s:8:\"no-cache\";s:13:\"Postman-Token\";s:36:\"0f26357b-24bd-420b-b48d-8c144702e27c\";s:12:\"Content-Type\";s:33:\"application/x-www-form-urlencoded\";s:10:\"User-Agent\";s:20:\"PostmanRuntime/6.4.1\";s:6:\"Accept\";s:3:\"*/*\";s:4:\"Host\";s:7:\"tb.hoax\";s:15:\"accept-encoding\";s:13:\"gzip, deflate\";s:10:\"Connection\";s:10:\"keep-alive\";}','','127.0.0.1',1509598285,20.6667,'0',200),(0,'confirm','get','a:8:{s:13:\"cache-control\";s:8:\"no-cache\";s:13:\"Postman-Token\";s:36:\"0f26357b-24bd-420b-b48d-8c144702e27c\";s:12:\"Content-Type\";s:33:\"application/x-www-form-urlencoded\";s:10:\"User-Agent\";s:20:\"PostmanRuntime/6.4.1\";s:6:\"Accept\";s:3:\"*/*\";s:4:\"Host\";s:7:\"tb.hoax\";s:15:\"accept-encoding\";s:13:\"gzip, deflate\";s:10:\"Connection\";s:10:\"keep-alive\";}','','127.0.0.1',1509598285,20.6667,'1',200),(0,'api/example/users','get','a:11:{s:5:\"users\";N;s:4:\"Host\";s:9:\"localhost\";s:10:\"Connection\";s:10:\"keep-alive\";s:13:\"Cache-Control\";s:9:\"max-age=0\";s:10:\"User-Agent\";s:114:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36\";s:25:\"Upgrade-Insecure-Requests\";s:1:\"1\";s:6:\"Accept\";s:85:\"text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8\";s:7:\"Referer\";s:41:\"http://localhost/turnbackhoax/rest-server\";s:15:\"Accept-Encoding\";s:17:\"gzip, deflate, br\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:8:\"ciNav=no\";}','','::1',1509602330,20.6667,'0',200),(0,'api/example/users','get','a:11:{s:5:\"users\";N;s:4:\"Host\";s:9:\"localhost\";s:10:\"Connection\";s:10:\"keep-alive\";s:13:\"Cache-Control\";s:9:\"max-age=0\";s:10:\"User-Agent\";s:114:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36\";s:25:\"Upgrade-Insecure-Requests\";s:1:\"1\";s:6:\"Accept\";s:85:\"text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8\";s:7:\"Referer\";s:41:\"http://localhost/turnbackhoax/rest-server\";s:15:\"Accept-Encoding\";s:17:\"gzip, deflate, br\";s:15:\"Accept-Language\";s:23:\"en-US,en;q=0.9,id;q=0.8\";s:6:\"Cookie\";s:8:\"ciNav=no\";}','','::1',1509602330,20.6667,'1',200);
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL DEFAULT '',
  `phone` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(50) NOT NULL DEFAULT '',
  `city` varchar(50) NOT NULL DEFAULT '',
  `country` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (1,'Carine ','Schmitt','40.32.2555','54, rue Royale','Nantes','France'),(2,'Jean','King','7025551838','8489 Strong St.','Las Vegas','USA'),(3,'Peter','Ferguson','03 9520 4555','636 St Kilda Road','Melbourne','Australia'),(4,'Janine ','Labrune','40.67.8555','67, rue des Cinquante Otages','Nantes','France'),(5,'Jonas ','Bergulfsen','07-98 9555','Erling Skakkes gate 78','Stavern','Norway'),(6,'Susan','Nelson','4155551450','5677 Strong St.','San Rafael','USA'),(7,'Zbyszek ','Piestrzeniewicz','(26) 642-7555','ul. Filtrowa 68','Warszawa','Poland'),(8,'Roland','Keitel','+49 69 66 90 2555','Lyonerstr. 34','Frankfurt','Germany'),(9,'Julie','Murphy','6505555787','5557 North Pendale Street','San Francisco','USA'),(10,'Kwai','Lee','2125557818','897 Long Airport Avenue','NYC','USA');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `data` text COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `region`
--

DROP TABLE IF EXISTS `region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `region` (
  `id` mediumint(7) unsigned NOT NULL AUTO_INCREMENT,
  `true_id` int(9) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL COMMENT '1=>national, 2=>province, 3=>regency',
  `country` smallint(4) NOT NULL,
  `province` mediumint(6) unsigned NOT NULL,
  `regency` int(9) unsigned NOT NULL,
  `name` varchar(64) NOT NULL,
  `status` varchar(8) DEFAULT NULL,
  `latitude` varchar(16) DEFAULT NULL,
  `longitude` varchar(16) DEFAULT NULL,
  `created_id` int(10) unsigned NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=796 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `region`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `region` WRITE;
/*!40000 ALTER TABLE `region` DISABLE KEYS */;
INSERT INTO `region` VALUES (1,106,1,106,0,0,'Afghanistan','0','0','0',1,'2018-07-25 19:01:38','2018-07-23 00:00:00'),(2,124,1,124,0,0,'Åland Islands','0','0','0',1,'2018-07-25 19:01:38','2018-07-23 00:00:00'),(3,112,1,112,0,0,'Albania','0','0','0',1,'2018-07-25 19:01:38','2018-07-23 00:00:00'),(4,426,1,426,0,0,'Algeria','0','0','0',1,'2018-07-25 19:01:38','2018-07-23 00:00:00'),(5,119,1,119,0,0,'American Samoa','0','0','0',1,'2018-07-25 19:01:38','2018-07-23 00:00:00'),(6,104,1,104,0,0,'Andorra','0','0','0',1,'2018-07-25 19:01:38','2018-07-23 00:00:00'),(7,115,1,115,0,0,'Angola','0','0','0',1,'2018-07-25 19:01:38','2018-07-23 00:00:00'),(8,109,1,109,0,0,'Anguilla','0','0','0',1,'2018-07-25 19:01:38','2018-07-23 00:00:00'),(9,117,1,117,0,0,'Antarctica','0','0','0',1,'2018-07-25 19:01:38','2018-07-23 00:00:00'),(10,107,1,107,0,0,'Antigua and Barbuda','0','0','0',1,'2018-07-25 19:01:38','2018-07-23 00:00:00');
/*!40000 ALTER TABLE `region` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,0,'User'),(2,0,'Admin'),(3,1,'Author'),(4,1,'Editor');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_autologin`
--

DROP TABLE IF EXISTS `user_autologin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` mediumint(8) NOT NULL DEFAULT 0,
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_autologin`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `user_autologin` WRITE;
/*!40000 ALTER TABLE `user_autologin` DISABLE KEYS */;
INSERT INTO `user_autologin` VALUES ('0f5be5421ee737c66f7bdae2b3ab0ba1',5,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36','103.27.118.142','2017-12-12 16:47:52'),('113e07786f23d3322783e6c6706cb8a5',10,'Mozilla/5.0 (Linux; U; Android 7.0; en-us; Redmi Note 4 Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/53.0.2785.146 Mobile ','114.124.141.191','2018-05-05 03:22:47'),('18b6e782e5f46002064cb22051ba5abf',10,'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36','103.76.14.238','2018-05-07 08:09:08'),('20bb897696ba1d1e6cf1ddfbaf463796',12,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','115.178.209.186','2018-07-07 03:10:58'),('2600ab83bfca579918b7771d77f52bb4',12,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36','114.124.209.195','2018-11-14 04:22:26'),('2c56b266dacb8ff4709379d68e4d861d',13,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36','125.162.225.157','2018-05-27 06:18:26'),('2f2cc21349fbb0d098cae8caecd7d2f7',27,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36','103.66.197.110','2018-07-10 09:43:01'),('4820dedb9311758cc078c53119255666',28,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.81 Safari/537.36','103.119.144.58','2018-09-10 08:03:01'),('48775bb435a0a0abc865555537d4c686',13,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36','36.80.9.205','2019-01-18 06:43:48'),('5f98b431b4f19070344cf235b069cb8c',5,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36','199.201.67.3','2018-04-04 05:33:33');
/*!40000 ALTER TABLE `user_autologin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_profile`
--

DROP TABLE IF EXISTS `user_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `FirstName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `LastName` varchar(50) CHARACTER SET utf8 DEFAULT '',
  `birthplace` varchar(50) COLLATE utf8_bin DEFAULT '',
  `birthdate` date NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `address` varchar(50) CHARACTER SET utf8 DEFAULT '',
  `city` varchar(50) CHARACTER SET utf8 DEFAULT '',
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_profile`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `user_profile` WRITE;
/*!40000 ALTER TABLE `user_profile` DISABLE KEYS */;
INSERT INTO `user_profile` VALUES (1,3,'Nugi','Oemardhi','Yerusalem','1976-10-13','085882223323','Jl. Imam Bonjol No.29 Lt.3 ruang pojok, Menteng Ja','DKI Jakarta','Indonesia','2017-12-15 03:51:44'),(2,10,'','','','0000-00-00','','','',NULL,'0000-00-00 00:00:00'),(3,1,'Admin','Webmaster','Jakarta','2017-12-31','081235552929','Benhil, Jakarta Pusat','Jakarta','Indonesia','2018-11-14 17:02:30'),(4,11,'','','','0000-00-00','','','',NULL,'0000-00-00 00:00:00'),(5,12,'','','','0000-00-00','','','',NULL,'0000-00-00 00:00:00'),(6,13,'','','','0000-00-00','','','',NULL,'0000-00-00 00:00:00'),(7,14,'Adi','Syafitrah','Palembang','1989-09-09','082176503669','Surakarta','Jawa Tengah','Indonesia','2018-05-26 11:24:37'),(8,15,'','','','0000-00-00','','','',NULL,'0000-00-00 00:00:00'),(9,16,'','','','0000-00-00','','','',NULL,'0000-00-00 00:00:00'),(10,17,'','','','0000-00-00','','','',NULL,'0000-00-00 00:00:00');
/*!40000 ALTER TABLE `user_profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_temp`
--

DROP TABLE IF EXISTS `user_temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(70) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activation_key` varchar(70) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_temp`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `user_temp` WRITE;
/*!40000 ALTER TABLE `user_temp` DISABLE KEYS */;
INSERT INTO `user_temp` VALUES (1,'andy','$1$ZB1.uU3.$S2gkAJgoWr7JzCLeWZZHJ0','axlevast@gmail.com','76bacf479ebd77b8c947611471f57f93','::1','2017-11-09 11:22:09'),(2,'oceoke','$1$6d3.V1/.$4CwHw6CpKSu6qdgHxoCGP1','oce@okedeh.com','81df170becec32d5d43fc8efe0e15ed9','::1','2017-11-11 13:15:55'),(3,'sufehmi','$1$llocAzaz$gyaNYOeDfafZFIRydSrj9/','sufehmi@gmail.com','02ac95d09818566e6aca39f02b460326','115.178.216.75','2017-11-12 16:33:14'),(4,'test','$1$hRCmNOcY$HCxjAug8CA6plaOs1RSFn.','test@testing.com','d25c04834e9078e76f66f5048edb8def','202.62.20.29','2017-11-14 15:40:08'),(5,'alice','$2y$09$eSq6zofaHnIFRq1dyS/aE.EJ/FS5In/ynPtTEBjbV907vZ/pbSYha','abudisat@fb.com','51377ce1b91e3ba4437530011d2d2511','118.136.43.205','2017-11-21 01:27:06'),(6,'purhs73','$2y$09$64kddkfglapINWcldYlrUewxsYufyRueOl7JCp4RBRWZm0b51FRVe','purhs73@yahoo.com','014fdd3d4d1143c78f3c23ef225c5ae6','139.255.85.58','2017-11-22 04:31:06'),(7,'jhehan','$2y$09$gyDxFpMapeimnQCLqykB9OKfX9CIZ/HuvROOg9sIW/BIMilbeRDqa','dr.jhee@gmail.com','f941a08ec3f455704c66e105f49305fb','139.255.85.58','2017-11-22 04:58:03'),(8,'Asep','$2y$09$r9EBGMfXkGlJKH/WNlgvZe.UOnjh5ym0qYS/ogK6AGbw7.wcOayfu','iputomang@gmail.com','8b7786c3b93b0c0b0ebc20727c5e9d40','202.164.220.226','2017-11-22 05:02:25'),(9,'harimurti','$2y$09$fP0V0zB9WTaoqj0aWwJavuOGdRQ2QgethFSgDKInfqtt/Aag6Ln3u','aerismith.27@gmail.com','38d65409db555b71c1538bd99f5fea8f','103.85.120.204','2018-02-04 08:39:31'),(10,'Jpthekei','$2y$09$TjkpDHXykvIL5e54LnPsDuJBWcmNA1SwYR1XxL39YiFMKtKx2ZWxq','jpthekei@gmail.com','07e4befef52b42ddf5b5f87a498e5cf2','101.127.142.105','2018-02-11 06:11:53');
/*!40000 ALTER TABLE `user_temp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL DEFAULT 1,
  `username` varchar(25) COLLATE utf8_bin NOT NULL,
  `password` varchar(70) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `banned` tinyint(1) NOT NULL DEFAULT 0,
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `newpass` varchar(70) COLLATE utf8_bin DEFAULT NULL,
  `newpass_key` varchar(70) COLLATE utf8_bin DEFAULT NULL,
  `newpass_time` datetime DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `region_id` int(9) NOT NULL DEFAULT 0,
  `region_level` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--
-- WHERE:  1=1 LIMIT 10

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,2,'admin','$2y$09$LIHlvDy8YrdEn76WE6/h.OiAXqiqmKvA1lt6XWA/P1QmKaboWcSHy','admin@localhost.com',0,NULL,NULL,NULL,NULL,'112.215.152.49','2018-11-15 07:59:35','2008-11-30 04:56:32','2018-11-15 07:59:35',0,0),(2,1,'user','$1$bO..IR4.$CxjJBjKJ5QW2/BaYKDS7f.','user@localhost.com',0,NULL,NULL,NULL,NULL,'127.0.0.1','2008-12-01 14:04:14','2008-12-01 14:01:53','2008-12-01 14:04:14',0,0),(3,2,'andy','$2y$09$gIIq1O46i8XNXFQUKTzRg.ar6YYiOIuHWik2IcIfT1RuTfOnPw9kW','axlevast@gmail.com',0,NULL,NULL,NULL,NULL,'120.188.32.135','2018-12-27 14:21:28','2017-11-09 18:25:31','2018-12-27 14:21:28',0,0),(4,2,'sufehmi','$1$llocAzaz$gyaNYOeDfafZFIRydSrj9/','sufehmi@gmail.com',0,NULL,NULL,NULL,NULL,'61.247.5.54','2019-04-08 23:55:18','2017-11-12 16:33:14','2019-04-08 23:55:19',0,0),(5,3,'alice','$2y$09$eSq6zofaHnIFRq1dyS/aE.EJ/FS5In/ynPtTEBjbV907vZ/pbSYha','abudisat@fb.com',0,NULL,NULL,NULL,NULL,'36.65.113.52','2018-07-15 17:57:06','2017-11-12 16:33:14','2018-07-15 17:57:06',0,0),(6,2,'purhs73','$2y$09$64kddkfglapINWcldYlrUewxsYufyRueOl7JCp4RBRWZm0b51FRVe','purhs73@yahoo.com',0,NULL,'$1$voXShRtB$vB.4AxUyrf06MbXTQ9mCy/','b4cf4686fc13fb7d26cdb2f22577634b','2017-12-15 09:10:53','202.164.220.226','2017-11-23 02:24:21','2017-11-22 04:31:06','2017-12-15 08:55:53',0,0),(7,2,'jhehan','$2y$09$gyDxFpMapeimnQCLqykB9OKfX9CIZ/HuvROOg9sIW/BIMilbeRDqa','dr.jhee@gmail.com',0,NULL,NULL,NULL,NULL,'139.255.85.58','2017-11-22 05:20:01','2017-11-22 04:58:03','2017-11-22 05:20:01',0,0),(8,2,'Asep','$2y$09$r9EBGMfXkGlJKH/WNlgvZe.UOnjh5ym0qYS/ogK6AGbw7.wcOayfu','iputomang@gmail.com',0,NULL,NULL,NULL,NULL,'202.164.220.226','2017-11-22 05:20:08','2017-11-22 05:02:25','2017-11-22 05:20:08',0,0),(9,2,'wahyudhyatmika','$2y$09$0w0Np1hlIoobCVocIO2N2ufW9iqZdVNdu/hjM7k8shjV7GP3mYLPa','wahyu.dhyatmika@gmail.com',0,NULL,NULL,NULL,NULL,'140.213.10.33','2019-01-30 11:20:33','2018-02-18 18:49:59','2019-01-30 11:20:33',0,0),(10,2,'turnbackhoax','$2y$09$9D9bvVPCmrACh9AgWem1/.HSPq9BOxCavDtfFhkAB1B.8lB7.DRpa','info@mafindo.or.id',0,NULL,NULL,NULL,NULL,'158.140.190.195','2019-02-08 07:38:33','2018-05-03 13:35:49','2019-02-08 07:38:33',0,0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-30  7:25:14
