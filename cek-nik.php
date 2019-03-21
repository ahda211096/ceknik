<?php
/*
CEK NIK KTP
Author: Iansangaji
Usage: php cek-nik.php yournik
*/
function curl_ceknik($url){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $result = curl_exec($ch); 
    curl_close($ch);
    return $result;
}
$api = curl_ceknik("https://api.itsec-papua.org/kk/?niks=$argv[1]");
$api = json_decode($api, TRUE);
if($api['content']['RESPON'] == "Data Tidak Ditemukan"){
	echo "".$api['content']['RESPON']."\n";
}else{
	echo "STATUS HUBKEL    : ".$api['content']['STAT_HBKEL']."\n";
	echo "PENDIDIKAN AKHIR : ".$api['content']['PDDK_AKH']."\n";
	echo "TEMPAT LAHIR     : ".$api['content']['TMPT_LHR']."\n";
	echo "GOLONGAN DARAH   : ".$api['content']['GOL_DARAH']."\n";
	echo "NAMA KELURAHAN   : ".$api['content']['KEL_NAME']."\n";
	echo "NIK              : ".$api['content']['NIK']."\n";
	echo "NAMA KABUPATEN   : ".$api['content']['KAB_NAME']."\n";
	echo "ALAMAT           : ".$api['content']['ALAMAT']."\n";
	echo "JENI KELAMIN     : ".$api['content']['JENIS_KLMIN']."\n";
	echo "NAMA PROPINSI    : ".$api['content']['PROP_NAME']."\n";
	echo "NAMA LENGKAP     : ".$api['content']['NAMA_LGKP']."\n";
	echo "NAMA KECAMATAN   : ".$api['content']['KEC_NAME']."\n";
	echo "AGAMA            : ".$api['content']['AGAMA']."\n";
	echo "JENIS PEKERJAAN  : ".$api['content']['JENIS_PKRJN']."\n";
	echo "STATUS KAWIN     : ".$api['content']['STATUS_KAWIN']."\n";
	echo "TANGGAL LAHIR    : ".$api['content']['TGL_LHR']."\n";
}
?>
