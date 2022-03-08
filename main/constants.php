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
                        <h3>PHP Constants</h3>
                        <p>Constants are like variables except that once they are defined they cannot be changed or undefined.</p>
                        <p>
                        A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
                        <br>
                        A valid constant name starts with a letter or underscore (no $ sign before the constant name).
                        <br>
                        <i class="font-weight-bold">Note</i>: Unlike variables, constants are automatically global across the entire script.
                        </p>
                        <h3>Create a PHP Constant</h3>
                        <p>To create a constant, use the define() function.</p>
                        <h3>Syntax</h3>
                        define(name, value, case-insensitive)
                        <br>
                        Parameters:
                        <li>name: Specifies the name of the constant</li>
                        <li>value: Specifies the value of the constant</li>
                        <li>case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false</li>
                        <div class="card">
                            <div class="card-header">
                                Example
                            </div>
                            <div class="card-body">
                                <textarea name="" id="" cols="70" rows="5">
                                < ?php
                                define("GREETING", "Welcome to PHP ");
                                echo GREETING;
                                ?>
                                </textarea>
                            <form action="" method="POST">
                                    <input type="submit" name="sub1" value="TEST Yourself" class="btn btn-success mt-2">
                            </form>
                            <?php
                                if(isset($_POST['sub1'])){
                                    define("message", "This is PHP Programing Language!");
                                    echo message;
                                }
                            ?>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                Example <br>
                                <i class="font-weight-bold">Case-insensitive</i>
                                
                            </div>
                            <div class="card-body">
                                <textarea name="" id="" cols="70" rows="5">
                                < ?php
                                define("GREETING", "Welcome to PHP", true);
                                echo greeting;
                                ?>
                                </textarea>
                                <form action="" method="POST">
                                    <input type="submit" name="sub2" value="TEST Yourself" class="btn btn-success mt-2">
                            </form>
                            <?php
                                if(isset($_POST['sub2'])){
                                    define("MESSAGE", "Welcome to PHP Programing Language!", true);
                                    echo message;
                                }
                            ?>
                            </div>
                        </div>
                        <h3>PHP Constant Arrays</h3>
                        <p>In PHP7, you can create an Array constant using the define() function.</p>
                        <div class="card">
                            <div class="card-header">
                                Example <br>
                                Create an Array constant:
                            </div>
                            <div class="card-body">
                                <textarea name="" id="" cols="70" rows="5">
                                    < ?php
                                    define("cars", [
                                    "Alfa Romeo",
                                    "BMW",
                                    "Toyota"
                                    ]);
                                    echo cars[0];
                                    ?>
                                </textarea>
                            <form action="" method="POST">
                                    <input type="submit" name="sub3" value="TEST Yourself" class="btn btn-success mt-2">
                            </form>
                            <?php
                                if(isset($_POST['sub3'])){
                                    define("cars", [
                                        "Alfa Romeo",
                                        "BMW",
                                        "Toyota"
                                      ]);
                                      echo cars[0];
                                }
                            ?>
                            </div>
                        </div>
                        <h3>Constants are Global</h3>
                        <p>Constants are automatically global and can be used across the entire script.</p>
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