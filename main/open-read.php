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
                <h3>PHP file open/read/close</h3>
                <hr>
                <h2>PHP Open File - fopen()</h2>
                <p>A better method to open files is with the fopen() function. 
                  This function gives you more options than the readfile() function</p>
                </div>
                
                <p class="p-2">
                 The first parameter of fopen() contains the name of the file to be opened and the second parameter specifies in which mode the file should be opened. The following example also generates a
                  message if the fopen() function is unable to open the specified file:
                </p>
                <div class="card">
                    <div class="card-header">
                        Example
                    </div>
                    <div class="card-body">
                        <textarea  cols="90" rows="5">
                        < ?php
                        $myfile = fopen("test.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("test.txt"));
                        fclose($myfile); 
                        ?>
                        </textarea>
                    <form action="" method="POST">
                            <input type="submit" name="sub3" value="Test Yourself" class="btn btn-success mt-2">
                    </form>
                        <?php

                        if(isset($_POST['sub3'])){

                            $myfile = fopen("test.txt", "r") or die("Unable to open file!");
                            echo fread($myfile,filesize("test.txt"));
                            fclose($myfile);
                        }
                        ?>
                        <div class="card">
                            <div class="card-header">
                            It's a good programming practice to close all files after you have finished with them. You don't want an open file running around on your server taking up resources!
                            </div>
                        </div>
                    </div>
                </div>
                <p class="p-2"><i class="font-weight-bold">Tip</i>: The fread() and the fclose() functions will be explained below.

                The file may be opened in one of the following modes:</p>
                <img src="../assets/image/1.jpg" class="p-3" alt="not imag">
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