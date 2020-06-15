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
	   
if(isset($_POST['form']))
{
	$form_del = $_POST['form_sel'];
	$sql = "DELETE FROM form_constructor WHERE common = '$form_del'";
	$result = $conn->query($sql);
}

?>