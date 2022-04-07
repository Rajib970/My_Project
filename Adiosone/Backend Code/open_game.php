<?php
header('Access-Control-Allow-Origin: *');

// including file for getting browser name
include('browser_name.php');

//starting session
session_start();

// Code to open the Game
$vendor = $_POST['game'];
$device = '';
$browser = getBrowser();
$language = $_POST['language'];
$gameCode = '';
$gameHall = ($vendor == 'CQ9')? 'CQ9' : ''; 
$merchantCode = ($vendor == 'PT')? 'PT' : '';
$ticket = ($vendor == 'MX')? 'MX' : '';
$seatId = ($vendor == 'LS')? 'LS' : '';
$tag = '';
$gameProvider = '';
$token = $_SESSION['user_token'];

$data = ['Vendor'=>$vendor,'Device'=>$device,'Browser'=>$browser,'GameCode'=>$gameCode,'GameHall'=>$gameHall,'Lang'=>$language,'MerchantCode'=>$merchantCode,'Ticket'=>$ticket,'SeatId'=>$seatId,'Tag'=>$tag,'GameProvider'=>$gameProvider];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'http://opengameapi.data333.com/api/play/login');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$data = json_encode($data);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
$headers = array(
  'Content-Type:application/json',
  'Authorization:'.'Bearer '.$token,
  'Referer: http://119.81.200.187/sport'
);
curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
  // curl_setopt($ch, CURLOPT_REFERER, 'http://119.81.200.187/sport');
$result = curl_exec($ch);
print_r($result);
curl_close($ch);
?>