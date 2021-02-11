<?php
  $koneksi=mysqli_connect("localhost","root","","pegcov5");


  mysqli_query($koneksi,"DELETE FROM tb_org");
  mysqli_query($koneksi,"DELETE FROM tb_orgsat");







mysqli_query($koneksi,"INSERT INTO tb_org (org_id, org_nama) VALUES ('700100000000','Sekretariat Jenderal')");
mysqli_query($koneksi,"INSERT INTO tb_org (org_id, org_nama) VALUES ('700200000000','lnspektorat Jenderal')");
mysqli_query($koneksi,"INSERT INTO tb_org (org_id, org_nama) VALUES ('700500000000','Direktorat Jenderal Kesehatan Masyarakat')");
mysqli_query($koneksi,"INSERT INTO tb_org (org_id, org_nama) VALUES ('700300000000','Direktorat Jenderal Pelayanan Kesehatan')");
mysqli_query($koneksi,"INSERT INTO tb_org (org_id, org_nama) VALUES ('700400000000','Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit')");
mysqli_query($koneksi,"INSERT INTO tb_org (org_id, org_nama) VALUES ('700600000000','Direktorat Jenderal Kefarmasian Dan Alat Kesehatan')");
mysqli_query($koneksi,"INSERT INTO tb_org (org_id, org_nama) VALUES ('700700000000','Badan Penelitian dan Pengembangan Kesehatan')");
mysqli_query($koneksi,"INSERT INTO tb_org (org_id, org_nama) VALUES ('700800000000','Badan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan')");



								
								
								
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700100000000', 'Sekretariat Jenderal', '700101000000', 'Biro Perencanaan dan Anggaran')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700100000000', 'Sekretariat Jenderal', '700102000000', 'Biro Keuangan dan Barang Milik Negara')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700100000000', 'Sekretariat Jenderal', '700103000000', 'Biro Hukum dan Organisasi')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700100000000', 'Sekretariat Jenderal', '700104000000', 'Biro Kepegawaian')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700100000000', 'Sekretariat Jenderal', '700105000000', 'Biro Kerja Sama Luar Negeri')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700100000000', 'Sekretariat Jenderal', '700106000000', 'Biro Komunikasi dan Pelayanan Masyarakat')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700100000000', 'Sekretariat Jenderal', '700107000000', 'Biro Umum')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700100000000', 'Sekretariat Jenderal', '700108000000', 'Pusat Data dan lnformasi')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700100000000', 'Sekretariat Jenderal', '700109000000', 'Pusal Analisis Determinan Kesehatan')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700100000000', 'Sekretariat Jenderal', '700110000000', 'Pusat Pembiayaan dan Jaminan Kesehatan')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700100000000', 'Sekretariat Jenderal', '700111000000', 'Pus at Krisis Kesehatan')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700100000000', 'Sekretariat Jenderal', '700112000000', 'Pusat Kesehatan Haji')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700100000000', 'Sekretariat Jenderal', '700113000000', 'Sekretariat Konsil Kedokteran Indonesia')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700200000000', 'lnspektorat Jenderal', '700201000000', 'Sekretariat lnspektorat Jenderal')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700200000000', 'lnspektorat Jenderal', '700203000000', 'lnspektorat II')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700200000000', 'lnspektorat Jenderal', '700204000000', 'lnspektorat Ill')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700200000000', 'lnspektorat Jenderal', '700205000000', 'lnspektorat IV')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700200000000', 'lnspektorat Jenderal', '700206000000', 'lnspektorat lnvestigasi')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700200000000', 'lnspektorat Jenderal', '700202000000', 'lnspektorat I')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700501000000', 'Sekretariat Direktorat Jenderal Kesehatan Masyarakat')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700502000000', 'Direktorat Kesehatan Keluarga')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700503000000', 'Direktorat Kesehatan Lingkungan')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700504000000', 'Direktorat Kesehatan Kerja dan Olahraga')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700505000000', 'Direktorat Gizi Masyarakat')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700506000000', 'Direktorat Promosi Kesehatan dan Pemberdayaan Masyarakat')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700512000000', 'Balai Kesehatan Olahraga Masyarakat Bandung')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700513000000', 'Balai Kesehatan Tradisional Masyarakat Makassar')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700514000000', 'Loka Kesehatan Tradisional Masyarakat Palembang')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700301000000', 'Sekretariat Direktorat Jenderal Pelayanan Kesehatan')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700302000000', 'Direktorat Pelayanan Kesehatan Primer')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700303000000', 'Direktorat Pelayanan Kesehatan Rujukan')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700304000000', 'Direktorat Pelayanan Kesehatan Tradisional')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700305000000', 'Direktorat Fasilitas Pelayanan Kesehatan')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700306000000', 'Direktorat Mutu dan Akreditasi Pelayanan Kesehatan')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700320000000', 'Rumah Sakit Jantung dan Pembuluh Darah Harapan Kita Jakarta')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700307000000', 'Rumah Sakit Umum Pusat Nasional Dr. Cipto Mangunkusumo Jakarta')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700308000000', 'Run1ah Sakit Umum Pusat Dr. Hasan Sadikin Bandung')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700355000000', 'Loka Pengamanan Fasilitas Kesehatan Banjarbaru')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700354000000', 'Loka Pengamanan Fasilitas Kesehatan Surakarta')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700353000000', 'Rumah Sakit Penyakit lnfeksi Prof. Dr. Sulianti Saroso Jakarta')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700352000000', 'Rumah Sakit Umum Ratatotok Buyat')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700351000000', 'loka Pengamanan Fasilitas Kesehatan Jayapura')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700350000000', 'Balai Pengamanan Fasilitas Kesehatan Banjarmasin')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700349000000', 'Balai Kesehatan Mata Masyarakat Makassar')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700348000000', 'Balai Kesehatan Mata Masyarakat Cikampek')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700347000000', 'Balai Besar Kesehatan Paru Masyarakat Bandung')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700346000000', 'Balai Besar Kesehatan Paru Masyarakat Makassar')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700345000000', 'Balai Besar Kesehatan Paru Masyarakat Surakarta')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700344000000', 'Balai Pengamanan Fasilitas Kesehatan Makassar')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700343000000', 'Balai Pengamanan Fasilitas Kesehatan Medan')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700342000000', 'Balai Pengamanan Fasilitas Kesehatan Surabaya')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700341000000', 'Balai Pengamanan Fasilitas Kesehatan Jakarta')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700340000000', 'Balai Besar Laboratorium Kesehatan Makassar')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700339000000', 'Balai Besar Laboratorium Kesehatan Jakarta')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700338000000', 'Balai Besar Laboratorium Kesehatan Surabaya')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700337000000', 'Balai Besar Laboratorium Kesehatan Palembang')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700336000000', 'Rumah Sakit Kusta Dr. Rivai Abdullah Palembang')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700335000000', 'Rumah Sakit Kusta Sitanala Tangerang')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700334000000', 'Rumah Sakit Dr. Tadjuddin Chalid Makassar')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700333000000', 'Rumah Saki! Stroke Nasional Bukittinggi')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700332000000', 'Rumah Sakit Ketergantungan Oba! Jakarta')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700331000000', 'Rumah Sakit Dr. Marzoeki Mahdi Bogor')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700330000000', 'Rumah Sakit Jiwa Dr. Radjiman Wediodiningrat Lawang')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700329000000', 'Rumah Sakit Jiwa Prof. Dr. Soerojo Magelang')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700328000000', 'Rumah Sakit Jiwa Dr. Soeharto Heerdjan Jakarta')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700327000000', 'Rumah Sakit Paru Dr. M. Goenawan Partowidigdo Cisarua Bogor')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700326000000', 'Rumah Sakit Paru Dr. H. A. Rotinsulu Bandung')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700325000000', 'Rumah Sakit Paru Dr. Ario Wirawan Salatiga')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700324000000', 'Rumah Sakit Ortopedi Prof. Dr. R. Soeharso Surakarta')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700323000000', 'Rumah Sakit Mata Cicendo Bandung')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700322000000', 'Rumah Sakit Kanker Dharmais Jakarta')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700321000000', 'Rumah Sakit Anak dan Bunda Harapan Kita Jakarta')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700319000000', 'Rumah Sakit Umum Pusat H. Adam Malik Medan')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700318000000', 'Rumah Sakit Umum Pusat Prof. Dr. R. D. Kandou Manado')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700317000000', 'Rumah Sakit Umum Pusat Dr. Soeradji Tirtonegoro Klaten')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700316000000', 'Rumah Sakit Umum Pusat Dr. M. Djamil Padang')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700315000000', 'Rumah Sakit Umum Pusat Dr. Mohamad Hoesin Palembang')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700314000000', 'Rumah Sakit Umum Pusat Persahabatan Jakarta')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700313000000', 'Rum ah Sa kit Umum Pus at F atmawati Jakarta')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700312000000', 'Rumah Sakit Umum Pusat Dr. Wahidin Sudirohusodo Makassar')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700311000000', 'Rumah Sakit Umum Pusat Sanglah Denpasar')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700310000000', 'Rumah Saki! Umum Pusat Dr. Kariadi Semarang')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700309000000', 'Rumah Sakit Umum Pusat Dr. Sardjito Yogyakarta')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700356000000', 'Rumah Sakit Pusat Otak Nasional Jakarta')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700357000000', 'Unit Pelayanan Kesehatan Kementerian Kesehatan')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700358000000', 'Balai Besar Laboratorium Kesehatan Palembang')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700359000000', 'Balai Besar Laboratorium Kesehatan Surabaya')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700360000000', 'Balai Besar Laboralorium Kesehatan Jakarta')");
mysqli_query($koneksi,"INSERT INTO tb_orgsat (orgsat_org_id, orgsat_org_nama, orgsat_id, orgsat_nama) VALUES ('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700394000000', 'Rumah Sakit Pusat Otak Nasional Prof. Dr. dr. Mahar Mardjono Jakarta - BARU')");
								
								
								
								
								
								
								
								
								
								
								





?>