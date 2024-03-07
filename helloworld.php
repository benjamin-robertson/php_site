<?php
echo '<h1>Todays Doge is</h1>';

// $url = 'https://dog.ceo/api/breeds/image/random'
$curl = curl_init('https://dog.ceo/api/breeds/image/random');

curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HEADER, 0);
// curl_setopt($curl, CURLOPT_URL, $url);

$result = curl_exec($curl);

$hash = json_decode($result);
// echo var_dump($hash);
echo $hash->message;

echo <img src=$hash->message alt="todays doge">;
?>