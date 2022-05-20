<?php $page = (isset($_GET ['page']) && $_GET['page'] !='') ? $_GET['page'] : '';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SBM PORTFOLIO</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">  
        <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
        <link rel="stylesheet"  href="=style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet">
        <style>
        <?php include 'CSS/style.css'; ?>
        </style>
        
    </head>
    <body>
        <header>
        <div id="nav"> 
                <h1><span>SBM |</span>| Portfolio</h1>
                <a href="index.php?page=about me">About Me</a>
                <a href="index.php?page=my works">My Works</a>
                <a href="index.php">Home</a>   
                
            <?php  
                switch($page) {
                case "my works":
                include "my works.php";
                break;
                case "about me":
                include "about me.php";
               break;
                default:
                include "default.php";
                break;
            }
            ?>            
        </header>
    </body>
</html>