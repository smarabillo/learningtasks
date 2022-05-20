<?php $page = (isset($_GET ['page']) && $_GET['page'] !='') ? $_GET['page'] : '';?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home Page</title>
        <style>
        <?php include 'CSS/style.css'; ?>
        </style>
        
    </head>
    <body>
        <div id="header">
            <h1>Welcome <span>Home</span></h1>
            <p>Hi I am Shemrei, check out my Website!</p>
        </div>
    </body>
</html>