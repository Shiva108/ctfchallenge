<?php
include_once('layout/header.php'); // includes header
?>
    <script type="text/javascript" src="key.js"></script>
    </head>

    <body>
    <div class="container">
        <div class="row">
            <div class="one column">

            </div>
        </div>
        <div class="row">
            <div class="ten column" style="margin-top: 15%">
                <h2 align="center"> Try My New Search Feature! </h2>
                <table align="center">
                    <tr><td>
                            <form action="stage4.php" method="get">
                                <input type="text" name="search" placeholder="search" />
                                <input type="submit" value="Search" />
                            </form>
                        </td></tr>
                </table>

                <h6 align="center">
                    <?php
                    if(isset($_GET["search"]))
                    {
                        echo "The results of your search for: ".$_GET["search"];
                        echo "<br /><br /> <i>Sorry No Results Found! </i>";
                    }
                    ?>
                </h6><br><br>
                <h6 align="center"> This website was made by Cyberium! I hope you really really like it! </h6>
                <div class="row">
                    <div class="one column">

                    </div>
                </div>
            </div> <!-- End 1st row -->
        </div> <!-- End container -->

<?php
include_once('layout/footer.php'); // includes footer
?>