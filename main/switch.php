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
                <h3>PHP Switch Statment</h3>
                <p>
                The switch statement is used to perform different actions based on different conditions.
                <br>
                Use the switch statement to select one of many blocks of code to be executed.
                </p>
                <h3>Syntax</h3>
                <textarea  cols="80" rows="10">
                switch (n) {
                case label1:
                    code to be executed if n=label1;
                    break;
                case label2:
                    code to be executed if n=label2;
                    break;
                case label3:
                    code to be executed if n=label3;
                    break;
                    ...
                default:
                    code to be executed if n is different from all labels;
                }
                </textarea>
                <br>
                <br>
                <p>
                This is how it works: First we have a single expression n (most often a variable), that is evaluated once.
                 The value of the expression is then compared with the values for each case in the structure. If there is a 
                 match, the block of code associated with that case is executed. Use break to prevent the code from running into the next case automatically. 
                The default statement is used if no match is found.
                </p>

                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Example
                </div>
                <div class="card-body">
                    <textarea  cols="80" rows="10">
                    $favcolor = "red";

                    switch ($favcolor) {
                    case "red":
                        echo "Your favorite color is red!";
                        break;
                    case "blue":
                        echo "Your favorite color is blue!";
                        break;
                    case "green":
                        echo "Your favorite color is green!";
                        break;
                    default:
                        echo "Your favorite color is neither red, blue, nor green!";
                    }
                    </textarea>
                <form action="" method="POST">
                            <input type="submit" name="sub3" value="Test Yourself" class="btn btn-success mt-2">
                    </form>
                        <?php

                        if(isset($_POST['sub3'])){
                            echo strlen("Hello world!"); 
                        }
                        ?>
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