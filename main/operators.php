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
                <h3>PHP Operators</h3>
                <p>
                Operators are used to perform operations on variables and values.
                <br>
                PHP divides the operators in the following groups:
                <li>Arithmetic operators</li>
                <li>Assignment operators</li>
                <li>Comparison operators</li>
                <li>Increment/Decrement operators</li>
                <li>Logical operators</li>
                <li>String operators</li>
                <li>Array operators</li>
                <li>Conditional assignment operators</li>
                </p>
                <h3>PHP Arithmetic Operators</h3>
                <p>
                The PHP arithmetic operators are used with numeric values to perform common
                 arithmetical operations, such as addition, subtraction, multiplication etc. <br>
                 (+ , - ,* , /, %, **)
                </p>
                <h3>PHP Assignment Operators</h3>
                <p>
                The PHP assignment operators are used with numeric values to write a value to a variable. <br>
                (= , += ,-=, *= , /=, %=)
                <br>
                The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the assignment expression on the right.
                </p>
                <h3>PHP Comparison Operators</h3>
                <p>
                The PHP comparison operators are used to compare two values (number or string):
                (==,===,!=, <>, !==, > ,<,<=, >=, <=>)
                </p>
                <h3>PHP Increment / Decrement Operators</h3>
                <p>
                The PHP increment operators are used to increment a variable's value.
                <br>
                The PHP decrement operators are used to decrement a variable's value
                (++,--)
                </p>
                <h3>PHP Logical Operators</h3>
                <p>
                The PHP logical operators are used to combine conditional statements. <br>
                and, or ,xor,&&,||,!
                </p>
                <h3>PHP String Operators</h3>
                <p>
                PHP has two operators that are specially designed for strings. <br>
                . , .=
                </p>
                <h3>PHP Array Operators</h3>
                <p>
                The PHP array operators are used to compare arrays.
                <br>
                +, == , ===, !=, <> ,!==
                </p>
                <h3>PHP Conditional Assignment Operators</h3>
                <p>
                The PHP conditional assignment operators are used to set a value depending on conditions: <br>
                (?: , ??)
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