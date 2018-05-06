<?php

     // Get IP Address 
     $ip = file_get_contents('https://api.ipify.org');

     // Get information 
        require_once 'Mobile_Detect.php';
        $detect = new Mobile_Detect;

        $type = '';
        if( $detect->isMobile()){
            $type = "Mobile";
        }
        elseif(!$detect->isMobile()){
            $type = "Computer";
        }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Your Info</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Start include css files -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <!-- End include css files -->

        <!-- Start include js files -->
            <script src="js/backend.js"></script>
        <!-- End include js files -->
    </head>
    <body>
        <div class="body">
            <div class="info text-center container">
                <div class="box">
                    <h1><span class="span-data">IP Address</span> <span> <?php  echo $ip;?></span></h1>
                    <h1><span class="span-data">Local IP</span>  <span id="demo"></span></h1>
                    <h1>This is a <?php echo $type; ?></h1>
                     <h3> <?php print_r($detect->setUserAgent()); ?> </h3>
                </div>
            </div>
        </div>
    </body>
</html>