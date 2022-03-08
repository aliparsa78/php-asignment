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
            <div class="card shadow mt-2 mb-5">
                <div class="car-body mt-4 ml-4 mb-4">
                    <h4 class="text-center">PHP Variables</h4> <hr>
                    <p>Variables are "containers" for storing information.</p>
                    <h2>Creating (Declaring) PHP Variables</h2>
                    <p>In PHP, a variable starts with the $ sign, followed by the name of the variable:</p>
                     <h3>syntax</h3>
                    <textarea name="" id="" cols="80" rows="5">
                    < ?php
                        $txt = "Hello world!";
                        $x = 5;
                        $y = 10.5;
                    ?>
                    </textarea>
                        
                    <p>
                    After the execution of the statements above, the variable $txt will 
                    hold the value Hello world!, the variable $x will hold the value 5, and the variable $y will hold the value 10.5
                    </p>
                    <p><i class="font-weight-bold">Note</i>: When you assign a text value to a variable, put quotes around the value.</p>
                   <p> <i class="font-weight-bold">Note</i>: Unlike other programming languages, PHP has no command for declaring a variable. It is created the moment 
                   you first assign a value to it.</p>
                   <div class="card-header bg-info">
                   Think of variables as containers for storing data.
                   </div>
                   <h2>PHP Variables</h2>
                   <p>A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).</p>
                   <p>Rules for PHP variables:</p>
                   <ul>
                    <li>A variable starts with the $ sign, followed by the name of the variable</li>
                    <li>A variable name must start with a letter or the underscore character</li>
                    <li>A variable name cannot start with a number</li>
                    <li>A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )</li>
                    <li>Variable names are case-sensitive ($age and $AGE are two different variables)</li>
                    </ul>
                    <div class="card-header bg-info">
                    Remember that PHP variable names are case-sensitive!
                    </div>
                    <h2>Output Variables</h2>
                    <p>The PHP echo statement is often used to output data to the screen.</p>
                    <p>The following example will show how to output text and a variable:</p>
                    <div class="card-body bg-secondary">
                    <h3>example</h3>
                    <textarea name="" id="" cols="50" rows="5">
                    < ?php
                        $txt = "PHP";
                        echo "I love " . $txt . "!";
                    ?>
                    </textarea>
                    <form action="" method="POST">
                            <input type="submit" name="sub1" value="Test Yourself" class="btn btn-success mt-2">
                        </form>
                        <?php
                        if(isset($_POST['sub1'])){
                            $txt = "PHP";
                            echo "I love " . $txt . "!";
                        }
                        ?>
                    
                    </div><br>
                    <h2>PHP is a Loosely Typed Language</h2>
                    <p>
                    In the example above, notice that we did not have to tell PHP which data type the variable is.

                    PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

                    In PHP 7, type declarations were added. This gives an option to specify the data type expected when declaring a function, and by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.

                    You will learn more about strict and non-strict requirements, and data type declarations in the PHP Functions chapter.
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