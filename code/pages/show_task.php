<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<?php
//this is how you print something  $data contains the record that was selected on the table.

print_r($data);
?>

<form action="index.php?page=tasks&action=all" method="post">
    Owner Email: <input type="text" name="owneremail"><br>
    Owner Id: <input type="text" name="ownerid"><br>
    Created date: <input type="text" name="createddate"><br>
    Duedate: <input type="text" name="duedate"><br>
    Birthday: <input type="text" name="birthday"><br>
    Message: <input type="text" name="message"><br>
    Isdone: <input type="password" name="isdone"><br>
    <input type="submit" value="Insert">
</form>

<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>




<script src="js/scripts.js"></script>
</body>
</html>