<?php 
include('includes/footer.php');
include('includes/header.php');

 ?>


<!DOCTYPE html>


<html>

<head>
	<title>Home</title>


<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Footer Style -->  
	<link rel="stylesheet" type="text/css" href="css/footer-distributed.css">

	<!-- Panel Style -->
	<link rel="stylesheet" type="text/css" href="css/main.css"> 

	<!-- Home view Style -->
	<link rel="stylesheet" type="text/css" href="css/home.css"> 

	<!-- Animate -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">


	<!-- Latest compiled and minified JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
	<script src="https://use.fontawesome.com/b3e68927bc.js"></script>

</head>


<body>

<?php 
  
  head("index.php", "pages/Education.php", "pages/Interests.php","pages/Photos.php","pages/Links.php","pages/Contact.php");

 ?>

<div class="container">
        
        <div class="one">
	        <div class="inner">
				<img src="images/profile.png" align="middle" class="image animated bounceInDown">
				<div class="details">
				     <br><br>
					 <div class="name animated bounceInUp"> Md. Shohag Mia</div><br>
					  
					 	<div class="prog animated bounceInLeft">Programmer</div>
					 	<div class="dot1 animated bounceInRight">.</div>
					 	<div class="eng animated bounceInLeft">Software Engineer</div>
					 	<div class="dot2 animated bounceInRight">.</div>
					 	<div class="dev animated bounceInLeft">Developer</div>
					  
				</div>
	    	</div>
    	</div>
    	 
     
    <section class="two border-radius shadow" id="folding">
	     
		        <div class="inner" >

			    	 <section class="hi">
			    	 	<div> <h2>Hi</h2></div>
                        <p>I'm a software engineer and developer. Love to develop cool things for web, 
                        mobile and desktop . </p>
			    	 </section>

            		    <div class="what">
		                     <div> <h2>What I can do.</h2></div>

					    	 <section>
					    	 	 <h3>Design what you want.</h3> 
		                        <p>I like to keep it simple. My goals are to focus on typography, content and conveying the message that you want to send.</p>
					    	 </section>

					    	 <section>
					    	 	 <h3>Develop what you need.</h3> 
		                        <p>I'm a software developer, so I know how to create software to run across devices using the latest technologies available.</p>
					    	 </section>

			    	    </div>
                    
			    	 
		    	</div>

		    	 
         
    </section>  

 

    
</div>

<?php 
  
  foot("index.php", "pages/Education.php", "pages/Interests.php","pages/Photos.php","pages/Links.php","pages/Contact.php");

 ?>

</body>



</html>