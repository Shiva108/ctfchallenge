<!DOCTYPE html>
<meta charset="UTF-8">

<html>
    <head>
        <title>Welcome to the 2nd Hacking Challenge!!!</title>
	    <script type="text/javascript" src="../ValidateForm.js"></script>
    </head>

    <body background="../images/hacker.png" style="background-repeat: no-repeat; background-position: bottom-center;">
        <div align="center" style="padding-top: 300px">
            <h1>Find the passphrase to proceed to the next step</h1>
            <form name="myForm" onsubmit="return validateForm()" method="POST">
                <input type="password" name="passphrase" size="100" />
                <br />
                <br />
                <input type="submit" name="submit" value="Submit" />
            </form>

        </div>
    </body>
</html>
            
