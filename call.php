<?php

echo 'Masukkan nomor hp target (628xxxxxx): '; 
$phone_number = trim(fgets(STDIN)); 

echo 'Masukkan jumlah boom max 10 : '; 
$jml = trim(fgets(STDIN)); 

echo 'Link .xml pesan suara : '; 
$message = trim(fgets(STDIN)); 

$urlmessage =  urlencode( $message );

  if ( $jml >= 50 ) {
    echo 'JANGAN BANYAK BANYAK BRO NTAR DOWN';  
  } else {
    for ($i = 0; $i < $jml; $i++) {
      // Get cURL resource
    $curl = curl_init();
    // Set some options - we are passing in a useragent too here
    curl_setopt_array($curl, [
        CURLOPT_URL => 'http://api.ancreator.com/c/index.php?type=call&phone='.$phone_number.'&url='.$urlmessage.'',
    ]);
    // Send the request & save response to $resp
    $resp = curl_exec($curl);
    // Close request to clear up some resources
    curl_close($curl);
  }
}
?>