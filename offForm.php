<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
  <!-- Made by Ferjani Mohamed Yassine -->
	<title>Formulaire & programme</title>
</head>
<style type="text/css">
  .error{ color: red; }
</style>

<body>
  <!-- *******************************************php********************************************************-->
<?php
// define variables and set to empty values
$nameErr = $choiceErr = $genderErr= "";
$Nom = $choice = $gender="";
 $action="offForm.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Nom"])) {
   $nameErr = "Name is required";
   
  } else {
    $Nom = test_input($_POST["Nom"]);
    $action="officialform.php";
  }
  if (empty($_POST["choice"])) {
    $choiceErr = "Choice is required";
   
    
  } else {
    $choice = test_input($_POST["choice"]);
    $action="officialform.php";
  }


  
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
  <!-- ************************************************************************************************************* -->


<!-- *********************************front end of the form ************************** -->

<form  action="<?php echo $action; ?>"  method="post">
<h2>FORUM ENET'Com FEEE 2019,<br>Samedi 30 Novembre 2019</h2>
<p><span class="error" style="color:red;">* required field</span></p>

Nom et Prenom: <span class="error">*</span><br> <input type="text" name="Nom"><br>
<span class="error">* <?php echo $nameErr;?></span>
 

<h4>Durant l'&#233;v&#233;nement vous allez etre present aux : <span class="error">*</span> </h4><br>
<p><span class="error">* <?php echo $choiceErr;?></span></p>

  <input type="checkbox" name="choice" value="Conferences et panel"> Conf&#233;rences et panel<br>
  <input type="checkbox" name="choice" value="Dejeuner"> D&#233;jeuner<br>
  <input type="checkbox" name="choice" value="Workshop"> Workshop<br>




<h4>Dans le cas ou vous allez assister a un workshop, lequel?</h4>
   <input type="radio" name="gender" value="Industrie4.0">Industrie4.0<br>
  <input type="radio" name="gender" value="Basics of Python"> Basics of Python <br>
  <input type="radio" name="gender" value=" Prototyper rapidement avec Metor"> Prototyper rapidement avec Metor <br>
  <input type="radio" name="gender" value="Rebooting AI algorithms: Knowledge Reasoning & Deep Learning"> Rebooting AI algorithms: Knowledge Reasoning & Deep Learning  <br>
  <input type="radio" name="gender" value="Deep Learning & Machine Learning">  Deep Learning & Machine Learning <br>
  <input type="radio" name="gender" value="Internet Of Things (IOT)"> Internet Of Things (IOT)  <br>


<input type="submit" value="submit">
</form>
<!-- ***************************************************end of the form **********************************************-->



</body>
</html>