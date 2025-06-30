<?php

$title = 'Laporan';

function tgl_indo($tanggal)
{
	$bulan = array(
		1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
		'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}

?>

<style>
	body {
		font-family: Arial, sans-serif;
		margin: 30px;
	}

	#surat {
		min-width: 300px;
		min-height: 800px;
		overflow: auto;
	}

	.text-center {
		text-align: center;
	}

	.text-right {
		text-align: right;
	}

	.text-justify {
		text-align: justify;
	}

	.table {
		width: 90%;
		border-collapse: collapse;
		margin: 20px auto;
	}

	.table th,
	.table td {
		border: 1px solid black;
		padding: 8px;
		text-align: center;
	}

	.table th {
		background-color: #f2f2f2;
	}

	.header-sekolah {
		text-align: center;
	}

	.header-sekolah hr {
		border: 2px solid black;
		margin-top: 5px;
	}

	.footer {
		width: 35%;
		text-align: left;
		float: right;
		margin-top: 30px;
	}

</style>

<div id="surat">
	<!-- Kop Sekolah -->
	<div class="header-sekolah">
		<!-- <img src="<?= base_url(); ?>assets/img/smp_kanisius.png" width="100" height="100" align="left"> -->
		<font size="3"><b>YAYASAN KANISIUS KEUSKUPAN AGUNG SEMARANG</b></font><br>
		<font size="6"><b>SMP KANISIUS JUWANA</b></font><br>
		<font size="2">
			Jl. Pemuda No. 45, Juwana, Kab. Pati, Jawa Tengah 59185<br>
			Telepon: (0295) 123456 | Email: smpkanisiusjuwana@gmail.com | Website: www.smpkanisiusjuwana.sch.id
		</font>
		<hr>
	</div>

	<!-- Judul -->
	<div class="text-center" style="margin-top: 20px;">
		<font size="5"><b><u>PENGUMUMAN</u></b></font><br><br>
	</div>

	<!-- Paragraf Pembuka -->
	<p class="text-justify"><font size="4">
		Dengan hormat,<br><br>
		Bersama surat ini, kami informasikan bahwa siswa-siswi berikut ini telah lulus seleksi dalam program penilaian siswa berprestasi di lingkungan SMP Kanisius Juwana:
	</font></p>

	<!-- Tabel Siswa -->
	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>NIS</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Kelas</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sn = 1;
			$sortingArray = [];

			if ($siswa) {
				foreach ($siswa as $s => $val) {
					$rangking = $this->penilaian_model->findRangking($val->id);
					$sortingArray[$val->id] = $rangking;
				}
			}

			arsort($sortingArray);

			$rankArray = [];
			$jumlah = 1;
			if ($sortingArray) {
				foreach ($sortingArray as $s => $v) {
					$siswa = $this->siswa_model->find($s);
					$rankArray[] = [
						'id' => $s,
						'nis' => $siswa->nis,
						'nama' => ucwords($siswa->nama),
						'alamat' => ucwords($siswa->alamat),
						'kelas' => strtoupper($siswa->kelas),
						'rangking' => $v
					];

					$jumlah++;
					if ($jumlah > $set_jumlah && $set_jumlah > 0) break;
				}
			}

			if ($rankArray) {
				foreach ($rankArray as $val) {
					echo '<tr>';
					echo '<td>' . $sn++ . '</td>';
					echo '<td>' . $val['nis'] . '</td>';
					echo '<td>' . $val['nama'] . '</td>';
					echo '<td>' . $val['alamat'] . '</td>';
					echo '<td>' . $val['kelas'] . '</td>';
					echo '</tr>';
				}
			}
			?>
		</tbody>
	</table>

	<!-- Penutup -->
	<p class="text-justify"><font size="4">
		Kami mengucapkan selamat kepada para siswa atas pencapaian tersebut. Semoga penghargaan ini dapat menjadi motivasi untuk terus meningkatkan prestasi dan menjadi teladan bagi siswa lainnya.<br><br>
		Demikian surat pengumuman ini disampaikan. Atas perhatian dan kerja samanya, kami ucapkan terima kasih.
	</font></p>

	<!-- Tanggal dan TTD -->
	<div class="footer">
		<font size="4">Pati, <?= tgl_indo(date('Y-m-d')) ?></font><br>
		<font size="4">Kepala Sekolah,<br><br><br><br><b><u>Yosephina Munika, S.Pd</u></b></font>
	</div>
</div>
