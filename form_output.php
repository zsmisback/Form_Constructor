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
 
 if($type == 'file')
 {
     $input = "<input type='$type' name='$name' placeholder='$placeholder'/>";
      $data = $conn->real_escape_string($input);
 }
 elseif($type == 'textbox')
 {
	 $input = "<textarea class='form-control mb-4' rows='5' name='$name' placeholder='$placeholder'></textarea>";
	 $data = $conn->real_escape_string($input);
 }
 elseif($type == 'submit')
 {
	$input = "<button type='submit' class='btn btn-primary mb-4' name='$name'>$placeholder</button>";
	$data = $conn->real_escape_string($input);
 }
 elseif($type == 'checkbox')
 {
	 $input = "<div class='form-check'>
	           <input type='checkbox' class='form-check-input mb-4' name='$name' value='$placeholder'>$placeholder
			   </div>";
	 $data = $conn->real_escape_string($input);
 }
 elseif($type == 'select')
 {
	 $input = "<select class='form-control mb-4' name='$name'>
        
      ";
	 $data = $conn->real_escape_string($input);
	 $options = $placeholder;
 }
 else
 {
	 $input = "<input class='form-control mb-4' type='$type' name='$name' placeholder='$placeholder'/>";
      $data = $conn->real_escape_string($input);
 }
 
 if($type == "select")
 {
	 $sql = "INSERT INTO form_constructor(form_name,tables,common,options)VALUES('$form_name','$data','$token','$placeholder')";
 $result = $conn->query($sql);
 }
 else
 {
 $sql = "INSERT INTO form_constructor(form_name,tables,common)VALUES('$form_name','$data','$token')";
 $result = $conn->query($sql);
 }
 
 
}


  
}


?>