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
                        <h3>PHP Break</h3>
                        <p>
                        You have already seen the break statement used in an earlier chapter of this tutorial. <br>
                        It was used to "jump out" of a switch statement.
                        <br>
                        The break statement can also be used to jump out of a loop.
                        </p>
                        
                        <div class="card">
                            <div class="card-header">
                                Example <br>
                                This example jumps out of the loop when x is equal to 4:
                            </div>
                            <div class="card-body">
                            <textarea cols="70" rows="7">
                            < ?php
                            for ($x = 0; $x < 10; $x++) {
                            if ($x == 4) {
                                break;
                            }
                            echo "The number is: $x <br>";
                            }
                            ?>
                            </textarea>
                            <form action="" method="POST">
                                    <input type="submit" name="sub" value="TEST Yourself" class="btn btn-success mt-2">
                            </form>
                            <?php
                            if(isset($_POST['sub'])){
                                for ($x = 0; $x < 10; $x++) {
                                    if ($x == 4) {
                                      break;
                                    }
                                    echo "The number is: $x <br>";
                                  }                  
                            }
                            ?>
                            </div>
                        </div>
                        <h3>PHP Continue</h3>
                        <p>
                        The continue statement breaks one iteration (in the loop), 
                        if a specified condition occurs, and continues with the next iteration in the loop.
                        </p>
                        <div class="card">
                            <div class="card-header">
                                Example <br>
                                This example skips the value of 4:
                            </div>
                            <div class="card-body">
                            <textarea cols="70" rows="7">
                            < ?php
                            for ($x = 0; $x < 10; $x++) {
                            if ($x == 4) {
                                continue;
                            }
                            echo "The number is: $x <br>";
                            } 
                            ?>
                            </textarea>
                            <form action="" method="POST">
                                    <input type="submit" name="sub2" value="TEST Yourself" class="btn btn-success mt-2">
                            </form>
                            <?php
                                if(isset($_POST['sub2'])){
                                    for ($x = 0; $x < 10; $x++) {
                                        if ($x == 4) {
                                          continue;
                                        }
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