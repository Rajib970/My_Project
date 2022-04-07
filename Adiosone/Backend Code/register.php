<?php
header('Access-Control-Allow-Origin: *');

// Code to register new user 
  $partner_name='ptna72';
  $partner_key='9F70A023-97C8-4F6D-8F38-3CA113A9D2A1';
  $sign=hash('SHA256',strtolower($partner_name) . time() . strtolower($partner_key));
  $data=['Partner'=>$partner_name,'Sign'=>$sign,'TimeStamp'=>time(), 'UserName'=>$_POST['UserName'],'Password'=>$_POST['Password'],'Fullname'=>$_POST['Fullname'],'Email'=>$_POST['Email'],'Mobile'=>$_POST['Mobile'],'Gender'=>$_POST['Gender'],'DoB'=>$_POST['DoB'],'Currency'=>$_POST['Currency'],'BankName'=>$_POST['BankName'],'BankAccountNo'=>$_POST['BankAccountNo']];  
  $ch=curl_init();
  curl_setopt($ch, CURLOPT_URL,'http://pauthapi.data333.com/api/partner/register');
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
  $data=json_encode($data);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
  curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
  $result=curl_exec($ch);
  print_r($result);
  curl_close($ch);
  
?>