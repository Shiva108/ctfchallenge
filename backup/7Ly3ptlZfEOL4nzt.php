<?php
  include_once('layout/header.php'); // includes header
?>
  <script type="text/javascript" src="ValidateForm2.js"></script>
  <title>Stage 2</title>
</head>
<!-- https://www.base64decode.org/ -->

<body background="images/hacker.png" style="background-repeat: no-repeat; background-position: center;">
  <div class="container">
    <div class="row">
      <div style="margin-top: 5%" align="center">
         <iframe align="center" width="560" height="315" src="https://www.youtube.com/embed/fBRJa0OVl8s?rel=0&amp;controls=0&amp; showinfo=0" frameborder="0" allowfullscreen>
         </iframe>
            <br />
            <br />
            <form name="login" method="POST" onsubmit="return validateForm()">
                User: <input type="text" name="username" />
                <br />
                <br />
                Pass: <input type="password" name="password" />
                <br />
                <br />
                <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                <input type="submit" name="submit" value="Login" />
                <h5 style="color: red;">Both the username and password are case sensitive</h5>
            </form>
      </div>
      <div align="center">
            <p style= "font-size: 10px; position: relative; margin-bottom: 2%; color: white;">VGhlIFVzZXJuYW1lIGFuZCBQYXNzd29yZCBtdXN0IGJlIHN1Ym1pdHRlZCBpbiBNRDUgaGFzaCBmb3JtYXQ=</p>
      </div>
     </div> <!-- End 1st row -->
  </div> <!-- End container -->

<!-- http://md5online.org/ -->
 
<?php
  include_once('layout/footer.php'); // includes footer
?>