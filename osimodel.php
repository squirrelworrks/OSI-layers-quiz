<?php
ob_start()
?>

<html>


<head>
	<meta charset="utf-8">
	<title>osi model</title>
</head>


<body>
<h3>OSI Model</h3>
<h4>Choose the correct sequence of layers</h4>


<?php
$missing=0;
if(isset($_POST['submit']))
{


$valid=true;

$layer1 = htmlspecialchars($_POST['layer1name']);
if(empty($layer1)){
//echo "no layer 1 selected ";
$missing ++;
$valid = false;
}

$layer2 = htmlspecialchars($_POST['layer2name']);
if(empty($layer2)){
//echo "no layer 2 selected ";
$missing ++;
$valid = false;
}


$layer3 = htmlspecialchars($_POST['layer3name']);
if(empty($layer3)){
//echo "no layer 3 selected ";
$missing ++;
$valid = false;
}


$layer4 = htmlspecialchars($_POST['layer4name']);
if(empty($layer4)){
//echo "no layer 4 selected ";
$missing ++;
$valid = false;
}

$layer5 = htmlspecialchars($_POST['layer5name']);
if(empty($layer5)){
//echo "no layer 5 selected ";
$missing ++;
$valid = false;
}

$layer6 = htmlspecialchars($_POST['layer6name']);
if(empty($layer6)){
//echo "no layer 6 selected ";
$missing ++;
$valid = false;
}

$layer7 = htmlspecialchars($_POST['layer7name']);
if(empty($layer7)){
//echo "no layer 7 selected ";
$missing ++;
$valid = false;


echo "you are missing " . $missing . " layers!";
$missing=0;

}


if($valid){
header("Location:osimodel-2.php?header1var=$layer1&header2var=$layer2&header3var=$layer3&header4var=$layer4&header5var=$layer5&header6var=$layer6&header7var=$layer7");
exit();
}


}//end POST SUBMIT




else
{
$layer1="";
$layer2="";
$layer3="";
$layer4="";
$layer5="";
$layer6="";
$layer7="";
}

?>

<form method="post" action="osimodel.php">




<label for="layer1name">1</label>
<select name="layer1name" >
<option value=""></option>
<option value="Application"<?php if ($layer1=="Application"){echo "selected";}?>>Application</option>
<option value="Data Link"<?php if ($layer1=="Data Link"){echo "selected";}?>>Data Link</option>
<option value="Network"<?php if ($layer1=="Network"){echo "selected";}?>>Network</option>
<option value="Physical"<?php if ($layer1=="Physical"){echo "selected";}?>>Physical</option>
<option value="Presentation"<?php if ($layer1=="Presentation"){echo "selected";}?>>Presentation</option>
<option value="Session"<?php if ($layer1=="Session"){echo "selected";}?>>Session</option>
<option value="Transport"<?php if ($layer1=="Transport"){echo "selected";}?>>Transport</option>
</select>

<br>

<label for="layer2">2</label>
<select name="layer2name" >
<option value=""></option>
<option value="Application"<?php if ($layer2=="Application"){echo "selected";}?>>Application</option>
<option value="Data Link"<?php if ($layer2=="Data Link"){echo "selected";}?>>Data Link</option>
<option value="Network"<?php if ($layer2=="Network"){echo "selected";}?>>Network</option>
<option value="Physical"<?php if ($layer2=="Physical"){echo "selected";}?>>Physical</option>
<option value="Presentation"<?php if ($layer2=="Presentation"){echo "selected";}?>>Presentation</option>
<option value="Session"<?php if ($layer2=="Session"){echo "selected";}?>>Session</option>
<option value="Transport"<?php if ($layer2=="Transport"){echo "selected";}?>>Transport</option>
</select>
</select>

<br>

<label for="layer3">3</label>
<select name="layer3name">
<option value=""></option>
<option value="Application"<?php if ($layer3=="Application"){echo "selected";}?>>Application</option>
<option value="Data Link"<?php if ($layer3=="Data Link"){echo "selected";}?>>Data Link</option>
<option value="Network"<?php if ($layer3=="Network"){echo "selected";}?>>Network</option>
<option value="Physical"<?php if ($layer3=="Physical"){echo "selected";}?>>Physical</option>
<option value="Presentation"<?php if ($layer3=="Presentation"){echo "selected";}?>>Presentation</option>
<option value="Session"<?php if ($layer3=="Session"){echo "selected";}?>>Session</option>
<option value="Transport"<?php if ($layer3=="Transport"){echo "selected";}?>>Transport</option>
</select>

<br>

<label for="layer4">4</label>
<select name="layer4name">
<option value=""></option>
<option value="Application"<?php if ($layer4=="Application"){echo "selected";}?>>Application</option>
<option value="Data Link"<?php if ($layer4=="Data Link"){echo "selected";}?>>Data Link</option>
<option value="Network"<?php if ($layer4=="Network"){echo "selected";}?>>Network</option>
<option value="Physical"<?php if ($layer4=="Physical"){echo "selected";}?>>Physical</option>
<option value="Presentation"<?php if ($layer4=="Presentation"){echo "selected";}?>>Presentation</option>
<option value="Session"<?php if ($layer4=="Session"){echo "selected";}?>>Session</option>
<option value="Transport"<?php if ($layer4=="Transport"){echo "selected";}?>>Transport</option>
</select>

<br>

<label for="layer5">5</label>
<select name="layer5name">
<option value=""></option>
<option value="Application"<?php if ($layer5=="Application"){echo "selected";}?>>Application</option>
<option value="Data Link"<?php if ($layer5=="Data Link"){echo "selected";}?>>Data Link</option>
<option value="Network"<?php if ($layer5=="Network"){echo "selected";}?>>Network</option>
<option value="Physical"<?php if ($layer5=="Physical"){echo "selected";}?>>Physical</option>
<option value="Presentation"<?php if ($layer5=="Presentation"){echo "selected";}?>>Presentation</option>
<option value="Session"<?php if ($layer5=="Session"){echo "selected";}?>>Session</option>
<option value="Transport"<?php if ($layer5=="Transport"){echo "selected";}?>>Transport</option>
</select>

<br>

<label for="layer6">6</label>
<select name="layer6name">
<option value=""></option>
<option value="Application"<?php if ($layer6=="Application"){echo "selected";}?>>Application</option>
<option value="Data Link"<?php if ($layer6=="Data Link"){echo "selected";}?>>Data Link</option>
<option value="Network"<?php if ($layer6=="Network"){echo "selected";}?>>Network</option>
<option value="Physical"<?php if ($layer6=="Physical"){echo "selected";}?>>Physical</option>
<option value="Presentation"<?php if ($layer6=="Presentation"){echo "selected";}?>>Presentation</option>
<option value="Session"<?php if ($layer6=="Session"){echo "selected";}?>>Session</option>
<option value="Transport"<?php if ($layer6=="Transport"){echo "selected";}?>>Transport</option>
</select>

<br>

<label for="layer7">7</label>
<select name="layer7name">
<option value=""></option>
<option value="Application"<?php if ($layer7=="Application"){echo "selected";}?>>Application</option>
<option value="Data Link"<?php if ($layer7=="Data Link"){echo "selected";}?>>Data Link</option>
<option value="Network"<?php if ($layer7=="Network"){echo "selected";}?>>Network</option>
<option value="Physical"<?php if ($layer7=="Physical"){echo "selected";}?>>Physical</option>
<option value="Presentation"<?php if ($layer7=="Presentation"){echo "selected";}?>>Presentation</option>
<option value="Session"<?php if ($layer7=="Session"){echo "selected";}?>>Session</option>
<option value="Transport"<?php if ($layer7=="Transport"){echo "selected";}?>>Transport</option>>
</select>


<p>
<input type="submit" name="submit" value="submit">
</p>

</form>

<a href="../bootstrap-index.php">home</a>



</body>


</html>