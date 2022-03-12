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
                        <h3>PHP File Upload</h3>
                        
                        <div class="card">
                            <div class="card-header">
                                create the HTML form
                               
                            </div>
                            <div class="card-body">
                                <textarea name="" id="" cols="95" rows="12">
                                <!DOCTYPE html>
                                <html>
                                <body>

                                <form action="upload.php" method="post" enctype="multipart/form-data">
                                Select image to upload:
                                <input type="file" name="fileToUpload" id="fileToUpload">
                                <input type="submit" value="Upload Image" name="submit">
                                </form>

                                </body>
                                </html>
                                </textarea>
                                <br><br>
                                <p>
                                Some rules to follow for the HTML form above:
                                <br><br>
                                Make sure that the form uses method="post"
                                The form also needs the following attribute: enctype="multipart/form-data". It specifies which content-type to use when submitting the form
                                Without the requirements above, the file upload will not work.
                                <br><br>
                                Other things to notice:
                                <br><br>
                                The type="file" attribute of the < input> tag shows the input field as a file-select control, with a "Browse" button next to the input control
                                The form above sends data to a file called "upload.php", which we will create next.
                                </p>
                            </div>
                        </div>
                        <br><br>
                        <div class="card">
                            <div class="card-header">
                            Complete Upload File PHP Script
                               
                            </div>
                            <div class="card-body">
                                <textarea  cols="90" rows="20">
                                < ?php
                                $target_dir = "uploads/";
                                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                                $uploadOk = 1;
                                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                                // Check if image file is a actual image or fake image
                                if(isset($_POST["submit"])) {
                                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                                if($check !== false) {
                                    echo "File is an image - " . $check["mime"] . ".";
                                    $uploadOk = 1;
                                } else {
                                    echo "File is not an image.";
                                    $uploadOk = 0;
                                }
                                }

                                // Check if file already exists
                                if (file_exists($target_file)) {
                                echo "Sorry, file already exists.";
                                $uploadOk = 0;
                                }

                                // Check file size
                                if ($_FILES["fileToUpload"]["size"] > 500000) {
                                echo "Sorry, your file is too large.";
                                $uploadOk = 0;
                                }

                                // Allow certain file formats
                                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                && $imageFileType != "gif" ) {
                                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                $uploadOk = 0;
                                }

                                // Check if $uploadOk is set to 0 by an error
                                if ($uploadOk == 0) {
                                echo "Sorry, your file was not uploaded.";
                                // if everything is ok, try to upload file
                                } else {
                                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                                } else {
                                    echo "Sorry, there was an error uploading your file.";
                                }
                                }
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