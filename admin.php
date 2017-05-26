<?php
session_start();
require 'config.php';
?>
<html lang="en">
    <head>
        <title>Home</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/custom.css" />

    </head>
    <body>
        <div class="wrapper">
        
        <?php require("adminHeader.php");?>
            
        <div class="col-md-offset-2 col-md-8 col-md-offset-2 alert alert-info">
            <h3 class="text-center">Welcome to the Online Examination Portal</h3><br />
        </div>
        <div class="push"></div>
        </div>
        
        <?php require ("footer.php"); ?>
        
    </body>
</html>
