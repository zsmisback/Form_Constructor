<?php

include ('connect.php');


$sql = "SELECT DISTINCT form_name,common FROM form_constructor";
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
	  if($row2['type'] == "text")
	  {   
        echo "<input type='text' class='form-control mb-4' name='$row2[name]' placeholder='$row2[placeholder]'>";
	  }
	  if($row2['type'] == "file")
	  {
	    echo "<input class='mb-4' type='file' name='$row2[name]' id='$row2[name]'>";
	  }
	  if($row2['type'] == "textarea")
	  {
	    echo "<textarea class='form-control mb-4' rows='5' name='$row2[name]' placeholder='$row2[placeholder]'></textarea>";
	  }
	  if($row2['type'] == "checkbox")
	  {
	    echo "<div class='form-check'>
		     <input type='checkbox' class='form-check-input mb-4' name='$row2[name]' value='$row2[placeholder]'>$row2[placeholder]
			 </div>";
	  }
	  if($row2['type'] == "select")
	  {
	    echo "<select class='form-control mb-4' name='$row2[name]'>";
		 $options = explode(",",$row2['options']);
		  foreach($options as $opts)
		  {
		       echo "<option value='$opts'>$opts</option>";
		  }
              
          echo "</select>";
	  }
	  if($row2['type'] == "submit")
	  {
	    echo "<button type='submit' class='btn btn-primary' name='$row2[name]' value='$row2[placeholder]'>$row2[placeholder]</button>";
	  }
  }
        
         echo "<button type='submit' class='btn btn-primary'>Submit</button>
		       </form>
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