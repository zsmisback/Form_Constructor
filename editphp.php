<?php

include ('connect.php');


$sql2 = "SELECT * FROM form_constructor WHERE common = '$_GET[common]'";
  $result2 = $conn->query($sql2);
if(!$result2)
{
	echo "error";
}
 echo "<div class='container'>
        <form method ='post'>
		
		<br><br>";
		
		$loopcount = 0;
  
         
  while($row2= $result2->fetch_assoc())
  {   
      if($loopcount == 0){
		echo '<input type="hidden" name="form_names" value="'.$row2['form_name'].'">';
	}	  
 
  echo "<div class='row'>
        <div class='col-md-3'>
        <h6>Input Type:</h6>
        <select id='int_type' name='int_type[]' class='custom-select mb-3'>
		<option value='".$row2["type"]."'>".$row2["type"]."</option>
		<option value='text'>Text</option>
		<option value='file'>File</option>
		<option value='textarea'>Textarea</option>
		<option value='checkbox'>Checkbox</option>
		<option value='select'>Select</option>
		<option value='submit'>Submit</option>
		</select>		
		</div>
		<div class='col-md-3'>
		<h6>Input Name:</h6>
		<input class='form-control mb-4' type='text' name='the_name[]' placeholder='Please enter the name' value='".$row2["name"]."'/>		
		</div>
		<div class='col-md-3'>
		<h6>Input Placeholder:</h6>
		<input class='form-control mb-4 place' type='text' name='the_placeholder[]' placeholder='Enter a placeholder' value='".$row2["placeholder"]."' />
		</div>
		<div class='col-md-3'>
		<h6>Input Options(Select Input type):</h6>
		<input class='form-control mb-4 options' type='text' name='the_options[]' placeholder='Enter the options' value='".$row2["options"]."' />		
		</div>
		<br>
		</div>";
		
  
		

}
         echo "<button type='submit' id='loginuser' name='form_edit'  class='btn btn-primary btn-block mb-4'>Submit</button>
              </form>
			  </div>";	  



if(isset($_POST['form_edit']))
{
	 
  
  $token = 'sadkjeawhijwajdilhasilfjaehioryweapirjpway9uprpjrpewahjrej23136513123q08192383431';
 $token = str_shuffle($token);
 $token= substr($token,0,10);
 
$nvals = count($_REQUEST['the_name']);
 $nvals;
for($i=0;$i<$nvals;$i++)
{
 
 $type = $_POST['int_type'][$i];
 $name = $_POST['the_name'][$i];
 $placeholder = $_POST['the_placeholder'][$i];
 $options = $_POST['the_options'][$i];
 $form_name = $_POST['form_names'];
 $sql = "DELETE FROM form_constructor WHERE common = '$_GET[common]'";
  $result = $conn->query($sql);
  $sql2 = "INSERT INTO form_constructor(form_name,type,name,placeholder,options,common)VALUES('$form_name','$type','$name','$placeholder','$options','$token')";
  $result2 = $conn->query($sql2);
  header("Location:form_real_output.php");
 
}

}

?>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
</html>