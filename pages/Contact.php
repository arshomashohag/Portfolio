<?php 
include('../includes/footer.php');
include('../includes/header.php');

 ?>


<!DOCTYPE html>


<html>

<head>
	<title>Contact</title>


<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Footer Style -->  
	<link rel="stylesheet" type="text/css" href="../css/footer-distributed.css">

	<!-- Panel Style -->
	<link rel="stylesheet" type="text/css" href="../css/main.css"> 


	<!-- Contact form style -->
	<link rel="stylesheet" type="text/css" href="../css/contact.css"> 

	<!-- Animate -->
	<link rel="stylesheet" type="text/css" href="../css/animate.css">


	<!-- Latest compiled and minified JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
	<script src="https://use.fontawesome.com/b3e68927bc.js"></script>

</head>


<body>

<?php 
  
  head("../", "../pages/Education.php", "../pages/Interests.php","../pages/Photos.php","../pages/Links.php","../pages/Contact.php");

 ?>



<div class="container">
 	<div class="jumbotron">
           
           <div class="hello animated bounceInDown">
		   <h1 >Say Hello</h1>
		   </div>

			<form method="post" action="{{route('sendmessage')}}" class="cf">
				  <div class="half left cf">
				    <input class="name animated bounceInLeft" type="text"   name="name" placeholder="Name">
				    <input class="email animated bounceInLeft" type="email"   name="email" placeholder="Email address">
				    <input class="subject animated bounceInLeft" type="text"  name="subject" placeholder="Subject">
				  </div>
				  <div class="half right cf">
				    <textarea class="message animated bounceInRight" name="message" type="text"  name="message" placeholder="Message"></textarea>
				  </div>  
				  <input type="submit" value="Send" id="submit" class="animated bounceInUp">
				  <input type="hidden" name="_token" value="{{ Session::token()}}">
			</form>
	</div>

</div>




 
<?php 
  
  foot("../", "../pages/Education.php", "../pages/Interests.php","../pages/Photos.php","../pages/Links.php","../pages/Contact.php");

 ?>

</body>



</html>