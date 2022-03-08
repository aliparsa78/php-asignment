<?php
@include('inc/header.php')
?>
    <div class="row">
        <div class="col-md-2">
            <!-- MENU SIDEBAR-->
            <?php
            @include('inc/sidebar.php')
            ?>
        </div>
        <div class="col-md-10">
         
    <div class="container">
       <div class="main-content">
            <div class="card card-shadow mt-2 mb-5">
                <div class="car-body mt-4 ml-4 mb-4">
                    <h2>PHP Echo and Print Statements</h2>
                    <p>With PHP, there are two basic ways to get output: <i class="text-danger">echo</i> and <i class="text-danger">print</i>.</p>
                    <p>
                    The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.
                    </p>
                    <h2>The PHP echo Statement</h2>
                    <p>The echo statement can be used with or without parentheses: echo or echo().</p>
                    <h5>Display the text</h5>
                    <p>The following example shows how to output text with the echo command (notice that the text can contain HTML markup):</p>

                    <textarea cols="80" rows="7">
                    < ?php
                        echo "<h2>PHP is Fun!</h2>";
                        echo "Hello world!<br>";
                        echo "I'm about to learn PHP!<br>";
                        echo "This ", "string ", "was ", "made ", "with multiple parameters.";
                        ?>
                    </textarea>
                    <form action="" method="POST">
                        <input type="submit" name="sub3" value="TEST Yourself" class="btn btn-success mt-2">
                    </form>
                    <?php
                        if(isset($_POST['sub3'])){
                            echo "<h2>PHP is Fun!</h2>";
                            echo "Hello world!<br>";
                            echo "I'm about to learn PHP!<br>";
                            echo "This ", "string ", "was ", "made ", "with multiple parameters.";
                        }
                    ?>
                    <h2>The PHP print Statement</h2>
                    <p>The print statement can be used with or without parentheses: print or print().</p>
                    <div class="card">
                        <div class="card-header">example</div>
                        <div class="card-body">
                            <textarea  cols="80" rows="7">
                                < ?php
                                print "<h2>PHP is Fun!</h2>";
                                print "Hello world!<br>";
                                print "I'm about to learn PHP!";
                                ?>
                            </textarea>
                    <form action="" method="POST">
                        <input type="submit" name="sub4" value="TEST Yourself" class="btn btn-success mt-2">
                    </form>
                    <?php
                        if(isset($_POST['sub4'])){
                            print "<h2>PHP is Fun!</h2>";
                            print "Hello world!<br>";
                            print "I'm about to learn PHP!";
                        }
                    ?>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
        </div>
    </div>
    <!-- Footer go here -->
    <?php  @include("../layouts/inc/footer.php") ?>
     <script src="../assets/js/bootstrap.min.js"></script>
     <script src="../assets/js/jquery.min.js"></script>
</body>
</html>