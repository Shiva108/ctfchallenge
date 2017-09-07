<?php
  include_once('layout/header.php'); // includes header
?>
  <script type="text/javascript" src="ValidateForm.js"></script>
</head>

<body background="images/hacker.png" style="background-repeat: no-repeat; background-position: center;">
  <div class="container">
    <div class="row">
      <div class="one-half column .u-pull-left" style="margin-top: 15%">
         <h6><strong>Find the passphrase to proceed to the next step</strong></h6>
      <div class="row">
        <div class="six columns">
          <form name="myForm" onsubmit="return validateForm()" method="POST" >
            <input type="password" name="passphrase" size="100%" />
              <br />
              <br />
            <input type="submit" name="submit" value="Submit" />
          </form>
        </div> <!-- End columns -->
      </div> <!-- End row      -->
     </div> <!-- End 1st row -->
  </div> <!-- End container -->
 
 <?php
  include_once('layout/footer.php'); // includes footer
?>