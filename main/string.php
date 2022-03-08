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
                <h3>PHP String</h3>
                <p>A string is a sequence of characters, like "Hello world!".</p>
                <h3>strlen() - Return the Length of a String</h3>
                <p>The PHP strlen() function returns the length of a string.</p>
                <div class="card">
                    <div class="card-header">
                        Example
                    </div>
                    <div class="card-body">
                        <textarea  cols="60" rows="5">
                        < ?php
                        echo strlen("Hello world!"); 
                        ?>
                        </textarea>
                    <form action="" method="POST">
                            <input type="submit" name="sub3" value="Test Yourself" class="btn btn-success mt-2">
                    </form>
                        <?php

                        if(isset($_POST['sub3'])){
                            echo strlen("Hello world!"); 
                        }
                        ?>
                    </div>
                </div>
                <h3>str_word_count() - Count Words in a String</h3>
                <p>The PHP str_word_count() function counts the number of words in a string.</p>
                <div class="card">
                    <div class="card-header">
                        Example
                    </div>
                    <div class="card-body">
                        <textarea  cols="60" rows="5">
                        < ?php
                        echo str_word_count("Hello world!");
                        ?>
                        </textarea>
                        <form action="" method="POST">
                            <input type="submit" name="sub2" value="Test Yourself" class="btn btn-success mt-2">
                    </form>
                        <?php

                        if(isset($_POST['sub2'])){
                            echo str_word_count("Hello world!");
                        }
                        ?>
                    </div>
                </div>
                <h3>strrev() - Reverse a String</h3>
                <p>The PHP strrev() function reverses a string</p>
                <h3>strpos() - Search For a Text Within a String</h3>
                <p>The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns
                 the character position of the first match. If no match is found, it will return FALSE.
                 </p>
                 <div class="card">
                    <div class="card-header">
                        Example
                    </div>
                    <div class="card-body">
                        <textarea  cols="60" rows="5">
                        < ?php
                        echo strpos("Hello world!", "world"); 
                        ?>
                        </textarea>
                    <form action="" method="POST">
                            <input type="submit" name="sub1" value="Test Yourself" class="btn btn-success mt-2">
                    </form>
                        <?php

                        if(isset($_POST['sub1'])){
                            echo strpos("Hello world!", "world");
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
     <script src="../assets/js/bootstrap.min.js"></script>
     <script src="../assets/js/jquery.min.js"></script>
</body>
</html>