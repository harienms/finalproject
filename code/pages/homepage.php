<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Home Page</title>

    <!--[if lt IE 9]>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>-->

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <![endif]-->
</head>

    <form action="index.php?page=tasks&action=login" method="post">

    <div class="container">
        <section id="content">
            <form action="">
                <h1>Login Form</h1>
                <div>
                    <input type="text" name = "email" placeholder="Username" required="" id="username" />
                    &nbsp;&nbsp;&nbsp;&nbsp;
                </div><br><br><br>
                <div>
                    <input type="password" name = "password" placeholder="Password" required="" id="password" />
                    &nbsp;&nbsp;&nbsp;&nbsp;
                </div><br><br><br>
                <div>
                    <input type="submit" value="Log in" />
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="index.php?page=accounts&action=register">Register</a>
                </div>
                <br><br>
            </form><!-- form -->
        </section><!-- content -->
    </div><!-- container -->

</form>
<!--<h1><a href="index.php?page=accounts&action=register">Register</a></h1>-->
<!--<script src="js/scripts.js"></script>-->
<script  src="js/index.js"></script>

</body>
</html>