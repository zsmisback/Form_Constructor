<?php include 'form_output.php'; ?>
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
<body>
<div class="container">
<form method="get">
<input class="form-control mb-4" type="text" name="input_number" placeholder="Enter a number"/>
<button type="submit" id="loginuser" name="act" value="log" class="btn btn-primary btn-block mb-4">Submit</button>
</form>
</div>
<?php
if($_SERVER["REQUEST_METHOD"] == "GET")
{
  $inp_number = $_GET['input_number'];
  echo "<div class='container'>
        <form method ='post'>
		<h3>Form Name:</h3>
        <input type='text' class='form-control mb-4' name='form_name' placeholder='Please enter the form name'/>
		<br><br>";
  
  for($i=1;$i<=$inp_number;$i++)
  {
  echo "<div class='row'>
        <div class='col-md-4'>
        <h3>Input Type:</h3>
        <select id='int_type' name='int_type[]' class='custom-select mb-3'>
		<option value='text'>Text</option>
		<option value='file'>File</option>
		<option value='textbox'>Textbox</option>
		<option value='checkbox'>Checkbox</option>
		<option value='select'>Select</option>
		<option value='submit'>Submit</option>
		</select>
		</div>
		<div class='col-md-4'>
		<h3>Input Name:</h3>
		<input class='form-control mb-4' type='text' name='the_name[]' placeholder='Please enter the name'/>
		</div>
		<div class='col-md-4'>
		<h6>Input Placeholder/Select Options/Checkbox value:</h6>
		<input class='form-control mb-4' type='text' name='the_placeholder[]' placeholder='Enter a placeholder/options/value'/>
		</div>
		<br>
		</div>";
		
  }	
		echo "<button type='submit' id='loginuser' name='form'  class='btn btn-primary btn-block mb-4'>Submit</button>
              </form>
			  </div>";

}
?>
</body>

</html>