<?php
@include('inc/header.php')
?>
    <div class="row">
        <div class="col-md-2">
            <!-- MENU SIDEBAR-->
            <?php
            @include('inc/sidebar.php')
            ?>
            <!-- End sidebar -->
            
        </div>
        <div class="col-md-10">
            <div class="container">
            <div class="main-content">
                    <div class="card card-shadow mt-2 mb-5">
                        <div class="car-body mt-4 ml-4 mb-4">
                        <h3>PHP Create/Write</h3>
                         <p class="p-3">
                         The fopen() function is also used to create a file. Maybe a little confusing, but in PHP, a file is created using the same function used to open files.
                         If you use fopen() on a file that does not exist, it will create it, given that the file is opened for writing (w) or appending (a).
                         </p>
                         <div class="card">
                             <div class="card-header">
                                 example <br>
                                 <textarea  cols="80" rows="2">
                                     $myfile = fopen("testfile.txt", "w")
                                 </textarea>
                             </div>
                         </div>
                         <br>
                         <h3>PHP Write to File - fwrite()</h3>
                         <p>
                         The fwrite() function is used to write to a file.
                        <br>
                        The first parameter of fwrite() contains the name of the file to write to and the second parameter is the string to be written.
                         </p>
                         <div class="card">
                            <div class="card-header">
                                Example <br>
                                Create an Array constant:
                            </div>
                            <div class="card-body">
                                <textarea name="" id="" cols="90" rows="9">
                                < ?php
                                $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
                                $txt = "John Doe\n";
                                fwrite($myfile, $txt);
                                $txt = "Jane Doe\n";
                                fwrite($myfile, $txt);
                                fclose($myfile);
                                ?>
                                </textarea>
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