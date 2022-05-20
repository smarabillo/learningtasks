<?php $page = (isset($_GET ['page']) && $_GET['page'] !='') ? $_GET['page'] : '';?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About Me</title>
        <style>
        <?php include 'CSS/style.css'; ?>
        </style> 
    </head>
    <body>
        <div id="wrapper">
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
            <a  href="https://facebook.com/smarabillo" target="_blank">
            <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a  href="https://twitter.com/smarabillo" target="_blank">
            <ion-icon name="logo-twitter"></ion-icon>
            </a>
            <a  href="https://www.instagram.com/smarabillo/" target="_blank">
            <ion-icon name="logo-instagram"></ion-icon>
            </a>
        </div>
        <div class="wrapper1"></div>
        <div class="wrapper2">
            <p>Hey there! my name is Shemrei Marabillo. I am an aspiring Software Engineer currently on my first year as an IT student in USLS. Being a Software Engineer
            is a chance to help other people through the power of technology.
            Having this as a job gives engineers the power to influence other peoples life through programs that could help them with day to day tasks. 
            Software Engineering is an expanding occupation, which means that more and more jobs are opening up for this position everyday.  
            I've been in love with technology for as long as I can remember. I am passionate about my field and I want to become successful in this line
            of work. Get to know me through my socials below</p>
        </div>
            
    </body>     
</html>