<html>
<head>
	<link rel="stylesheet" type="text/css" href="Register.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /> 
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<title>Pasto Felice Resto</title>

	
</head>

<body BACKGROUND="last_09.png" BGCOLOR="#000000" BGPROPERTIES="FIXED">
	
	<div id="container">
	<div id="logo"> 
	<img src="LOGO1_02.png" width= 880px height=250px> 
	</div>
	
	<div id="header">
	<p class="one">
		<b>CALL US NOW!</b><br>
	</p>
	<p class="two">
		@pastofelice<br>09-212-868-461
	</p>
	</div>

	<div id="about"><i><b>Registration Form</b></i></div>

	
	
	<form id="form1" method="post">
	<style>
	table {
		border-collapse: collapse;
		margin: .5em;
		font-size: 11px;
		position: absolute;
		margin-top: 620px;
	}

	td {
		border: 1px black solid;
		padding: 1em;
	}
	</style>
	<?php

	// hostname, username, password
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpw   = '';

	// connect to mysql database
	$dbconn = mysql_connect($dbhost, $dbuser, $dbpw);

	// if could not connect
	if (!$dbconn) {
		die('Could not connect to database.');
	}

	// select database after connecting, create your own database name if you want
	mysql_select_db('pasto_form');

	// check if the form has posted any data
	if (!empty($_POST)) {
		$field1 = $_POST['field1'];
		$field2 = $_POST['field2'];
		$field3 = $_POST['field3'];
		$field4 = $_POST['field4'];
		$field5 = $_POST['field5'];
		$field6 = $_POST['field6'];
		$field7 = $_POST['field7'];

		// insert sql statement
		$insert_sql = "INSERT INTO table_1 (field1, field2, field3, field4, field5, field6, field7) VALUES ('" . $field1 . "', '" . $field2 . "', '" . $field3 . "', '" . $field4 . "', '" . $field5 . "', '" . $field6 . "', '" . $field7 . "');";
		$insert_query = mysql_query($insert_sql, $dbconn);

		if (!$insert_query) {
			die('Could not insert data to database.');
		}
	}

	// sql statement to execute
	// statement: select everything from table named "table_1" base on the field name
	$select_sql = 'SELECT * FROM table_1';

	// returned values after executing sql statement
	$rows = mysql_query($select_sql);

	if (!$rows) {
		die('Could not select rows from table_1');
	}
	
	// print table tag to browser
	echo '<table>';

	while ($row = mysql_fetch_array($rows, MYSQL_ASSOC)) {
		// print table row tag
		echo '<tr>';

		// print each table cell with data inside
		// field1, field2 ... are table field names
		echo '<td>' . $row['field1'] . '</td>';
		echo '<td>' . $row['field2'] . '</td>';
		echo '<td>' . $row['field3'] . '</td>';
		echo '<td>' . $row['field4'] . '</td>';
		echo '<td>' . $row['field5'] . '</td>';
		echo '<td>' . $row['field6'] . '</td>';
		echo '<td>' . $row['field7'] . '</td>';
		
		// print closing tag of table row
		echo '</tr>';
	}

	// print closing table tag to browser
	echo '</table>';

	// close connection to cleanup resources
	mysql_close($dbconn);

	?>
<form method="post">

<font face="Century Gothic" size=3px><br>
<fieldset class="fs"><legend><h4>Personal Information</h4></legend>

First Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="field1"  size=25><br>
<br>Middle Name:&nbsp&nbsp <input type="text" name="field2"  size=25><br>
<br>Last Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="field3"  size=25><br>
<br>Gender&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<input type="radio" name="field4" value="Male"  checked>Male
<input type="radio" name="field4" value="Female" >Female
<br>
<br>

</fieldset>
<br><fieldset class="fs"><legend><h4>Contact Information</h4></legend>
Contact No.&nbsp: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp+63 <input type="text" name="field5"  maxlength=11  size=19 onKeyUp="this.value=this.value.replace(/[^0-9. -]/g,'')">
<br>
<br>Home Address:&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="field6"  size=25>
<br>
<br>Email Address:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="field7"  size=25>
<br><br>
<div>
	Picture: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="file" id="image-input">
</div>

<br>
</fieldset>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 

<br>

&nbsp&nbsp <input type="submit" />
<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 


</font>	
</form>
</form>

<div>
    <img id="image-container" />
</div>	


	<div id = "box">
		<ul>
		<li><a href="PastoFelice.html">HOME</a>
		<li><a href="Services.html">SERVICES</a>
		<li><a href="Dishes.html">DISHES</a>
		<li><a href="About.html">ABOUT US</a>
		<li><a href="Gallery.html">GALLERY</a>
		</ul>
	</div>
	
	<div id="footer">
	<p> Pasto Felice Resto &copy; Copyright 2015</p>
	</div>

	<div id="bg"></div>
</div>




</body>

</html>