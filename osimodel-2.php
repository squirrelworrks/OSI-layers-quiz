<?php
ob_start()
?>

<html>


<head>
	<meta charset="utf-8">
	<title>osi model</title>


<style>
/*id selector*/
#correct{
color:green;
}


#incorrect{
color:red;
}


body{
/*color: #fff;*/
font-family: system-ui;
text-align:center;
}

#content{
display:grid;
grid-template-columns:repeat(7,1fr);
grid-auto-rows: minmax(100px,auto);
grid-gap:1px;
max-width: 1010px;
margin: 0 auto;
position:relative;
}

#content > *{
/*background: #3bbced;*/
padding:30px;
}

header{
grid-column:1/8;
}

#q1{
grid-column:1/2;
grid-row:3/3;

text-align:center;

vertical-align:top;

}

#q1result{
grid-column:1/2;
grid-row:2/2;
align-items:start; 

}

#q2{
grid-column:2/3;
grid-row:3/3;
}

#q2result{
grid-column:2/3;
grid-row:2/2;
}

#q3{
grid-column:3/4;
grid-row:3/3;
}

#q3result{
grid-column:3/4;
grid-row:2/2;
}

#q4{
grid-column:4/5;
grid-row:3/3;2;
}

#q4result{
grid-column:4/5;
grid-row:2/2;
}

#q5{
grid-column:5/6;
grid-row:3/3;
}

#q5result{
grid-column:5/6;
grid-row:2/2;
}

#q6{
grid-column:6/7;
grid-row:3/3;
}

#q6result{
grid-column:6/7;
grid-row:2/2;
}

#q7{
grid-column:7/8;
grid-row:3/3;
}

#q7result{
grid-column:7/8;
grid-row:2/2;
}

main{
grid-column:4/8;
grid-row:2/4;
}

aside{
grid-column:1/4;
}

section{
grid-column:1/13;
grid-row:4/6;
}

nav{
grid-column:1/4;
}


#foot{
grid-column:3/6;
grid-row:4/5;
}

#foot p{
font-size:300%;
}



</style>


</head>







































<body>




<div id="content">

<header >
<h3>RESULTS</h3>
</header>

<?php 

$correct1="Application";
$correct2="Presentation";
$correct3="Session";
$correct4="Transport";
$correct5="Network";
$correct6="Data Link";
$correct7="Physical";
$countincorrect=0;
?>

<div id="q1">
<?php
$layer1 = $_GET['header1var'];
echo "<b>$layer1</b>" . " layer 1 ";
?>
</div>

<div id="q1result">
<?php
if($layer1 == $correct1){
echo "<p id='correct'>correct </p>";
}
else{
echo "<p id='incorrect'>incorrect </p>";
$countincorrect++;
}
?>
</div>


<div id="q2">
<?php
$layer2 = $_GET['header2var'];
echo "<b>$layer2</b>" . " layer 2 ";
?>
</div>
<div id="q2result">
<?php
if($layer2 == $correct2){
echo "<p id='correct'>correct </p>";
}
else{
echo "<p id='incorrect'>incorrect </p>";
$countincorrect++;
}
?>
</div>


<div id="q3">
<?php
$layer3 = $_GET['header3var'];
echo "<b>$layer3</b>" . " layer 3 ";
?>
</div>
<div id="q3result">
<?php
if($layer3 == $correct3){
echo "<p id='correct'>correct </p>";
}
else{
echo "<p id='incorrect'>incorrect </p>";
$countincorrect++;
}
?>
</div>


<div  id="q4">
<?php
$layer4 = $_GET['header4var'];
echo "<b>$layer4</b>" . " layer 4 ";
?>
</div>
<div id="q4result">
<?php
if($layer4 == $correct4){
echo "<p id='correct'>correct </p>";
}
else{
echo "<p id='incorrect'>incorrect </p>";
$countincorrect++;
}
?>
</div>


<div  id="q5">
<?php
$layer5 = $_GET['header5var'];
echo "<b>$layer5</b>" . " layer 5";
?>
</div>
<div id="q5result">
<?php
if($layer5 == $correct5){
echo "<p id='correct'>correct </p>";
}
else{
echo "<p id='incorrect'>incorrect </p>";
$countincorrect++;
}
?>
</div>


<div  id="q6">
<?php
$layer6 = $_GET['header6var'];
echo "<b>$layer6</b>" . " layer 6 ";
?>
</div>
<div id="q6result">
<?php
if($layer6 == $correct6){
echo "<p id='correct'>correct </p>";
}
else{
echo "<p id='incorrect'>incorrect </p>";
$countincorrect++;
}
?>
</div>


<div  id="q7">
<?php
$layer7 = $_GET['header7var'];
echo "<b>$layer7</b>" . " layer 7 ";
?>
</div>
<div id="q7result">
<?php
if($layer7 == $correct7){
echo "<p id='correct'>correct </p>";
}
else{
echo "<p id='incorrect'>incorrect </p>";
$countincorrect++;
}
?>
</div>


<div id="foot">

<?php 
if ($countincorrect == 0){
echo "<p>WELL DONE!</p>";
}

?>
</div>





</div><!--end content div--->

<div>
<a href="osimodel.php">back to test</a>
</div>

</body>

</html>

