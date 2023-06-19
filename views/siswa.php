<?php
// $nisn = "0087917776";
// $npsn = "20607920";
// echo $_POST['nisn'];
// echo $_POST['npsn'];

$api_url ="https://pelayanan.data.kemdikbud.go.id/vci/index.php/CPelayananData/getSiswa?kode_wilayah=280000&token=CE0DDFB3-8F53-44D9-9CB7-9D04544D931E&nisn=" . $nisn . "&npsn=" . $npsn;
$i = 1;

$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data);

if ($_POST['nisn'] == "") {
    $Keterangan = $response_data[0]->Keterangan;
    ?>
    <div class="alert alert-danger d-flex align-items-center m-5" role="alert">
        <div>
        <i class="fa-solid fa-triangle-exclamation"></i> <?=$Keterangan;?>
        </div>
    </div>
    <?php
} elseif ($_POST['npsn'] == "") {
    $Keterangan = $response_data[0]->Keterangan;
    ?>
    <div class="alert alert-danger d-flex align-items-center m-5" role="alert">
        <div>
        <i class="fa-solid fa-triangle-exclamation"></i> <?=$Keterangan;?>
        </div>
    </div>
    <?php
} else {
    


// echo $Keterangan;

$sekolah_id = $response_data[0]->sekolah_id;
// $kode_wilayah = $response_data[0]->kode_wilayah;
$nama = $response_data[0]->nama;
$tempat_lahir = $response_data[0]->tempat_lahir;
$tanggal_lahir = date_create($response_data[0]->tanggal_lahir);
$tanggal_lahir = date_format($tanggal_lahir, "Y-m-d");
function tgl_indo($tanggal_lahir){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal_lahir);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
$tanggal_lahir = tgl_indo($tanggal_lahir);
$jenis_kelamin = $response_data[0]->jenis_kelamin;
$nik = $response_data[0]->nik;
$nisn = $response_data[0]->nisn;
$alamat_jalan = $response_data[0]->alamat_jalan;
$desa_kelurahan = $response_data[0]->desa_kelurahan;
$rt = $response_data[0]->rt;
$rw = $response_data[0]->rw;
$nama_dusun = $response_data[0]->nama_dusun;
$nama_ibu_kandung = $response_data[0]->nama_ibu_kandung;
$pekerjaan_ibu = $response_data[0]->pekerjaan_ibu;
$penghasilan_ibu = $response_data[0]->penghasilan_ibu;
$nama_ayah = $response_data[0]->nama_ayah;
$pekerjaan_ayah = $response_data[0]->pekerjaan_ayah;
$penghasilan_ayah = $response_data[0]->penghasilan_ayah;
$nama_wali = $response_data[0]->nama_wali;
$pekerjaan_wali = $response_data[0]->pekerjaan_wali;
$penghasilan_wali = $response_data[0]->penghasilan_wali;
$kebutuhan_khusus = $response_data[0]->kebutuhan_khusus;
$no_kip = $response_data[0]->no_kip;
$no_pkh = $response_data[0]->no_pkh;
$lintang = $response_data[0]->lintang;
$bujur = $response_data[0]->bujur;
$tingkat_pendidikan = $response_data[0]->tingkat_pendidikan;
if ($tingkat_pendidikan > 12) {
    $tingkat = "Pendidikan Tinggi";
} elseif ($tingkat_pendidikan > 9) {
    $tingkat = "Kelas " . $tingkat_pendidikan . " - SMA Sederajat";
} elseif ($tingkat_pendidikan > 6) {
    $tingkat = "Kelas " . $tingkat_pendidikan . " - SMP Sederajat";
} elseif ($tingkat_pendidikan > 1) {
    $tingkat = "Kelas " . $tingkat_pendidikan . " - SD Sederajat";
} else {
    $tingkat = "PAUD";
}
?>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Nama</td>
                                    <td><?= ucwords(strtolower($nama)) ;?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Tempat, Tanggal Lahir</td>
                                    <td><?= ucwords(strtolower($tempat_lahir)) . ", " . $tanggal_lahir ;?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Alamat</td>
                                    <td><?= ucwords(strtolower($alamat_jalan)) . " " . $desa_kelurahan . " RT/RW : " . $rt . "/" . $rw;?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Tingkat Pendidikan</td>
                                    <td><?= $tingkat ;?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Sekolah</td>
                                    <td><a href="https://sekolah.data.kemdikbud.go.id/index.php/chome/profil/<?= $sekolah_id ;?>" class="btn btn-success btn-sm text-decoration-none" target="_BLANK">lihat</td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Nama Ibu</td>
                                    <td><?= ucwords(strtolower($nama_ibu_kandung));?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Pekerjaan Ibu</td>
                                    <td><?= ucwords(strtolower($pekerjaan_ibu));?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Penghasilan Ibu</td>
                                    <td><?= ucwords(strtolower($penghasilan_ibu));?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Nama Ayah</td>
                                    <td><?= ucwords(strtolower($nama_ayah));?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Pekerjaan Ayah</td>
                                    <td><?= ucwords(strtolower($pekerjaan_ayah));?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Penghasilan Ayah</td>
                                    <td><?= ucwords(strtolower($penghasilan_ayah));?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Nama Wali</td>
                                    <td><?= ucwords(strtolower($nama_wali));?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Pekerjaan Wali</td>
                                    <td><?= ucwords(strtolower($pekerjaan_wali));?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Penghasilan Wali</td>
                                    <td><?= ucwords(strtolower($penghasilan_wali));?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Kebutuhan Khusus</td>
                                    <td><?= ucwords(strtolower($kebutuhan_khusus));?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>KIP/PKH</td>
                                    <td><?= $no_kip . " / " . $no_pkh;?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Titik Koordinat</td>
                                    <td>
                                        <a href="https://www.google.com/maps/dir/SMA+Negeri+9+Tangerang,+Jl.+H.+Jali+No.9,+RT.001%2FRW.002,+Kunciran+Jaya,+Kec.+Pinang,+Kota+Tangerang,+Banten+15144/-6.2239237,106.6845417/<?= $lintang . "," . $bujur;?>" class="text-decoration-none text-dark" target="_BLANK"><?= $lintang . "," . $bujur;?></a></td>
                                        <!-- <a href="https://www.google.com/maps/search/<?= $lintang . "," . $bujur;?>" class="text-decoration-none text-dark" target="_BLANK"><?= $lintang . "," . $bujur;?></a></td> -->
                                </tr>
                            </tbody>
                        </table>
                    </div>
    <?php
    }
    ?>