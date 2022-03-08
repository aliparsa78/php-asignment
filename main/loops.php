<?php
@include('inc/header.php')
?>
    <div class="row">
        <div class="col-md-2">
            <!-- MENU SIDEBAR-->
            <?php
            @include('inc/sidebar.php')
            ?>
            <!-- End sidebar -->
        </div>
        <div class="col-md-10">
         
    <div class="container">
       <div class="main-content">
            <div class="card card-shadow mt-2 mb-5">
                <div class="car-body mt-4 ml-4 mb-4">
                <h3>PHP Loops</h3>
                <p>
                Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we can use loops.
                <br>
                Loops are used to execute the same block of code again and again, as long as a certain condition is true.
                <br>
                In PHP, we have the following loop types:
                <li><i class="text-danger"> while - loops</i> through a block of code as long as the specified condition is true</li>
                <li><i class="text-danger"> do...while</i> - loops through a block of code once, and then repeats the loop as 
                long as the specified condition is true</li>
                <li><i class="text-danger"> for - loops</i> through a block of code a specified number of times</li>
                <li><i class="text-danger"> foreach - loops</i> through a block of code for each element in an array</li>
                </p>
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
