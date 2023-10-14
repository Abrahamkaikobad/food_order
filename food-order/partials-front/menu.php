<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body bgcolor="black">
    
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php" id="submit1" class="nav" >Home</a>
                    </li>
                    <li>
                        <a href="categories.php" id="submit1" class="nav">Categories</a>
                    </li>
                    <li>
                        <a href="foods.php" id="submit1" class="nav">Foods</a>
                    </li>
                    <li>
                        <a href="#" id="submit1" class="nav">Contact</a>
                    </li>
                    <li>
                        <a href="login.php" id="submit1" class="nav" ><?php echo "Welcome ". $_SESSION['username']?></a></a>
                    </li>
                    <li>
                        <a href="logout.php" id="submit1" class="nav">log out</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
   
