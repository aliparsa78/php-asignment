<?php
@include('inc/header.php')
?>
    <div class="row">
        <div class="col-md-2">
            <!-- Sidebar start here -->
            <?php
            @include('inc/sidebar.php')
            ?>
        </div>
            <!-- End sidebar -->
        <div class="col-md-10">  
            <div class="container">
                <div class="main-content">
                    <div class="card card-shadow mt-2 mb-5">
                        <div class="car-body mt-4 ml-4 mb-4">
                        <h3>PHP Array</h3>
                        <p>
                        An array stores multiple values in one single variable:               
                        </p>
                        
                        <div class="card">
                            <div class="card-header">
                                Example
                            </div>
                            <div class="card-body">
                            <textarea cols="80" rows="5">
                            < ?php
                                $cars = array("Volvo", "BMW", "Toyota");
                                echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
                                ?>
                            </textarea>
                            <form action="" method="POST">
                                <input type="submit" name="sub1" value="Test Yourself" class="btn btn-success mt-2">
                            </form>
                            <?php
                                if(isset($_POST['sub1'])){
                                    $cars = array("Volvo", "BMW", "Toyota"); 
                                    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
                                }
                            ?>
                            </div>
                        </div>
                        <h3>What is an Array?</h3>
                        <p>
                            An array can hold many values under a single name, and you can access the values by referring to an index number.
                        </p>
                        <h3>Create an Array in PHP</h3>
                        <p>In PHP, the <i class="text-danger">array()</i> function is used to create an array:</p>
                        <h3>Get The Length of an Array - The count() Function</h3>
                        <p>The <i class="text-danger">count()</i> function is used to return the length (the number of elements) of an array:</p>    
                        <div class="card">
                            <div class="card-header">
                                Example
                            </div>
                            <div class="card-body">
                                <textarea cols="70" rows="5">
                                    < ?php
                                    $cars = array("Volvo", "BMW", "Toyota");
                                    echo count($cars);
                                   
                                    ?>
                                </textarea>
                            <form action="" method="POST">
                                <input type="submit" name="sub2" value="Test Yourself" class="btn btn-success mt-2">
                            </form>
                            <?php
                             if(isset($_POST['sub2'])){
                                $cars = array("Volvo", "BMW", "Toyota");
                                echo count($cars);
                             }
                            ?>
                            </div>
                        </div>
                        <h3>PHP Indexed Arrays</h3>
                        <p>
                        There are two ways to create indexed arrays:
                        <br>
                        The index can be assigned automatically (index always starts at 0), like this:
                        </p>
                        <div class="car">
                            <div class="card-header">
                            $cars = array("Volvo", "BMW", "Toyota");
                            </div>
                        </div>
                        <p>or the index can be assigned manually:</p>
                        <div class="car">
                            <div class="card-header">
                                $cars[0] = "Volvo";
                                $cars[1] = "BMW";
                                $cars[2] = "Toyota";
                            </div>
                        </div> 
                        <div class="card">
                            <div class="card-header">
                                <h3>Example</h3>
                            </div>
                            <div class="card-body">
                                <textarea  cols="80" rows="8">
                                
                                    $cars = array("Volvo", "BMW", "Toyota");
                                    $arrlength = count($cars)   
                                    for($x = 0; $x < $arrlength; $x++) {
                                    echo $cars[$x];
                                    echo "<br>";
                                    } 
                                
                                </textarea>
                            <form action="" method="POST">
                                <input type="submit" name="sub3" value="Test Yourself" class="btn btn-success mt-2">
                            </form>
                            <?php
                                if(isset($_POST['sub3'])){
                                    $cars = array("Volvo", "BMW", "Toyota");
                                    $arrlength = count($cars);

                                    for($x = 0; $x < $arrlength; $x++) {
                                    echo $cars[$x];
                                    echo "<br>";
                                    }
                                }
                            ?>
                            </div>
                        </div>
                        <h3>PHP Associative Arrays</h3>
                        Associative arrays are arrays that use named keys that you assign to them.
                        <br>
                        There are two ways to create an associative array: 
                        <div class="card-header border">
                            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
                        </div> 
                        or:
                        <div class="card-header border">
                            $age['Peter'] = "35";
                            $age['Ben'] = "37";
                            $age['Joe'] = "43";                
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header">
                                Example
                            </div>
                            <div class="card-body">
                            <textarea  cols="90" rows="7">
                            < ?php
                                $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43")   
                                foreach($age as $x => $x_value) {
                                echo "Key=" . $x . ", Value=" . $x_value;
                                echo "<br>";
                                }
                            ?>
                            </textarea>
                            <form action="" method="POST">
                                <input type="submit" name="sub4" value="Test Yourself" class="btn btn-success mt-2">
                            </form>
                            <?php
                                $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
                                echo "Peter is " . $age['Peter'] . " years old.";
                            ?>
                            </div>
                        </div> 
                        <h3>PHP - Multidimensional Arrays</h3>
                        PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, 
                        arrays more than three levels deep are hard to manage for most people.
                        <div class="card bg-danger">
                            <i class="font-weight-bold">The dimension of an array indicates the number of indices you need to select an element.</i>
                            <li>For a two-dimensional array you need two indices to select an element</li>
                            <li>For a three-dimensional array you need three indices to select an element</li>
                        </div>
                        <div class="card-header border">
                            $cars = array (
                            array("Volvo",22,18),
                            array("BMW",15,13),
                            array("Saab",5,2),
                            array("Land Rover",17,15)
                            );
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header">
                                Example
                            </div>
                            <div class="card-body">
                                
                                <textarea  cols="80" rows="7">
                                    < ?php
                                    $cars = array (
                                        array("Volvo",22,18),
                                        array("BMW",15,13),
                                        array("Saab",5,2),
                                        array("Land Rover",17,15)
                                      );
                                      
                                    ?>
                        
                                </textarea>
                                <form action="" method="POST">
                                    <input type="submit" name="sub5" value="TEST Yourself" class="btn btn-success mt-2">
                                </form>
                                <?php
                                $cars = array (
                                    array("Volvo",22,18),
                                    array("BMW",15,13),
                                    array("Saab",5,2),
                                    array("Land Rover",17,15)
                                  );
                                if(isset($_POST['sub5'])){
                                    echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
                                    echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
                                    echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
                                    echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
                                }
                                ?>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Footer go here -->
    <?php  @include("../layouts/inc/footer.html") ?>
     <script src="../assets/js/bootstrap.min.js"></script>
     <script src="../assets/js/jquery.min.js"></script>
</body>
</html>