<?php
require_once("../config.php");

    $check_provider = $conn->query("SELECT * FROM provider_pulsa WHERE code = 'NAYTOUP'");
    $data_provider = mysqli_fetch_assoc($check_provider);

    $cek_harga_website = $conn->query("SELECT * FROM setting_harga_untung WHERE kategori = 'WEBSITE' AND tipe = 'Top Up'");
    $data_harga_website = mysqli_fetch_assoc($cek_harga_website);

    $cek_harga_api = $conn->query("SELECT * FROM setting_harga_untung WHERE kategori = 'API' AND tipe = 'Top Up'");
    $data_harga_api = mysqli_fetch_assoc($cek_harga_api);

    $p_apiid = $data_provider['api_id'];
    $p_apikey = $data_provider['api_key'];

    $harga_website = $data_harga_website['harga'];
    $harga_api = $data_harga_api['harga'];
    
    $cek_provider = $conn->query("SELECT * FROM provider_pulsa WHERE code = 'NAYTOUP'");
    $data_provider = $cek_provider->fetch_assoc();

    $postdata = "api_key=".$data_provider['api_key']."&action=layanan";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://nay-pedia.com/api/top-up");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $chresult = curl_exec($ch);
//echo $chresult;
    curl_close($ch);
    $json_result = json_decode($chresult, true);

$i = 1;
$indeks=0; 
while($indeks < count($json_result['data'])){ 
$sid = $json_result['data'][$indeks]['sid'];
$category = $json_result['data'][$indeks]['operator'];
$service = $json_result['data'][$indeks]['layanan'];		
$price = $json_result['data'][$indeks]['harga'];
$ht_status = $json_result['data'][$indeks]['status'];
$type = $json_result['data'][$indeks]['tipe'];
$description = "-";
$ht_multi = "Tidak";
$indeks++; 
$i++;

// end get data service 
// setting price 
$price_web = $price + $harga_website; //setting penambahan harga web

$price_api = $price + $harga_api; //setting penambahan harga api
// setting price

		if ($ht_status == "Normal") {
			$status = "Normal";
		} else if ($ht_status == "Gangguan") {
			$status = "Gangguan";
		}
		
		if ($ht_multi == "Ya") {
			$multi = "Ya";
		} else if ($ht_multi == "Tidak") {
			$multi = "Tidak";
		}

		//INSERT LAYANAN
		$type2 = strtr($type, array(
			'PULSA' => 'Pulsa',
			'SALGO' => 'E-Money',
			'PKIN' => 'Data',
			'PKSMS' => 'Paket SMS & Telpon',
			'VGAME' => 'Games',
			'TOKENPLN' => 'PLN',
			'LAINYA' => 'Pulsa Internasional',
			'VOUCHER' => 'Voucher',
		));

		$check_services = $conn->query("SELECT * FROM layanan_pulsa WHERE service_id = '$sid' AND provider = 'NAYTOUP'");
        $data_services = mysqli_fetch_assoc($check_services);
        if (mysqli_num_rows($check_services) > 0) {
        $update = $conn->query("UPDATE layanan_pulsa SET harga = '$price_web', harga_api = '$price_api', multi = '$multi', status = '$status' WHERE service_id = '$sid'");
            echo '<font color="blue">Sudah Ada</font> = '.$service.'<br />';
            echo ($update == true) ? '<font color="green">Update Sukses!</font><br />Harga API: '.$price_api.'<br />Harga WEB: '.$price_web.'<br />Multi: '.$multi.'<br />Status: '.$status.'<br /><br />' : '<font color="red">Update Gagal: '.mysqli_error($conn).'</font><br />';
        } else {

$insert = $conn->query("INSERT INTO layanan_pulsa VALUES ('', '$sid', '$sid', '$category', '$service', '$description', '$price_web', '$price_api', '$multi', '$status', 'NAYTOUP', '$type2', 'TOP UP')");
if ($insert == TRUE) {
echo"===============<br>Layanan Top Up Berhasil Di Tambahkan<br><br>ID Layanan : $sid<br>Operator : $category<br>Nama Layanan : $service<br>Tipe : $type2<br>Deskripsi : $description<br>Harga Web : $price_web<br>Harga API : $price_api<br>Status : $status<br>===============<br>";
} else {
    echo "Gagal Menampilkan Data Layanan Top Up.<br />";

}
}
}
?>