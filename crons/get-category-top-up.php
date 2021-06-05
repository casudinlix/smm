<?php
   require_once("../config.php");

    $check_provider = $conn->query("SELECT * FROM provider_pulsa WHERE code = 'NAYTOUP'");
    $data_provider = mysqli_fetch_assoc($check_provider);
    
    $p_apiid = $data_provider['api_id'];
    $p_apikey = $data_provider['api_key'];

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
    //print_r($json_result);
    
$i = 1;
$indeks=0; 
while($indeks < count($json_result['data'])){ 

$n_sid = $json_result['data'][$indeks]['sid'];
$category = $json_result['data'][$indeks]['operator'];
$n_service = $json_result['data'][$indeks]['layanan'];		
$n_price = $json_result['data'][$indeks]['harga'];
$n_status = $json_result['data'][$indeks]['status'];
$type = $json_result['data'][$indeks]['tipe'];
$n_description = "-";
$indeks++; 
$i++;
// end get data service 

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

	    $cek_kategori = $conn->query("SELECT * FROM kategori_layanan WHERE kode = '$category' AND server = '$type2'");
        $data_services = mysqli_fetch_assoc($cek_kategori);
        if (mysqli_num_rows($cek_kategori) > 0) {
            echo "Kategori Sudah Ada Di Database => $category \n <br>";
        } else {

$insert = $conn->query("INSERT INTO kategori_layanan VALUES ('','$category','$category','Top Up','$type2')"); //Memasukan Kepada Database (OPTIONAL)
if ($insert == TRUE) {
echo"===============<br>Kategori Top Up Berhasil Di Tambahkan<br><br>Nama Kategori : $category<br>Kode Kategori : $category<br>Server : $type2<br>Tipe : Top Up<br>===============<br>";
} else {
    echo "Gagal Menampilkan Data Kategori Top Up.<br />";
}
}
}
?>