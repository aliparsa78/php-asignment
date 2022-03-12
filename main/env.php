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
                        <h3>PHP $_ENV</h3>
                        <H4>$_ENV — Environment variables</H4>
                        <h5>Description</h5>
                        <p>
                        An associative array of variables passed to the current script via the environment method.
                        <br><br>
                        These variables are imported into PHP's global namespace from the environment under which the PHP parser is running. Many are provided by the shell under which PHP is running and different systems are likely running different kinds of shells, a definitive list is impossible. Please see your shell's documentation for a list of defined environment variables.
                        <br><br>
                        Other environment variables include the CGI variables, placed there regardless of whether PHP is running as a server module or CGI processor.
                        </p>
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