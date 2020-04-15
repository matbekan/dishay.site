<?php
if(!empty($_GET['page'])) {
    $load_file = $_GET['page'];
} else {
    $load_file = 'home';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>DISHADY</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="dishady.site" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

	
	<!-- css files -->


	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all"><!-- slider css -->

    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    
    
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->

	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
	<!-- //google fonts -->
	  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<body id="page-<?php echo $load_file; ?>">
		<div id="wrapper">
        <?php include("pages/header.php"); ?>
        <?php include("pages/" . $load_file . ".php"); ?>
        <?php include("pages/footer.php"); ?>
    	</div>



       
      
<script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
</script>

</body>

</html>