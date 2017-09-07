<?php
session_start();
// print_r($_SESSION);
include_once('layout/header.php'); // includes header
include_once('backend/connect.php')
?>
    <div class="row">
        <div class="one column"></div>
        <div class="ten column">

            <?php

            if( !isset($_SESSION['user_name']) ) {
                die( "Login required." );

            }
            else {
                echo "<br> You are logged in as: '".$_SESSION['user_name']."' ";
                echo "<hr>";
                $user_name = $_SESSION['user_name'];
                $hashedPassword = md5('1234'); // hashes the password
                $query="SELECT * FROM user_name WHERE user_name = '".$user_name."' AND password = '".$hashedPassword."'"; //sql query
                $conn->close();

                $conn = new mysqli($servername, $username, $password, $dbname);
                $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

                if($_SERVER['REQUEST_METHOD'] == "POST") {
                    $query="UPDATE `user_name` SET 
      `user_name` ='".$_SESSION['user_name']."'
      WHERE `user_name`.`user_name` = '".$_SESSION['user_name']."'";
                    mysqli_query($conn, $query) or die(mysqli_error($conn));
                    echo "<br> Update Success";
                    $_SESSION['user_name'] = 'admin';

                }
                else {
                    if(strcmp($_SESSION['user_name'],'admin')==0) {
                        echo "<b>Welcome admin</b><br><hr>";
                        echo "<strong>List of user's are:</strong> <br>";
                        $query = "SELECT * FROM user_name WHERE user_name!='admin' ";
                        $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
                        while($row=mysqli_fetch_assoc($res)) {
                            echo  '"'.$row["user_name"].'"';
                            echo "<br>";
                            echo "<br>";
                        }
                        // echo "Your CTF flag for completion: ";
                        // echo rand(1,100000000);
                        echo "<br>";
                        // $bytes = random_bytes(12);
                        // var_dump(bin2hex($bytes));
                        echo "<a class=\"button button-primary \" href=\"2M3Pq4zCf3Px.php\">Click to continue to next level</a>";
                    }
                    else {
                        echo "<h5>Very small social media site - hack to become admin</h5>";
                        echo "<hr>";
                        echo "<p>";
                        echo "<form name=\"tgs\" id=\"tgs\" method=\"post\" action=\"r0WaWNnc80r4xpXm.php\">";
                        echo "Update display name:<input type=\"text\" id=\"disp_name\" name=\"disp_name\" value=\"\">";
                        echo " ";
                        echo "<input type=\"submit\" value=\"Update\">";
                        echo "</p>";


                    }
                }
            }
            ?>


        </div>
    </div>
    <div class="one column">

    </div>

<?PHP
$conn->close();
?>