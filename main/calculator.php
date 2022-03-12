<?php
if(isset($_POST['sub'])){
    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];
    $button = $_POST['sub'];
    if($button=='+'){
        $ans = $num1+$num2;
    }
    elseif($button=='-'){
        $ans = $num1-$num2;
    }
    elseif($button=='*'){
        $ans=$num1*$num2;
    }
    else{
        $ans=$num1/$num2;
    }
}



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php assignment </title>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style1.css">
    <base href="../inc">
</head>
<body>
    <!-- Navbar go here -->
    <nav>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="main/index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="main/calculator.php">Calculator</a>
        </li> 
    </ul>
    </nav>

    <!-- Main Content -->
    <div class="main">
        <div class="row">
            <div class="col-md-2">
                <?php @include('inc/sidebar.php') ?>
            </div>
            <div class="col-md-10">
                <div class="card mt-5">
                    <div class="card-header" >
                        <h2 class="text-center mt-2">Simple Calculator</h2>    
                    </div>
                    <div class="card-body ">
                        
                            <div class="calculator text-center border shadow" style="width:800px;border-radius:20px;">
                            <div class="row">
                                <div class="col-md-5 text-center ml-5 pl-4 mb-3 mt-3">
                                    <form action="" method="POST">
                                        <div>
                                            <h6>first number: </h6>
                                            <input type="number" name="n1" class="form-control"> 
                                        </div>
                                        <div>
                                            <h6>second number: </h6>
                                            <input type="number" name="n2" class="form-control">
                                        </div>
                                        <input type="submit" value="+" name="sub" class="btn btn-success mt-3" style="width:60px;">
                                        <input type="submit" value="-" name="sub" class="btn btn-success mt-3" style="width:60px;">
                                        <input type="submit" value="*" name="sub" class="btn btn-success mt-3"style="width:60px;">
                                        <input type="submit" value="/" name="sub" class="btn btn-success mt-3"style="width:60px;">
                                    </form>
                                    <br>
                                </div>
                                <div class="col-md-4 mt-3 ml-5">
                                    <div >
                                        <h6>result: </h6>
                                        <input type="number" name="n1" class="form-control " value="<?php echo $ans;  ?>"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</body>
</html>

