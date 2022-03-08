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
                <div class="car-body mt-4 ml-4 mb-4 bg-gray">
                    <h3 class="text-center">PHP Install</h3>
                    <hr>
                    <h4>What you need to do ?</h4>
                    <p>
                        .Find a web host with PHP and MySQL support <br>
                        .Install a web server on your own PC, and then install PHP and MySQL
                    </p>
                    <h4>Set up PHP on your own PC</h4>
                    <p>
                        However, if your server does not support PHP, you must: <br>
                        install a web server <br>
                        you can use local server(xampp,wampp) <br>
                        install PHP <br>
                        install a database, such as MySQL <br>
                        The official PHP website (PHP.net) has installation instructions for <a href="http://php.net"> PHP: http://php.net/manual/en/install.php</a>
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