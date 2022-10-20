<?php
//declare(strict_types=1);

var_dump($_POST);
// SI $_POST['sub'] existe (ou ne vaut pas NULL)
if(isset($_POST['sub'])){

	// conversion des variables
	$num1= (float) $_POST['n1'];
	$num2= (float) $_POST['n2'];
	$oprnd=$_POST['sub'];


	if($oprnd=="+")
		$ans=$num1+$num2;
	else if($oprnd=="-")
		$ans=$num1-$num2;
	else if($oprnd=="x")
		$ans=$num1*$num2;
	else if($oprnd=="/")
		$ans=$num1/$num2;
}?>
<html>
<head>
	
	</style>
</head>
<body>


<form method="post" action="">
<h1>Calculatrice</h1>
<br>
<input name="n1" value="">

<input type="submit" name="sub" value="+">
<input type="submit" name="sub" value="-">
<input type="submit" name="sub" value="x">
<input type="submit" name="sub" value="/">
<input name="n2" value="">
<br>


<br>Resultat: <input type='text' value="<?php if(isset($ans)) echo $ans; ?>"><br>
</form>

</body>
</html>