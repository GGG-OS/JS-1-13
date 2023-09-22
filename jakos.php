<!DOCTYPE html>
<html lang="en">
<head>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fuggles&display=swap" rel="stylesheet"> 

    <meta charset="UTF-8">
    <link rel="stylesheet" href="tabela.css">
    <title>tabela</title>
</head>
<body>
    




<div> 
 



<?php
$con = new mysqli("127.0.0.1","root","","jakos");
 
$q="SELECT * FROM bedzie";




if($wynik=$con->query($q))
while($row=$wynik->fetch_array())
echo $row["lp"] . ";" .$row["nazwa"] . ";" .$row["cena"] . ";" .$row["opis"] . ";  <br/>";
else
echo $con->errno . " " . $con->error;




?>
</p>
</div>

</body>
</html>