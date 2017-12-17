<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Crete Task</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>

</head>

<body>

<form action="index.php?page=tasks&action=edit&id=<?php echo $data->id; ?>" method="post">

    <div class="container">
        <section id="content">
            <form action="">
                <h1>Update task</h1>

                <div>
                    <label><b>ID: <?php echo $_GET['id']; ?></b></label><br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                </div><br><br><br>

                <div>
                    <input type="text" name = "createddate" placeholder="Create Date" required="" id="createddate" />
                    &nbsp;&nbsp;&nbsp;&nbsp;
                </div><br><br><br>

                <div>
                    <input type="text" name = "duedate" placeholder="Due Date" required="" id="duedate" />
                    &nbsp;&nbsp;&nbsp;&nbsp;
                </div><br><br><br>
                <div>
                    <input type="text" name = "message" placeholder="Message" required="" id="message" />
                    &nbsp;&nbsp;&nbsp;&nbsp;
                </div><br><br><br>
                <div>
                    <input type="text" name = "isdone" placeholder="IS Done" required="" id="isdone" />
                    &nbsp;&nbsp;&nbsp;&nbsp;
                </div><br><br><br>

                <div>
                    <input type="submit" value="Update" />
                    &nbsp;
                </div>
                <br><br>
            </form><!-- form -->
        </section><!-- content -->
    </div><!-- container -->
</form>


<script src="js/scripts.js"></script>
</body>
</html>
