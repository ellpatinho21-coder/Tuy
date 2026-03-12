<?php

$data = [
'key' => '7b71761427d5bc56f4facf4971de3ec3',
'action' => 'balance'
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://morethanpanel.com/api/v2");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>
