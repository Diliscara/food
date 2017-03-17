<?php 
session_start(); 
$_SESSION['pagename'] = "form_index";
//include 'db/db.php';
 //include 'db/error.php'; 
//include 'db/pushhits.php';

?> 

<html>
	<head>
	<title> Form Input </title>
	<link rel="stylesheet" href="css/food_body.css"></link>
<style>
	body {
	margin: 0;
	padding: 0;
	background-color: #ffffff;
	color: #996633;
	font-family: "Arial", "sans-serif";
	color: #700070;
	font-size: 14px;
}
pre {
	margin: 0;
	padding: 0;
	font-family: "Arial", "sans-serif";
	color: #000000;
	font-size: 14px;
}

#content{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #330099;
	background-color:white;	
position:absolute;
left:350px;
top:100px;
}


</style>


</head>

<body>
<div id = "content">

<?php  
if(isset($_POST['submit'])){
	$number_input = 	$_POST['number'];
	$name_input = 	$_POST['name'];
	$food_input = $_POST['food'];
	$four_input = $_POST['four'];
	$five_input = $_POST['five'];
	$six_input = $_POST['six'];
	$comments_input = $_POST['comments'];
	}
	
	echo "$number_input <br />";
	echo "$name_input <br />";
	echo "$food_input <br />";
	echo "$four_input <br />";
	echo "$five_input <br />";
	echo "$six_input <br />";
	echo "$comments_input <br />";
?>


<form action="#" method="post">
	Number<input type="text" name="number" maxlength="64"> <br />
	Name<input type="text" name="name" maxlength="64"> <br />
	Food Type  
		<select name="food">
		<option value="APPLES">APPLES</option>
		<option value="BANANNAS">BANANNAS</option>
		<option value="LETTUCE">LETTUCE</option>
		<option value="POTATOES">POTATOES</option>
		<option value="CORN">CORN</option>
		</select>
		<br />
	Input Four <input type="text" name="four" maxlength="64"> <br />
	Input Five  <input type="text" name="five" maxlength="64"> <br />
	Input Six  <input type="text" name="six" maxlength="64"> <br />
	Comments    <textarea rows="4" cols="50" name="comments" >Type comments or remove this this text.</textarea>

<input type="submit" name="submit" value="Submit" />


</form>



</div>
</body>
</html>
