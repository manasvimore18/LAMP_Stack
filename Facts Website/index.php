<?php
    include("connect.php");
  
    $q= "select * from employee_details.personal_details";
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

    <!-- ========== Section 1 =========== -->

    <div class="text-center">

        <div class="px-4 py-5 my-5 text-center" id="hero" style="text-align:center;">
            <div class="contain">
                <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16">

            <path
                d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z" />
        </svg>
            </div>
            <h1 class="display-5 fw-bold">Facts-Website</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">This is a Facts Website!<br>
                    You can read new and unique facts! <br>
                    This website provides you with inspiring, fun and motivational facts. <br>
                    If you want to contribute then click on Contribute button and add unique facts. <br>
                    <i>Happy Reading!</i></p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                </div>
            </div>
        </div>


        <!-- genre/category section starts -->
        <section id="genre">
            <div class="container">
                <div class="genre-row row">
                    <div class="gen-card col-lg-2">
                        <div class="genre-card cards">
                            <a class="genre-link" href="code.php"><img class="genre-img" src="images/computer-science.png" alt="">
                                <h3>CODING</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="genre-card cards">
                            <a class="genre-link" href="food.php"><img class="genre-img" src="images/fast-food.png" alt="">
                                <h3>FOOD</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="genre-card cards">
                            <a class="genre-link" href="history.php"><img class="genre-img" src="images/parchment.png" alt="">
                                <h3>HISTORY</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="genre-card cards">
                            <a class="genre-link" href="science.php"><img class="genre-img" src="images/chemistry.png" alt="">
                                <h3>SCIENCE</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="genre-card cards">
                            <a class="genre-link" href="nature.php"><img class="genre-img" src="images/earth.png" alt="">
                                <h3>NATURE</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="genre-card cards">
                            <a class="genre-link" href="add.php"><img class="genre-img" src="images/surprise-box.png" alt="">
                                <h3>CONTRIBUTE</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- genre/category section ends -->


         <!-- ======== Footer ======= -->

         <footer style="margin-top:0; padding-top:25px; padding-bottom:25px; ;" aria-label="Site Footer" class="bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 text-white">
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