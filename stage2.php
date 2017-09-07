<?php
    session_start();
    $_SESSION['user_name'] = 'guest';
?>

<!DOCTYPE html>
<meta charset="UTF-8">
<html>
    <head>
        <script type="text/javascript">
            function AlertBox() {
                alert("You successfully unlocked the second stage of the challenge");
            }
            window.onload = AlertBox();
        </script>

        <script type="text/javascript" src="ValidateForm2.js"></script>
        <title>Stage 2</title>
    </head>

    <!-- https://www.base64decode.org/ -->

    <body>
        <div align="center" style="padding-top: 100px">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/fBRJa0OVl8s?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            <br />
            <br />
            <form name="login" method="POST" onsubmit="return validateForm()">
                User: <input type="text" name="username" />
                <br />
                <br />
                Pass: <input type="password" name="password" />
                <br />
                <br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" name="submit" value="Login" />
                <h3 style="color: red;">Both the username and password are case sensitive</h3>
            </form>
        </div>
        <div align="center">
            <p style="font-size: 10px; position: absolute; bottom: 20px; color: white;">VGhlIFVzZXJuYW1lIGFuZCBQYXNzd29yZCBtdXN0IGJlIHN1Ym1pdHRlZCBpbiBNRDUgaGFzaCBmb3JtYXQ=</p>
        </div>
    </body>

    <!-- http://md5online.org/ -->
</html>
