<html>
<head>
    
    
</head>

<body>
    
<?php

$si=$_POST["si"];
$t=$_POST["t"];
$a=$_POST["a"];
$vi=$_POST["vi"];

$S=$si+($vi*$t)+($a*$t*$t)/2;

echo "O Espaço Final vale $S ";
?>
<br>
<br>
<a href="cal-exp.html"><h2>Voltar</h2></a>

</body>

</html>