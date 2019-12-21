<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
	<!-- Made by Ferjani Mohamed Yassine -->
  <title></title>
</head>
<style type="text/css">
	table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
p{ color: red;
font-style: italic; }
</style>
<body>

<p >Votre réponse a été enregistré avec succés</p>


<!-- *****************************REQUIRED*****php*************************** -->
<?php
// define variables and set to empty values
$nameErr = $choiceErr = $genderErr= "";
$Nom = $choice = $gender= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Nom"])) {
   $nameErr = "Name is required";

  } else {
    $Nom = test_input($_POST["Nom"]);
  }
  if (empty($_POST["choice"])) {
    $choiceErr = "Choice is required";
    
  } else {
    $choice = test_input($_POST["choice"]);
  }


  
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!-- ********************************************************************** -->

<table>
<tr>
	<th>Nom et prenom</th>
	<th>Evenement</th>
	<th>Workshop</th>
</tr>
<tr>
	<th><?php echo$_POST["Nom"] ; ?></th>
	<th><?php echo $_POST["choice"]; ?> </th>
	<th> <?php echo$_POST["gender"] ; ?></th>
	
</tr>
</table> 
</body>
</html>

