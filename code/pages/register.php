<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Registration Form</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>


<form action="index.php?page=accounts&action=register" method="post">

    <div class="container">
        <section id="content">
            <form action="">
                <h1>Login Form</h1>
                <div>
                    <input type="text" name = "fname" placeholder="First Name" pattern="[A-Za-z]*" title="Enter only characters" required id="username" />
                    &nbsp;&nbsp;&nbsp;&nbsp;
                </div><br><br><br>

                <div>
                    <input type="text" name = "lname" placeholder="Last Name" required="" id="username" />
                    &nbsp;&nbsp;&nbsp;&nbsp;
                </div><br><br><br>
                <div>
                    <input type="email" name = "email" placeholder="Email Address" required="" id="username" />
                    &nbsp;&nbsp;&nbsp;&nbsp;
                </div><br><br><br>
                <div>
                    <input type="number" name = "phone" placeholder="Phone" required="" id="username" />
                    &nbsp;&nbsp;&nbsp;&nbsp;
                </div><br><br><br>

                <div>
                    <input type="text" name = "birthdate" placeholder="BirthDate" required="" id="username" />
                    &nbsp;&nbsp;&nbsp;&nbsp;
                </div><br><br><br>
                <div>
                    <input type="text" name = "gender" placeholder="Gender" required="" id="username" />
                    &nbsp;&nbsp;&nbsp;&nbsp;
                </div><br><br><br>
                <div>
                    <input type="password" name = "password" placeholder="Password" required="" id="password" />
                    &nbsp;&nbsp;&nbsp;&nbsp;
                </div><br><br><br>
                <div>
                    <input type="submit" value="Sign Up" />
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
