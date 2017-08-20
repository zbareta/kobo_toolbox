<?php
$username = "bareta";
$password = "m1nstr3l";
$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_URL, 'https://kobocat.unhcr.org/bareta/forms/a34q37aM3i2GDTcdTs6oWv/api');
curl_setopt($curl, CURLOPT_USERPWD, "$username:$password");
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
$resp = curl_exec($curl);
$array = json_decode($resp,true);
if($errno = curl_errno($curl)) {
$error_message = curl_strerror($errno);
echo "Error ({$errno}):\n {$error_message}";
}
curl_close($curl); 
?>
