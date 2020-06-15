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
  
         
  while($row2= $result2->fetch_assoc())
  {
	  
   
 
  echo "<div class='row'>
        <div class='col-md-3'>
        <h6>Input Type:</h6>
        <select id='int_type' name='int_type[]' class='custom-select mb-3'>
		<option value='text'>Text</option>
		<option value='file'>File</option>
		<option value='textarea'>Textarea</option>
		<option value='checkbox'>Checkbox</option>
		<option value='select'>Select</option>
		<option value='submit'>Submit</option>
		</select>
		<h6>Current Type:$row2[type]</h6>
		</div>
		<div class='col-md-3'>
		<h6>Input Name:</h6>
		<input class='form-control mb-4' type='text' name='the_name[]' placeholder='Please enter the name'/>
		<h6>Current Name:$row2[name]</h6>
		</div>
		<div class='col-md-3'>
		<h6>Input Placeholder:</h6>
		<input class='form-control mb-4 place' type='text' name='the_placeholder[]' placeholder='Enter a placeholder'/>
		<h6>Current Placeholder:$row2[placeholder]</h6>
		</div>
		<div class='col-md-3'>
		<h6>Input Options(Select Input type):</h6>
		<input class='form-control mb-4 options' type='text' name='the_options[]' placeholder='Enter the options'/>
		<h6>Current Options:$row2[options]</h6>
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
echo $nvals;
for($i=0;$i<$nvals;$i++)
{
 
 $type = $_POST['int_type'][$i];
 $name = $_POST['the_name'][$i];
 $placeholder = $_POST['the_placeholder'][$i];
 $options = $_POST['the_options'][$i];
 
 $sql = "UPDATE form_constructor SET type = '$type',name = '$name',placeholder = '$placeholder',options = '$options' WHERE common ='$_GET[common]'";

 $result = $conn->query($sql);
 
 
 
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