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
                <h3>PHP Data Types</h3>
                <p>Variables can store data of different types, and different data types can do different things.</p>
                <p>PHP supports the following data types:</p>
                <ul>
                    <li>String</li>
                    <li>Integer</li>
                    <li>Float(also called double)</li>
                    <li>boolean</li>
                    <li>Array</li>
                    <li>Object</li>
                    <li>Null</li>
                    <li>Resource</li>
                </ul>
                <h3>PHP String</h3>
                <p>A string is a sequence of characters, like "Hello world!".</p>
                <p>A string can be any text inside quotes. You can use single or double quotes:</p>
                <h3>PHP Integer</h3>
                <p>An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.</p>
                <p>Rules for integers</p>
                    <ul>
                        <li>An integer must have at least one digit</li>
                        <li>An integer must not have a decimal point</li>
                        <li>An integer can be either positive or negative</li>
                        <li>Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation</li>
                        
                    </ul>
                    <p class="text-success font-weight-bold">var_dump() function return the data type</p>
                    <h3>PHP Float</h3>
                    <p>A float (floating point number) is a number with a decimal point or a number in exponential form.</p>
                    <h3>PHP Boolean</h3>
                    <p>A Boolean represents two possible states: TRUE or FALSE.</p>
                    <h3>PHP Array</h3>
                    <p>An array stores multiple values in one single variable.</p>
                    <h5>Example</h5>
                    <textarea  cols="70" rows="5">
                        < ?php  
                            $cars = array("Volvo","BMW","Toyota");
                            var_dump($cars);
                        ?>
                    </textarea>
                    <form action="" method="POST">
                        <input type="submit" name="sub1" value="TEST Yourself" class="btn btn-success mt-2">
                    </form>
                    <?php
                        if(isset($_POST['sub1'])){
                            $cars = array("Volvo","BMW","Toyota");
                            
                            var_dump($cars);
                        }
                    ?>
                    <h3>PHP Object</h3>
                        <p>
                        Classes and objects are the two main aspects of object-oriented programming.

                        A class is a template for objects, and an object is an instance of a class.
                        
                        When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
                        
                        Let's assume we have a class named Car. A Car can have properties like model, color, etc. We can define variables like $model, $color, and so on, to hold the values of these properties.
                        
                        When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
                        
                        If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
                        </p>
                    <h3>Example</h3>
                    <textarea  cols="100" rows="10">
                    < ?php
                        class Car {
                        public $color;
                        public $model;
                        public function __construct($color, $model) {
                            $this->color = $color;
                            $this->model = $model;
                        }
                        public function message() {
                            return "My car is a " . $this->color . " " . $this->model . "!";
                        }
                        }
                        $myCar = new Car("black", "Volvo");
                        echo $myCar -> message();
                        echo "<br>";
                        $myCar = new Car("red", "Toyota");
                        echo $myCar -> message();
                    ?>
                    </textarea>
                    <form action="" method="POST">
                        <input type="submit" name="sub2" value="TEST Yourself" class="btn btn-success mt-2">
                    </form>
                    <?php
                        if(isset($_POST['sub2'])){
                            class Car {
                                public $color;
                                public $model;
                                public function __construct($color, $model) {
                                  $this->color = $color;
                                  $this->model = $model;
                                }
                                public function message() {
                                  return "My car is a " . $this->color . " " . $this->model . "!";
                                }
                              }
                              
                              $myCar = new Car("black", "Volvo");
                              echo $myCar -> message();
                              echo "<br>";
                              $myCar = new Car("red", "Toyota");
                              echo $myCar -> message();
                        }
                    ?>
                    
                    <h3>PHP Null Value</h3>
                    <p>
                    Null is a special data type which can have only one value: NULL.
                    </p>
                    <br>
                    A variable of data type NULL is a variable that has no value assigned to it.
                    <i class="font-wieght-bold">Tip:</i> If a variable is created without a value, it is automatically assigned a value of NULL.
                    <p>Variables can also be emptied by setting the value to NULL:</p>
                    <textarea  cols="50" rows="5">
                    < ?php
                    $x = "Hello world!";
                    $x = null;
                    var_dump($x);
                   
                    ?>
                    </textarea>
                    <form action="" method="POST">
                        <input type="submit" name="sub3" value="TEST Yourself" class="btn btn-success mt-2">
                    </form>
                    <?php
                        if(isset($_POST['sub3'])){
                            $x = "Hello world!";
                            $x = null;
                            var_dump($x);
                        }
                    ?>
                    <h3>PHP Resource</h3>
                    <p>
                    The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.
                    <br>
                    A common example of using the resource data type is a database call.
                    <br>
                    We will not talk about the resource type here, since it is an advanced topic.
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