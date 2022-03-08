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
                <h3>PHP Numbers</h3>
                <p>
                An integer is a number without any decimal part.
                <br>
                2, 256, -256, 10358, -179567 are all integers. While 7.56, 10.0, 150.67 are floats.
                <br>
                So, an integer data type is a non-decimal number between -2147483648 and 2147483647. A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.
                <br>
                Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, because one of the operands is a float (2.5).
                <br>
                Here are some rules for integers:
                </p>
                <ul>
                    <li>An integer must have at least one digit</li>
                    <li>An integer must not have a decimal point</li>
                    <li>An integer can be either positive or negative</li>
                    <li>Integers can be specified in three formats: decimal (10-based), hexadecimal 
                    (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)
                    </li>

                </ul>
                <p>PHP has the following functions to check if the type of a variable is integer:</p>
                <ul>
                    <li>is_int()</li>
                    <li>is_integer() - alias of is_int()</li>
                    <li>is_long() - alias of is_int()</li>
                </ul>
                <div class="card">
                    <div class="card-header">
                    Example <br>
                    Check if the type of a variable is integer:
                    </div>
                    <div class="card-body">
                    <textarea  cols="80" rows="7">
                    < ?php
                    $x = 5985;
                    var_dump(is_int($x));
                        //bool(True)
                    $x = 59.85;
                    var_dump(is_int($x));
                    //bool(False)
                    ?>
                    </textarea>
                    </div>
                </div>
                <h3>PHP Float</h3>
                <p>A float is a number with a decimal point or a number in exponential form.
                <br>
                2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.
                <br>
                The float data type can commonly store a value up to 1.7976931348623E+308 (platform dependent), and have a maximum precision of 14 digits.
                <br>
                PHP has the following functions to check if the type of a variable is float:
                <ul>
                    <li>is_float()</li>
                    <li>is_double()-alias of is_float()</li>
                </ul>
                </p>
                <div class="card">
                    <div class="card-header">
                    Example <br>
                    Check if the type of a variable is integer:
                    </div>
                    <div class="card-body">
                    <textarea  cols="80" rows="7">
                    < ?php
                    $x = 10.365;
                    var_dump(is_float($x));
                    
                    //out put->bool(true)
                    ?>
                    </textarea>
                    </div>
                </div>
                <h3>PHP Infinity</h3>
                <p>
                A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.
                <br>
                PHP has the following functions to check if a numeric value is finite or infinite:
               <ul>
                    <li>is_finite()</li>
                    <li>is_infinite()</li>
               </ul>
               <p>However, the PHP var_dump() function returns the data type and value:</p>
               
                </p>
                <div class="card">
                    <div class="card-header">
                    Example <br>
                    Check if the type of a variable is integer:
                    </div>
                    <div class="card-body">
                    <textarea  cols="80" rows="7">
                    < ?php
                    $x = 1.9e411;
                    var_dump($x);

                    //output -> float(INF)
                    ?>
                    </textarea>
                    </div>
                </div>
                <h3>PHP NAN</h3>
                <P>
                NaN stands for Not a Number.
                <br>
                NaN is used for impossible mathematical operations.
                <br>    
                PHP has the following functions to check if a value is not a numbe
                <li>is_nan()</li>
                </P>
                <div class="card">
                    <div class="card-header">
                    Example <br>
                    Check if the type of a variable is integer:
                    </div>
                    <div class="card-body">
                    <textarea  cols="80" rows="7">
                    < ?php
                    $x = acos(8);
                    var_dump($x);

                    //out put->  float(NAN)
                    ?>

                    </textarea>
                    </div>
                </div>
                <h3>PHP Numerical Strings</h3>
                The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the
                 variable is a number or a numeric string, false otherwise.
                 <div class="card">
                    <div class="card-header">
                    Example <br>
                    
                    </div>
                    <div class="card-body">
                    <textarea  cols="80" rows="7">
                    < ?php
                        $x = 5985;
                        var_dump(is_numeric($x));
                        //bool(true)
                        $x = "5985";
                        var_dump(is_numeric($x));
                        //bool(true)
                        $x = "59.85" + 100;
                        var_dump(is_numeric($x));
                        //bool(true)
                        $x = "Hello";
                        var_dump(is_numeric($x));
                        //bool(false)
                    ?>

                    </textarea>
                    </div>
                </div>
                <h3>PHP Casting Strings and Floats to Integers</h3>
                Sometimes you need to cast a numerical value into another data type.
                    <br>
                The (int), (integer), or intval() function are often used to convert a value to an integer.
                <div class="card">
                    <div class="card-header">
                    Example <br>
                    
                    </div>
                    <div class="card-body">
                    <textarea  cols="80" rows="7">
                    < ?php
                        // Cast float to int
                        $x = 23465.768;
                        $int_cast = (int)$x;
                        echo $int_cast;
                        // out put- 23465
                        echo "<br>";
                        //23465
                        // Cast string to int
                        $x = "23465.768";
                        $int_cast = (int)$x;
                        echo $int_cast;
                    ?>

                    </textarea>
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