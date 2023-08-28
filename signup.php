<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
    <link rel="stylesheet" href="./signup.css">
</head>

<body>
    <div class="container">
        <div class="main">
            <h1>SignUp</h1>

            <form id="myform" class="form" action="register.php" method="post">
                <div class="test">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="enter your name">
                </div>
                <div class="test">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="enter your username">
                </div>
                <div class="test">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="mailto@gmail.com">
                </div>
                <div class="test">
                    <label for="password">Password</label>
                    <input type="text" id="password" name="password" placeholder="enter your password">
                </div>
                <button type="submit" id="submitButton"  class="btn" >SignUp </button>
            </form>
        </div>
        <p>Already a member ?<a href="./form.php">login</a> </p>
    </div>
    <script src="./signup.js"></script>
</body>

</html>