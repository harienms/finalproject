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

<h1 align="left">USER TASK</h1>
<br>


<?php
//this is how you print something  $data contains the record that was selected on the table.

print utility\htmlTable::generateTableFromOneRecord($data);

?>

    <h2><a href="index.php?page=tasks&action=edit&id=<?php echo $data->id; ?>">Update Task</a></h2>

    <br>

    <form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form2">
        <button type="submit" form="form2" value="delete">Delete Task</button>
    </form>

    <br>

    <h2><label><a href="index.php">Logout</a></label>

        <script src="js/scripts.js"></script>
</body>
</html>