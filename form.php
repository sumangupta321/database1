<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./form.css">
    <script src="https://smtpjs.com/v3/smtp.js"></script>

</head>

<body>
    <div class="myform" >

        <h1>Book your seat !!!</h1>
        <form id="myform" >
            <div class="form" id="input">
                <label for="name">Name</label>
                <input type="text" id="name"  class="sname" placeholder="enter your name"><br>
                <label for="email">E-mail</label>
                <input type="email" id="email" class="sname" placeholder="enter your name">
           

            <!-- <a href="register.php"></a> -->

                
                <button id="btn" type="submit">Submit</button>
                <div class="succ"></div>
            </div>
        </form>
       
    </div>
    <script>
        function emailSent(e) {
            // console.log('hello');
            // e.preventDefault();

            let name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            // console.log(email.value);

            //  Using SMTPJS for  creating mail
            Email.send({
                SecureToken: "d9a9a94b-7cf6-4543-9273-a61b80e7a9e7",
                To: email.value,
                From: "sumanguptabay20@gmail.com",
                Subject: "About your booking ",
                Body: "Your seat for a movie has been booked, Enjoy your day . thank you!!!"
            }).then(
                message => alert( 'Please check your Email in Spam ...You have booked your  seat for movie  Thank You!!!' )
            );
        }

    </script>
    <script src="./form.js"></script>
    <!-- <script src="./signup.js"></script> -->
    
</body>
</html>