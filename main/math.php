<?php
@include('inc/header.php')
?>
    <div class="row">
        <div class="col-md-2">
            <!-- MENU SIDEBAR-->
            <?php
            @include('inc/sidebar.php')
            ?>
            <!-- End siderbar -->
        </div>
        <div class="col-md-10">
         
    <div class="container">
       <div class="main-content">
            <div class="card card-shadow mt-2 mb-5">
                <div class="car-body mt-4 ml-4 mb-4">
                <h3>PHP Math</h3>
                <p>PHP has a set of math functions that allows you to perform mathematical tasks on numbers.</p>
                <h3>PHP pi() Function</h3>
                <p>The pi() function returns the value of PI:</p>
                <h3>PHP min() and max() Functions</h3>
                <p>The min() and max() functions can be used to find the lowest or highest value in a list of arguments:</p>
                <div class="card">
                    <div class="card-header">
                    Example <br>
                    Check if the type of a variable is integer:
                    </div>
                    <div class="card-body">
                    <textarea  cols="80" rows="7">
                    < ?php
                    echo(min(0, 150, 30, 20, -8, -200));  // returns -200
                    echo(max(0, 150, 30, 20, -8, -200));  // returns 150
                    ?>
                    </textarea>
                    <form action="" method="POST">
                            <input type="submit" name="sub2" value="TEST Yourself" class="btn btn-success mt-2">
                    </form>
                        <?php

                        if(isset($_POST['sub2'])){
                            echo(min(0, 150, 30, 20, -8, -200));  // returns -200
                            echo(max(0, 150, 30, 20, -8, -200));  // returns 150
                        }
                        ?>
                    </div>
                </div>
                <h3>PHP abs() Function</h3>
                <p>The abs() function returns the absolute (positive) value of a number:</p>
                <h3>PHP sqrt() Function</h3>
                <p>The sqrt() function returns the square root of a number:</p>
                <h3>PHP round() Function</h3>
                <p>The round() function rounds a floating-point number to its nearest integer:</p>
                <h3>Random Numbers</h3>
                <p>The rand() function generates a random number:</p>
                
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