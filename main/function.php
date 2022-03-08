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
                                <h3>PHP Functions</h3>
                                <p>
                                    The real power of PHP comes from its functions.
                                    <br>
                                    PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.
                                    <br>
                                </p>
                                <h3>PHP Built-in Function</h3>
                                <p>
                                PHP has over 1000 built-in functions that can be called directly, 
                                from within a script, to perform a specific task
                                </p>
                                <h3>PHP User Defined Functions</h3>
                                <p>
                                A user-defined function declaration starts with the word function:
                                </p>
                                <div class="card">
                                    <div class="card-header">
                                        Syntax
                                    </div>
                                    <div class="card-body">
                                    <textarea cols="70" rows="3">
                                        function functionName() {
                                        code to be executed;
                                        }
                                    </textarea>
                                    </div>
                                </div>
                                <i class="font-weight-bold">Note:</i> A function name must start with a letter or an underscore. Function names are NOT case-sensitive.
                                <div class="card">
                                    <div class="card-header">
                                    <i class="font-weight-bold">Tip:</i>
                                    Give the function a name that reflects what the function does! <br>
                                    In the example below, we create a function named "writeMsg()". <br>
                                    The opening curly brace ( { ) indicates the beginning of the function code, and the closing curly brace ( } ) indicates the end of the function. <br>
                                    The function outputs "Hello world!".  <br>
                                    To call the function, just write its name followed by brackets ():
                                    </div>
                                </div>
                                <br>
                                <div class="card">
                                    <div class="card-header">
                                        Example
                                    </div>
                                    <div class="card-body">
                                        <textarea cols="60" rows="5">
                                            < ?php
                                            function writeMsg() {
                                            echo "Hello world!";
                                            }
                                            writeMsg(); // call the function
                                            ?>
                                        </textarea>
                                        <form action="" method="POST">
                                            <input type="submit" name="sub" value="TEST Yourself" class="btn btn-success mt-2">
                                        </form>
                                        <?php
                                            if(isset($_POST['sub'])){
                                                function writeMsg() {
                                                    echo "Hello world!";
                                                  }
                                                  writeMsg(); // call the function
                                            }
                                        ?>
                                    </div>
                                </div>
                                <h3>PHP Function Arguments</h3>
                                <p>
                                Information can be passed to functions through arguments. An argument is just like a variable.
                                <br>
                                Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.
                                <br>
                                The following example has a function with one argument ($fname). When the familyName() function is called, we also pass along a name (e.g. Jani), 
                                and the name is used inside the function, which outputs several different first names, but an equal last name:
                                </p>
                                <div class="card">
                                    <div class="card-header">
                                    
                                    </div>
                                    <div class="card-body">
                                        <textarea  cols="80" rows="10">
                                        < ?php
                                            function familyName($fname) {
                                            echo "$fname Refsnes.<br>";
                                            }
                                            familyName("Jani");
                                            familyName("Hege");
                                            familyName("Stale");
                                            familyName("Kai Jim");
                                            familyName("Borge");
                                        ?>
                                        </textarea>
                                        <form action="" method="POST">
                                            <input type="submit" name="sub1" value="TEST Yourself" class="btn btn-success mt-2">
                                        </form>
                                        <?php
                                            if(isset($_POST['sub1'])){
                                                function familyName($fname) {
                                                    echo "$fname Refsnes.<br>";
                                                  }
                                                  
                                                  familyName("Jani");
                                                  familyName("Hege");
                                                  familyName("Stale");
                                                  familyName("Kai Jim");
                                                  familyName("Borge");
                                            }
                                        ?>
                                    </div>
                                </div>
                                <h3>PHP is a Loosely Typed Language</h3>
                                <div class="card-header">
                                    In the example above, notice that we did not have to tell PHP which data type the variable is.
                                    <br>
                                    PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.
                                    <br>
                                    In PHP 7, type declarations were added. This gives us an option to specify the expected data type when declaring a function, and by adding the strict declaration, it will throw a "Fatal Error" if the data type mismatches.
                                    <br>
                                    In the following example we try to send both a number and a string to the function without using strict:
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                            Example
                                    </div>
                                    <div class="card-body">
                                        <textarea cols="90" rows="7">
                                        < ?php
                                            function addNumbers(int $a, int $b) {
                                            return $a + $b;
                                            }
                                            echo addNumbers(5, "5 days");
                                            // since strict is NOT enabled "5 days" is changed to int(5),
                                             and it will   
                                        ?>
                                        </textarea>
                                        <form action="" method="POST">
                                            <input type="submit" name="sub2" value="TEST Yourself" class="btn btn-success mt-2">
                                        </form>
                                        <?php
                                            if(isset($_POST['sub2'])){
                                                function addNumbers(int $a, int $b) {
                                                    return $a + $b;
                                                  }
                                                  echo addNumbers(5, "5 days");
                                            }
                                        ?>
                                    </div>   
                                </div>
                                <br>
                                <p>
                                    To specify strict we need to set declare(strict_types=1);. This must be on the very first line of the PHP file.
                                    <br>
                                    In the following example we try to send both a number and a string to the function, but here we have added the strict declaration:
                                </p>
                                
                                <h3>Passing Arguments by Reference</h3>
                                <p>
                                    In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.
                                    <br>
                                    When a function argument is passed by reference, changes to the argument also change the variable that was passed in. 
                                    To turn a function argument into a reference, the & operator is used:
                                </p>
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Example</h4>
                                        <p>Use a pass-by-reference argument to update a variable:</p>
                                    </div>
                                    <div class="card-body">
                                        <textarea  cols="80" rows="5">
                                        < ?php
                                        function add_five(&$value) {
                                        $value += 5;
                                        }

                                        $num = 2;
                                        add_five($num);
                                        echo $num;
                                        ?>
                                        </textarea>
                                        <form action="" method="POST">
                                            <input type="submit" name="sub2" value="TEST Yourself" class="btn btn-success mt-2">
                                        </form>
                                        <?php

                                        if(isset($_POST['sub2'])){
                                            function add_five(&$value) {
                                                $value += 5;
                                              }
                                              
                                              $num = 2;
                                              add_five($num);
                                              echo $num;
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
