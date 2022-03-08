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
                <h3>PHP Do While Loops</h3>
                <p>
                The do...while loop will always execute the block of code once, it will then check
                 the condition, and repeat the loop while the specified condition is true.
                </p>
                <h3>Syntax</h3>
                <div class="card">
                    <div class="card-header">
                    do {
                        code to be executed;
                        } while (condition is true);
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Example
                    </div>
                    <div class="card-body">
                    <textarea cols="70" rows="10">
                    < ?php
                    $x = 1;

                    do {
                    echo "The number is: $x <br>";
                    $x++;
                    } while ($x <= 5);
                    ?>
                    </textarea>
                    <form action="" method="POST">
                        <input type="submit" name="sub3" value="TEST Yourself" class="btn btn-success mt-2">
                    </form>
                    <?php
                        if(isset($_POST['sub3'])){
                            $x = 1;
                            do {
                            echo "The number is: $x <br>";
                            $x++;
                            } while ($x <= 5);
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