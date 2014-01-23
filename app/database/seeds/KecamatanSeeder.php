<?php

class KecamatanSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		
		$balikpapan = array(
			# 1. Balikpapan
			array('nama' => 'Balikpapan Barat', 'id_kabupaten_kota' => '1'),
			array('nama' => 'Balikpapan Kota', 'id_kabupaten_kota' => '1'),
			array('nama' => 'Balikpapan Selatan', 'id_kabupaten_kota' => '1'),
			array('nama' => 'Balikpapan Tengah', 'id_kabupaten_kota' => '1'),
			array('nama' => 'Balikpapan Timur', 'id_kabupaten_kota' => '1'),
			array('nama' => 'Balikpapan Utara', 'id_kabupaten_kota' => '1'),
		);

		$berau = array(
			# 2. Berau
			array('nama' => 'Batu Putih', 'id_kabupaten_kota' => '2'),
			array('nama' => 'Biatan', 'id_kabupaten_kota' => '2'),
			array('nama' => 'Biduk-Biduk', 'id_kabupaten_kota' => '2'),
			array('nama' => 'Gunung Tabur', 'id_kabupaten_kota' => '2'),
			array('nama' => 'Kelay', 'id_kabupaten_kota' => '2'),
			array('nama' => 'Maratua', 'id_kabupaten_kota' => '2'),
			array('nama' => 'Pulau Derawan', 'id_kabupaten_kota' => '2'),
			array('nama' => 'Sambaliung', 'id_kabupaten_kota' => '2'),
			array('nama' => 'Segah', 'id_kabupaten_kota' => '2'),
			array('nama' => 'Tabalar', 'id_kabupaten_kota' => '2'),
			array('nama' => 'Talisayan', 'id_kabupaten_kota' => '2'),
			array('nama' => 'Tanjung Redeb', 'id_kabupaten_kota' => '2'),
			array('nama' => 'Teluk Bayur', 'id_kabupaten_kota' => '2'),
		);

		$bontang = array(
			# 3. Bontang
			array('nama' => 'Bontang Barat', 'id_kabupaten_kota' => '3'),
			array('nama' => 'Bontang Selatan', 'id_kabupaten_kota' => '3'),
			array('nama' => 'Bontang Utara', 'id_kabupaten_kota' => '3'),
		);

		$bulungan = array(
			# 4. Bulungan
			array('nama' => 'Bunyu', 'id_kabupaten_kota' => '4'),
			array('nama' => 'Peso', 'id_kabupaten_kota' => '4'),
			array('nama' => 'Peso Ilir', 'id_kabupaten_kota' => '4'),
			array('nama' => 'Sekatak', 'id_kabupaten_kota' => '4'),
			array('nama' => 'Tanjung Palas', 'id_kabupaten_kota' => '4'),
			array('nama' => 'Tanjung Palas Barat', 'id_kabupaten_kota' => '4'),
			array('nama' => 'Tanjung Palas Tengah', 'id_kabupaten_kota' => '4'),
			array('nama' => 'Tanjung Palas Timur', 'id_kabupaten_kota' => '4'),
			array('nama' => 'Tanjung Palas Utara', 'id_kabupaten_kota' => '4'),
			array('nama' => 'Tanjung Selor', 'id_kabupaten_kota' => '4'),
		);	

		$kubar = array(
			# 5. Kutai Barat
			array('nama' => 'Barong Tongkok', 'id_kabupaten_kota' => '5'),
			array('nama' => 'Bentian Besar', 'id_kabupaten_kota' => '5'),
			array('nama' => 'Bongan', 'id_kabupaten_kota' => '5'),
			array('nama' => 'Damai', 'id_kabupaten_kota' => '5'),
			array('nama' => 'Jempang', 'id_kabupaten_kota' => '5'),
			array('nama' => 'Laham', 'id_kabupaten_kota' => '5'),
			array('nama' => 'Linggang Bigung', 'id_kabupaten_kota' => '5'),
			array('nama' => 'Long Apari', 'id_kabupaten_kota' => '5'),
			array('nama' => 'Long Bagun', 'id_kabupaten_kota' => '5'),
			array('nama' => 'Long Hubung', 'id_kabupaten_kota' => '5'),
			array('nama' => 'Long Iram', 'id_kabupaten_kota' => '5'),
			array('nama' => 'Long Pahangai', 'id_kabupaten_kota' => '5'),
			array('nama' => 'Melak', 'id_kabupaten_kota' => '5'),
			array('nama' => 'Mook Manaar Bulatn', 'id_kabupaten_kota' => '5'),
			array('nama' => 'Muara Lawa', 'id_kabupaten_kota' => '5'),
			array('nama' => 'Muara Pahu', 'id_kabupaten_kota' => '5'),
			array('nama' => 'Nyuatan', 'id_kabupaten_kota' => '5'),
			array('nama' => 'Penyinggahan', 'id_kabupaten_kota' => '5'),
			array('nama' => 'Sekolaq Darat', 'id_kabupaten_kota' => '5'),
			array('nama' => 'Siluq Ngurai', 'id_kabupaten_kota' => '5'),
			array('nama' => 'Tering', 'id_kabupaten_kota' => '5'),
		);	

		$kukar = array(
			# 6. Kutai Kartanegara
			array('nama' => 'Anggana', 'id_kabupaten_kota' => '6'),
			array('nama' => 'Kembang Janggut', 'id_kabupaten_kota' => '6'),
			array('nama' => 'Kenohan', 'id_kabupaten_kota' => '6'),
			array('nama' => 'Kota Bangun', 'id_kabupaten_kota' => '6'),
			array('nama' => 'Loa Janan', 'id_kabupaten_kota' => '6'),
			array('nama' => 'Loa Kulu', 'id_kabupaten_kota' => '6'),
			array('nama' => 'Marang Kayu', 'id_kabupaten_kota' => '6'),
			array('nama' => 'Muara Badak', 'id_kabupaten_kota' => '6'),
			array('nama' => 'Muara Jawa', 'id_kabupaten_kota' => '6'),
			array('nama' => 'Muara Kaman', 'id_kabupaten_kota' => '6'),
			array('nama' => 'Muara Muntai', 'id_kabupaten_kota' => '6'),
			array('nama' => 'Muara Wis', 'id_kabupaten_kota' => '6'),
			array('nama' => 'Samboja', 'id_kabupaten_kota' => '6'),
			array('nama' => 'Sanga Sanga', 'id_kabupaten_kota' => '6'),
			array('nama' => 'Sebulu', 'id_kabupaten_kota' => '6'),
			array('nama' => 'Tabang', 'id_kabupaten_kota' => '6'),
			array('nama' => 'Tenggarong', 'id_kabupaten_kota' => '6'),
			array('nama' => 'Tenggarong Seberang', 'id_kabupaten_kota' => '6'),
		);
	
		$kutim = array(
			# 7. Kutai Timur
			array('nama' => 'Batu Ampar', 'id_kabupaten_kota' => '7'),
			array('nama' => 'Bengalon', 'id_kabupaten_kota' => '7'),
			array('nama' => 'Busang', 'id_kabupaten_kota' => '7'),
			array('nama' => 'Kaliorang', 'id_kabupaten_kota' => '7'),
			array('nama' => 'Karangan', 'id_kabupaten_kota' => '7'),
			array('nama' => 'Kaubun', 'id_kabupaten_kota' => '7'),
			array('nama' => 'Kombeng', 'id_kabupaten_kota' => '7'),
			array('nama' => 'Long Mesangat', 'id_kabupaten_kota' => '7'),
			array('nama' => 'Muara Ancalong', 'id_kabupaten_kota' => '7'),
			array('nama' => 'Muara Bengkal', 'id_kabupaten_kota' => '7'),
			array('nama' => 'Muara Wahau', 'id_kabupaten_kota' => '7'),
			array('nama' => 'Rantau Pulung', 'id_kabupaten_kota' => '7'),
			array('nama' => 'Sandaran', 'id_kabupaten_kota' => '7'),
			array('nama' => 'Sangatta Selatan', 'id_kabupaten_kota' => '7'),
			array('nama' => 'Sangatta Utara', 'id_kabupaten_kota' => '7'),
			array('nama' => 'Sangkulirang', 'id_kabupaten_kota' => '7'),
			array('nama' => 'Telen', 'id_kabupaten_kota' => '7'),
			array('nama' => 'Teluk Pandan', 'id_kabupaten_kota' => '7'),
		);

		$malinau = array(
			# 8. Malinau
			array('nama' => 'Bahau Hulu', 'id_kabupaten_kota' => '8'),
			array('nama' => 'Kayan Hilir', 'id_kabupaten_kota' => '8'),
			array('nama' => 'Kayan Hulu', 'id_kabupaten_kota' => '8'),
			array('nama' => 'Kayan Selatan', 'id_kabupaten_kota' => '8'),
			array('nama' => 'Malinau Barat', 'id_kabupaten_kota' => '8'),
			array('nama' => 'Malinau Kota', 'id_kabupaten_kota' => '8'),
			array('nama' => 'Malinau Selatan', 'id_kabupaten_kota' => '8'),
			array('nama' => 'Malinau Selatan Hilir', 'id_kabupaten_kota' => '8'),
			array('nama' => 'Malinau Selatan Hulu', 'id_kabupaten_kota' => '8'),
			array('nama' => 'Malinau Utara', 'id_kabupaten_kota' => '8'),
			array('nama' => 'Mentarang', 'id_kabupaten_kota' => '8'),
			array('nama' => 'Mentarang Hulu', 'id_kabupaten_kota' => '8'),
			array('nama' => 'Pujungan', 'id_kabupaten_kota' => '8'),
			array('nama' => 'Sungai Boh', 'id_kabupaten_kota' => '8'),
			array('nama' => 'Sungai Tubu', 'id_kabupaten_kota' => '8'),
		);

		$nunukan = array(
			# 9. Nunukan
			array('nama' => 'Krayan', 'id_kabupaten_kota' => '9'),
			array('nama' => 'Krayan Selatan', 'id_kabupaten_kota' => '9'),
			array('nama' => 'Lumbis', 'id_kabupaten_kota' => '9'),
			array('nama' => 'Lumbis Ogong', 'id_kabupaten_kota' => '9'),
			array('nama' => 'Nunukan', 'id_kabupaten_kota' => '9'),
			array('nama' => 'Nunukan Selatan', 'id_kabupaten_kota' => '9'),
			array('nama' => 'Sebatik', 'id_kabupaten_kota' => '9'),
			array('nama' => 'Sebatik Barat', 'id_kabupaten_kota' => '9'),
			array('nama' => 'Sebatik Tengah', 'id_kabupaten_kota' => '9'),
			array('nama' => 'Sebatik Timur', 'id_kabupaten_kota' => '9'),
			array('nama' => 'Sebatik Utara', 'id_kabupaten_kota' => '9'),
			array('nama' => 'Sebuku', 'id_kabupaten_kota' => '9'),
			array('nama' => 'Sei Menggaris', 'id_kabupaten_kota' => '9'),
			array('nama' => 'Sembakung', 'id_kabupaten_kota' => '9'),
			array('nama' => 'Tulin Onsoi', 'id_kabupaten_kota' => '9'),
		);

		$paser = array(
			# 10. Paser
			array('nama' => 'Batu Engau', 'id_kabupaten_kota' => '10'),
			array('nama' => 'Batu Sopang', 'id_kabupaten_kota' => '10'),
			array('nama' => 'Kuaro', 'id_kabupaten_kota' => '10'),
			array('nama' => 'Long Ikis', 'id_kabupaten_kota' => '10'),
			array('nama' => 'Long Kali', 'id_kabupaten_kota' => '10'),
			array('nama' => 'Muara Komam', 'id_kabupaten_kota' => '10'),
			array('nama' => 'Muara Samu', 'id_kabupaten_kota' => '10'),
			array('nama' => 'Pasir Balengkong', 'id_kabupaten_kota' => '10'),
			array('nama' => 'Tanah Grogot', 'id_kabupaten_kota' => '10'),
			array('nama' => 'Tanjung Harapan', 'id_kabupaten_kota' => '10'),
		);

		$ppu = array(
			# 11. Penajam Paser Utara
			array('nama' => 'Babulu', 'id_kabupaten_kota' => '11'),
			array('nama' => 'Penajam', 'id_kabupaten_kota' => '11'),
			array('nama' => 'Sepaku', 'id_kabupaten_kota' => '11'),
			array('nama' => 'Waru', 'id_kabupaten_kota' => '11'),
		);

		$samarinda = array(
			# 12. Samarinda
			array('nama' => 'Loa Janan Ilir', 'id_kabupaten_kota' => '12'),
			array('nama' => 'Palaran', 'id_kabupaten_kota' => '12'),
			array('nama' => 'Samarinda Ilir', 'id_kabupaten_kota' => '12'),
			array('nama' => 'Samarinda Kota', 'id_kabupaten_kota' => '12'),
			array('nama' => 'Samarinda Seberang', 'id_kabupaten_kota' => '12'),
			array('nama' => 'Samarinda Ulu', 'id_kabupaten_kota' => '12'),
			array('nama' => 'Samarinda Utara', 'id_kabupaten_kota' => '12'),
			array('nama' => 'Sambutan', 'id_kabupaten_kota' => '12'),
			array('nama' => 'Sungai Kunjang', 'id_kabupaten_kota' => '12'),
			array('nama' => 'Sungai Pinang', 'id_kabupaten_kota' => '12'),
		);

		$tidung = array(
			# 13. Tana Tidung
			array('nama' => 'Betayau', 'id_kabupaten_kota' => '13'),
			array('nama' => 'Sesayap', 'id_kabupaten_kota' => '13'),
			array('nama' => 'Sesayap Ilir', 'id_kabupaten_kota' => '13'),
			array('nama' => 'Tana Lia', 'id_kabupaten_kota' => '13'),
		);

		$tarakan = array(
			# 14. Tarakan
			array('nama' => 'Tarakan Barat', 'id_kabupaten_kota' => '14'),
			array('nama' => 'Tarakan Tengah', 'id_kabupaten_kota' => '14'),
			array('nama' => 'Tarakan Timur', 'id_kabupaten_kota' => '14'),
			array('nama' => 'Tarakan Utara', 'id_kabupaten_kota' => '14'),

		);
		
		DB::table('kecamatan')->insert($balikpapan);
		DB::table('kecamatan')->insert($berau);
		DB::table('kecamatan')->insert($bontang);
		DB::table('kecamatan')->insert($bulungan);
		DB::table('kecamatan')->insert($kubar);
		DB::table('kecamatan')->insert($kukar);
		DB::table('kecamatan')->insert($kutim);
		DB::table('kecamatan')->insert($malinau);
		DB::table('kecamatan')->insert($nunukan);
		DB::table('kecamatan')->insert($paser);
		DB::table('kecamatan')->insert($ppu);
		DB::table('kecamatan')->insert($samarinda);
		DB::table('kecamatan')->insert($tidung);
		DB::table('kecamatan')->insert($tarakan);
	}

}