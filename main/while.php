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
                <h3>PHP While Loops</h3>
                <p>
                The while loop - Loops through a block of code as long as the specified condition is true.<br>

                </p>
                <h3>Syntax</h3>
                <div class="card">
                    <div class="card-header">
                    while (condition is true) {
                    code to be executed;
                    }
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

                    while($x <= 5) {
                    echo "The number is: $x <br>";
                    $x++;
                    }

                    //out put-> 
                    The number is: 1
                    The number is: 2
                    The number is: 3
                    The number is: 4
                    The number is: 5
                    ?>
                    </textarea>
                    <form action="" method="POST">
                            <input type="submit" name="sub1" value="Test Yourself" class="btn btn-success mt-2">
                        </form>
                        <?php
                        if(isset($_POST['sub1'])){
                            $x = 1;
                            while($x <= 5) {
                            echo "The number is: $x <br>";
                            $x++;
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