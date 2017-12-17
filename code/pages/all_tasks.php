<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<h1 align="center">Task List</h1>
<br><br>

<h2><a href="index.php?page=tasks&action=create">Insert Record</a></h2>

<br><br>



<?php
//this is how you print something

print utility\htmlTable::genarateTableFromMultiArray($data);


?>

<h2><label><a href="index.php?">LOGOUT</a></label></h2>

<script src="js/scripts.js"></script>
</body>
</html>