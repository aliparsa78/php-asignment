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
                    <h2>PHP Variable Scope</h2>
                    <p>
                        In PHP, variables can be declared anywhere in the script. <br>

                        The scope of a variable is the part of the script where the variable can be referenced/used. <br>
                        
                        PHP has three different variable scopes:
                    </p>
                    <ul>
                        <li>local</li>
                        <li>global</li>
                        <li>static</li>
                    </ul>
                    <h2>Global and Local Scope</h2>
                    <p>A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:</p>
                    <div class="card-body bg-info">
                            <h4>Example</h4>
                            <p>variable with global scope</p>
                            <textarea name="" id="" cols="80" rows="10">
                            < ?php
                            $x = 5; // global scope

                            function myTest() {
                            // using x inside this function will generate an error
                            echo "<p>Variable x inside function is: $x</p>";
                            }
                            myTest();

                            echo "<p>Variable x outside function is: $x</p>";
                            ?>
                            </textarea>
                            <form action="" method="POST">
                                <input type="submit" name="sub1" value="Test Yourself" class="btn btn-success mt-2">
                            </form>
                                <?php

                                if(isset($_POST['sub1'])){
                                    $x = 5; // global scope
 
                                    function myTest() {
                                      echo "<p>Variable x inside function is: </p>".$x;
                                    } 
                                    myTest();
                                    
                                    echo "<p>Variable x outside function is: $x</p>";
                                }
                                ?>
                    </div>
                    <p>A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:</p>
                    <div class="card-body bg-info">
                            <h4>Example</h4>
                            <p>variable with local scope</p>
                            <textarea name="" id="" cols="80" rows="10">
                            < ?php
                            function myTest() {
                            $x = 5; // local scope
                            echo "<p>Variable x inside function is: $x</p>";
                            }
                            myTest();

                            // using x outside the function will generate an error
                            echo "<p>Variable x outside function is: $x</p>";
                            ?>
                            </textarea>
                            <form action="" method="POST">
                                <input type="submit" name="sub2" value="Test Yourself" class="btn btn-success mt-2">
                            </form>
                                <?php

                                if(isset($_POST['sub2'])){
                                    function myTest() {
                                        $x = 5; // local scope
                                        echo "<p>Variable x inside function is: $x</p>";
                                        }
                                        myTest();
            
                                        // using x outside the function will generate an error
                                        echo "<p>Variable x outside function is: $x</p>";
                                }
                                ?>
                    </div>
                    <br>
                    <div class="card-header bg-danger">
                    You can have local variables with the same name in different functions, because local variables are only recognized by the function in which they are declared.
                    </div>
                    <h2>PHP The global Keyword</h2>
                    <p>The global keyword is used to access a global variable from within a function.</p>
                    <p>To do this, use the <i class="text-danger">global</i> keyword before the variables (inside the function):</p>
                    <div class="card-body bg-info">
                        <h4>Example</h4>
                        <textarea name="" id="" cols="80" rows="10">
                        < ?php
                        $x = 5;
                        $y = 10;

                        function myTest() {
                        global $x, $y;
                        $y = $x + $y;
                        }

                        myTest();
                        echo $y; // outputs 15
                        ?>
                        </textarea>
                        <form action="" method="POST">
                                <input type="submit" name="sub3" value="Test Yourself" class="btn btn-success mt-2">
                            </form>
                                <?php
                                if(isset($_POST['sub3'])){
                                    $x = 5;
                                    $y = 10;
            
                                    function myTest() {
                                    global $x, $y;
                                    $y = $x + $y;
                                    }
            
                                    myTest();
                                    echo $y; // outputs 15
                                }
                                ?>
                    
                    </div>
                    <p>
                    PHP also stores all global variables in an array called <i class="text-danger">$GLOBALS[index]</i>.
                     The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
                    </p>
                    <div class="card-body bg-gray bg-info">
                        <h4>Example</h4>
                        <textarea name="" id="" cols="80" rows="10">
                        < ?php
                        $x = 5;
                        $y = 10;

                        function myTest() {
                        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
                        }

                        myTest();
                        echo $y; // outputs 15
                        ?>
                        </textarea>
                        <form action="" method="POST">
                                <input type="submit" name="sub4" value="Test Yourself" class="btn btn-success mt-2">
                        </form>
                                <?php
                                if(isset($_POST['sub4'])){
                                    $x = 5;
                                    $y = 10;

                                    function myTest() {
                                    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
                                    }

                                    myTest();
                                    echo $y; // outputs 15
                                }
                                ?>
                    
                    </div>
                    <h2>PHP The static Keyword</h2>
                    <p>Normally, when a function is completed/executed, all of its variables are deleted. 
                    However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
                    </p>
                    <p>To do this, use the static keyword when you first declare the variable:</p>
                    <div class="card-body bg-gray bg-info">
                        <h4>Example</h4>
                        <textarea name="" id="" cols="80" rows="10">
                        < ?php
                        function myTest() {
                        static $x = 0;
                        echo $x;
                        $x++;
                        }

                        myTest();
                        myTest();
                        myTest();
                        ?>
                        </textarea>
                        <form action="" method="POST">
                                <input type="submit" name="sub5" value="Test Yourself" class="btn btn-success mt-2">
                        </form>
                            <?php
                                if(isset($_POST['sub5'])){
                                    function myTest() {
                                        static $x = 0;
                                        echo $x;
                                        $x++;
                                        }
                
                                        myTest();
                                        myTest();
                                        myTest();
                                    }
                            ?>
                    
                    </div>
                    <p>
                    Then, each time the function is called, that variable will 
                    still have the information it contained from the last time the function was called.
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
</body>
</html>