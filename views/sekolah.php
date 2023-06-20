<?php

$apisekolah ="https://api-sekolah-indonesia.vercel.app/sekolah/s?sekolah=" . urlencode($namasekolah);
$i = 1;
$json_data = file_get_contents($apisekolah);
$response_data = json_decode($json_data);
if ($response = $response_data->status == null) {
    $Keterangan = "Data Tidak Ditemukan...!"
    ?>
    <div class="alert alert-danger d-flex align-items-center m-5" role="alert">
        <div>
        <i class="fa-solid fa-triangle-exclamation"></i> <?=$Keterangan;?>
        </div>
    </div>
    <?php
} else {
    $response_data = json_decode($json_data, true);
    $sekolah = $response_data['dataSekolah'][0];
    // echo "<pre>";
    // echo $response;
    // // var_dump($sekolah);
    // echo "</pre>";
    // $sekolah = $response_data['dataSekolah'][0]['kode_prop'];
    // echo $sekolah ;
    // http_response_code()

?>


                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Kode Provinsi</td>
                                    <td><?= ucwords(strtolower($sekolah['kode_prop'])) ;?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Provinsi</td>
                                    <td><?= ucwords(strtolower($sekolah['propinsi'])) ;?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Kode Kab/Kota</td>
                                    <td><?= ucwords(strtolower($sekolah['kode_kab_kota'])) ;?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Kab/Kota</td>
                                    <td><?= ucwords(strtolower($sekolah['kabupaten_kota'])) ;?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Kode Kecamatan</td>
                                    <td><?= ucwords(strtolower($sekolah['kode_kec'])) ;?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Kecamatan</td>
                                    <td><?= ucwords(strtolower($sekolah['kecamatan'])) ;?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>ID Sekolah</td>
                                    <td><?= ucwords(strtolower($sekolah['id'])) ;?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>NPSN</td>
                                    <td><?= ucwords(strtolower($sekolah['npsn'])) ;?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Nama Sekolah</td>
                                    <td><?= $sekolah['sekolah'] ;?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Jenjang</td>
                                    <td><?= $sekolah['bentuk'] ;?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Status</td>
                                    <td><?php if($sekolah['kode_prop'] == "N") {echo "Negeri";}else{echo "Swasta";} ;?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Alamat</td>
                                    <td><?= ucwords(strtolower($sekolah['alamat_jalan'])) ;?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?=$i++?></th>
                                    <td>Lintang / Bujur</td>
                                    <td><?= $sekolah['lintang'] . "," . $sekolah['bujur'] ;?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

<?php
}
?>