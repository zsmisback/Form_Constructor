<?php

include ('connect.php');


$sql = "SELECT * FROM form_constructor";
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
	  
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$sel = $_POST['form_sel'];
  $sql2 = "SELECT * FROM form_constructor WHERE common = '$sel'";
  $result2 = $conn->query($sql2);
  
  echo "<div class='container'>
        <form method ='post'>";
         
  while($row2 = $result2->fetch_assoc())
  {
	  if($row2['options'] != "")
	  {   $options = explode(",",$row2['options']);
		  echo "$row2[tables]";
		  foreach($options as $opts)
		  {
		       echo "<option value='$opts'>$opts</option>";
		  }
			   echo "</select>";
	  }
	  else
	  {
	  echo "$row2[tables]";
	  }
  }
        
         echo "</form>
		       </div>";

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