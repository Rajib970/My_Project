<?php
header('Access-Control-Allow-Origin: *');

//starting session
session_start();

// Code to log in the user
  $partner_name ='ptna72';
  $partner_key ='9F70A023-97C8-4F6D-8F38-3CA113A9D2A1';
  $player_name =$_POST['UserName'];
  $player_paswd =$_POST['Password'];
  $pn = $partner_name . $player_name . $player_paswd; 
  $sign=hash('SHA256',strtolower($pn) . time() . strtolower($partner_key));
  $data=['UserName'=>$_POST['UserName'], 'Partner'=>$partner_name, 'Sign'=>$sign, 'TimeStamp'=>time(), 'IP'=>$_SERVER['REMOTE_ADDR']];
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,'http://pauthapi.data333.com/api/partner/login');
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
  $data = json_encode($data);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
  curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
  $result =curl_exec($ch);
  $result = json_decode($result);
  $_SESSION['user_token'] = $result->Token;
  $result = json_encode($result);
  print_r($result);
  curl_close($ch);
?>
