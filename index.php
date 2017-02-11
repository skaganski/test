<?php 
    $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "test";

    $l = mysqli_connect($host, $user, $pass, $db);
    mysqli_query($l, "SET CHARACTER SET UTF8") or
            die("Error, ei saa andmebaasi charsetti seatud");
    
    mysqli_close($l);
?>

<?php echo(phpversion());?>

<head>
<html>
<title>First try</title>
<link rel="stylesheet" type="text/css" href="MyFile.css">
</head>
<body>
	<h1>Hello!</h1> 
	<img src = "http://www.w3schools.com/css/trolltunga.jpg" widht="200" height="40">
	
