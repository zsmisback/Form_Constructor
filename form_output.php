<?php

include('connect.php');

if(isset($_POST['form']))
{ 
  
  $token = 'sadkjeawhijwajdilhasilfjaehioryweapirjpway9uprpjrpewahjrej23136513123q08192383431';
 $token = str_shuffle($token);
 $token= substr($token,0,10);
 
$nvals = count($_REQUEST['the_name']);
for($i=0;$i<$nvals;$i++)
{
 $form_name = $_REQUEST['form_name'];
 $type = $_POST['int_type'][$i];
 $name = $_POST['the_name'][$i];
 $placeholder = $_POST['the_placeholder'][$i];
 $options = $_POST['the_options'][$i];
 
 $sql = "INSERT INTO form_constructor(form_name,type,name,placeholder,options,common)VALUES('$form_name','$type','$name','$placeholder','$options','$token')";
 $result = $conn->query($sql);
 
 
 
}


  
}


?>