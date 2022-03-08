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
                <h3>PHP For Loops</h3>
                <p>
                The for loop is used when you know in advance how many times the script should run.
                </p>
                <h3>Syntax</h3>
                <div class="card">
                    <div class="card-header">
                    for (init counter; test counter; increment counter) {
                    code to be executed for each iteration;
                    }
                    </div>
                    <li>init counter: Initialize the loop counter value</li>
                    <li>test counter: Evaluated for each loop iteration. If it evaluates to TRUE, 
                    the loop continues. If it evaluates to FALSE, the loop ends.</li>
                    <li>increment counter: Increases the loop counter value</li>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        Example
                    </div>
                    <div class="card-body">
                    <textarea cols="70" rows="5">
                    < ?php
                    for ($x = 0; $x <= 10; $x++) {
                    echo "The number is: $x <br>";
                    }
                    </textarea>
                    <form action="" method="POST">
                        <input type="submit" name="sub4" value="TEST Yourself" class="btn btn-success mt-2">
                    </form>
                    <?php
                        if(isset($_POST['sub4'])){
                            for ($x = 0; $x <= 10; $x++) {
                                echo "The number is: $x <br>";
                              }
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