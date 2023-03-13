<?php
    include("connect.php");
  
    $q= "select * from fact.fact_table where type = \"code\"";
    $query=mysqli_query($con,$q);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="styles.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/favicon.png">

    <title>Facts Website </title>
</head>

<body>

    <!-- ======= Navbar ======= -->
    <nav class="navbar navbar-dark bg-dark sticky-top" aria-label="First navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Facts - Website</a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarsExample01">

                <div class="navbar-collapse collapse" id="navbarsExample01">

                    <ul class="navbar-nav me-auto mb-2">
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                          </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="code.php">Coding</a></li>
                                <li><a class="dropdown-item" href="history.php">History</a></li>
                                <li><a class="dropdown-item" href="science.php">Science</a></li>
                                <li><a class="dropdown-item" href="food.php">Food</a></li>
                                <li><a class="dropdown-item" href="nature.php">Nature</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add.php">Contribute a Fact</a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>

        <h1 class="display-5 fw-bold px-4 py-5 my-5 text-center">CODING FACTS</h1>



        <!-- display the fact -->
        <div id="facts">
      
            <?php
        while ($qq=mysqli_fetch_array($query)) 
                {
            ?>
            <div class="wrapper">
            <div class="card-bg">
             <div class="card">
             <div class="card-img">
            <img calss="headshot" src="images/favicon.png">
            </div> 
            <div class="card-inner">

                        <?php echo $qq['data']; ?>

            <br>
            </div>
             </div>
          
         </div>
      </div>
            <?php
            }
            ?>
           
        
        </div>


        <!-- ======== Footer ======= -->

        <footer style="margin-top:200px; padding-top:25px; padding-bottom:25px; ;" aria-label="Site Footer" class="bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 text-white">
        <div class="mx-auto max-w-2xl text-center">
                <p class="text-2xl font-extrabold sm:text-4xl "> 
                    Contact Us!<br>
                    <hr>
                    <br>
                    Manasvi-manasvi@gmail.com<br>          Sharvari-sharvari@gmail.com <br>        Vinita-vinita@gmail.com
                </p>
    
                
            </div>
    </footer>

</body>

</html>