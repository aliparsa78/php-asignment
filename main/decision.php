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
        <div class="col-md-10" style="float:right">
            
            <div class="main-content">
                <div class="card card-shadow  mb-5">
                    <div class="car-body mt-4 ml-4 mb-4">
                            <h3>PHP Conditional Statements</h3>
                            <p>
                            Very often when you write code, you want to perform different actions for different conditions. 
                            You can use conditional statements in your code to do this. <br>
                            In PHP we have the following conditional statements: <br>
                            <li>if statement - executes some code if one condition is true</li>
                            <li>if...else statement - executes some code if a condition is true and another code if that condition is false</li>
                            <li>if...elseif...else statement - executes different codes for more than two conditions</li>
                            <li>switch statement - selects one of many blocks of code to be executed</li>
                            </p>
                            <h3>PHP - The if Statement</h3>
                            <p>The if statement executes some code if one condition is true.</p>
                            <h3>Syntax</h3>
                            if (condition) {
                            code to be executed if condition is true;
                            }
                            <h3>PHP - The if...else Statement</h3>
                            <p>The if...else statement executes some code if a condition is true and another code if that condition is false.</p>
                            <h3>Syntax</h3>
                            if (condition) {
                            code to be executed if condition is true;
                            } else {
                            code to be executed if condition is false;
                            }
                            <h3>PHP - The if...elseif...else Statement</h3>
                            <p>The if...elseif...else statement executes different codes for more than two conditions.</p>
                            <h3>Syntax</h3>
                            if (condition) {
                            code to be executed if this condition is true;
                            } elseif (condition) {
                            code to be executed if first condition is false and this condition is true;
                            } else {
                            code to be executed if all conditions are false;
                            }
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