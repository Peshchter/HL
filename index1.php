<!doctype html>
<?php
$lang = "ru";
$title = "Главная страница";
$today = getdate();


$result = $_REQUEST['result']?? null;
$first = $_REQUEST['first']?? null;
$second = $_REQUEST['second']?? null;
$operation = $_REQUEST['operation']?? null;

?>

<html lang= <?=$lang?>>
<head>
	<meta charset="UTF-8">
	<title> <?=$title?> </title>
	<link rel="stylesheet" 
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	crossorigin="anonymous">

</head>

<body style="display: flex; flex-direction: column; justify-content: space-beetwen; height: calc(100vh-20px);">
	<main style="display: flex; flex-direction: column; justify-content: center; 
	align-items: center; height: 30vh;">
<p> На дворе <?= date('Y') ?> год. </p>
</main>
</html>
