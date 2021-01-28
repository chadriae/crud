<?php

// $client_id = 'e87ae82556704878833f932ef31ebe07';
// $client_secret = '05f2147d760a465cb33cc738cda2dadd';

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL,            'https://accounts.spotify.com/api/token');
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_POST,           1);
// curl_setopt($ch, CURLOPT_POSTFIELDS,     'grant_type=client_credentials');
// curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Authorization: Basic ' . base64_encode($client_id . ':' . $client_secret)));

// $result = curl_exec($ch);
// echo $result;

/* Spotify Application Client ID and Secret Key */

$client_id = 'e87ae82556704878833f932ef31ebe07';
$client_secret = '05f2147d760a465cb33cc738cda2dadd';

$album = 'nerveendings';
$artist = 'mindrays';

/* Get Spotify Authorization Token */
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,            'https://accounts.spotify.com/api/token');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST,           1);
curl_setopt($ch, CURLOPT_POSTFIELDS,     'grant_type=client_credentials');
curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Authorization: Basic ' . base64_encode($client_id . ':' . $client_secret)));

$result = curl_exec($ch);
$json = json_decode($result, true);

/* Get Spotify Artist Photo */
echo "<pre>";
exec('curl -i "https://api.spotify.com/v1/search?q=' . $album . '&type=album&q=' . $artist . '&type=artist" -H "Accept: application/json" -H "Authorization: Bearer ' . $json['access_token'] . '" -H "Content-Type: application/json" 2>&1', $pp);
echo implode("\r\n", $pp);
