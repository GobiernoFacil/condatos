<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title;?> </title>
        <meta name="description" content="<?php echo $description;?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--tw card-->
        <?php include "includes/tw.php";?>
		<!--fb-->
        <?php include "includes/fb.php";?><link rel="shortcut icon" href="img/favicon.png">
        <link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css" />
		<!-- opensans-->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body class="<?php echo $body_class;?>">
    
<?php include "includes/nav.php";?>