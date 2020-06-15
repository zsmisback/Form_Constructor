<?php

include ('connect.php');


$sql = "SELECT form_name,common FROM form_constructor GROUP BY form_name";
$result = $conn->query($sql);
	

echo "<form method = 'post'>
      <select id='form' name='form_sel'>";
while($row = $result->fetch_assoc())
{
  echo "
		<option value='$row[common]'>$row[form_name]</option>
		
		       ";

}

echo "</select>
      <input type='submit' name='form'/>
	   </form>";
	  
if(isset($_POST['form']))
{
	$sel = $_POST['form_sel'];
	header("Location:editphp.php?common=$sel");
  
   
 


  

}



?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

</body>
</html>