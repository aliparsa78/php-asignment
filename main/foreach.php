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
                <h3>PHP Foreach Loops</h3>
                <p>
                    The foreach loop works only on arrays, and is
                    used to loop through each key/value pair in an array.
                 </p>
                <h3>Syntax</h3>
                <div class="card">
                    <div class="card-header">
                        foreach ($array as $value) {
                        code to be executed;
                        }
                    </div>
                    For every loop iteration, the value of the current array element is assigned to $value 
                    and the array pointer is moved by one, until it reaches the last array element.
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        Example
                    </div>
                    <div class="card-body">
                    <textarea cols="70" rows="6">
                    < ?php
                    $colors = array("red", "green", "blue", "yellow");

                    foreach ($colors as $value) {
                    echo "$value <br>";
                    }
                    ?>
                    </textarea>
                    <form action="" method="POST">
                        <input type="submit" name="sub4" value="TEST Yourself" class="btn btn-success mt-2">
                    </form>
                    <?php
                        if(isset($_POST['sub4'])){
                            $colors = array("red", "green", "blue", "yellow");
                            foreach ($colors as $value) {
                            echo "$value <br>";
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