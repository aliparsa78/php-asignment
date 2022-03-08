<?php
@include('inc/header.php')
?>
  <div class="row">
    <div class="col-md-2 ">
       <!-- sidebar start here -->
       <?php
            @include('inc/sidebar.php')
            ?>
       <!-- sidebar end here -->
    </div>
    <div class="col-md-10">
      <div class="container ">
        <h3 class="text-center mt-5">PHP SYNTAX</h3> <br>
        <div class="card shadow mt-2 mb-2">
            <div class="card-header">
                <p>A PHP script is executed on the server, and the plain HTML result is sent back to the browser.</p>
            </div>
          <div class="card-body">
           <h4>Basic PHP syntax</h4>
           A PHP script can be placed anywhere in the document. <br>
           A PHP script starts and ends with "<"?"php"   "?">": <br><br>
           <p>The default file extension for PHP files is ".php".</p>
           <p>A PHP file normally contains HTML tags, and some PHP scripting code.</p><br>
           <p>Below, we have an example of a simple PHP file, with a PHP script that uses a built-in PHP function "echo" to</p><br>
           <p>output the text "Hello World!" on a web page:</p>

           <div class="row">
            <div class="col-md-6">
                <textarea name="" id="" cols="80" rows="5">
                        <h1>My first PHP page</h1>
                        
                        < ?php
                        echo "Hello World!";
                        ?>           
               </textarea>
                     <form action="" method="POST">
                            <input type="submit" name="sub3" value="Test Yourself" class="btn btn-success mt-2">
                    </form>
                        <?php

                        if(isset($_POST['sub3'])){
                          echo "<h2>My first PHP PAGE</h2>";
                          
                          echo "Hello World!";
                        }
                        ?>
            </div>
            <div class="col-md-6">
                <div class="result">
                
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