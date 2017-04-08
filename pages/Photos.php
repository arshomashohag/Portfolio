<?php 
include('../includes/footer.php');
include('../includes/header.php');
include('../includes/slider.php');

 ?>


<!DOCTYPE html>


<html>

<head>
	<title>My Photos</title>
    
    <meta name="viewport" content="width = 1050, user-scalable = no" />

<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Footer Style -->  
	<link rel="stylesheet" type="text/css" href="../css/footer-distributed.css">

	<!-- Panel Style -->
	<link rel="stylesheet" type="text/css" href="../css/album.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css"> 

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
	 <div class="row"> 
	     <div class="col-sm-2 left">
               <table class="table table-hover">
		        	<thead>
		        	<td class="albumhead">All Albums</td>
		        	</thead>
		        	<tbody> 
		        	    <?php
					        for ($i=1; $i <=15 ; $i++) { 

					        	 echo '<tr><td><a >Album'.$i.'</a></td></tr>';
					        }
					        ?> 
                    </tbody>
		        </table>
	     </div>

	     <div class="col-sm-10">
			 <div class="albumdiv">
			 	<span class="albumhead">My Photo Album</span>
			 </div>
			   <?php 

			   slider();


			    ?>

	</div>

	</div>

</div>
 
<?php 
  
  foot("../", "../pages/Education.php", "../pages/Interests.php","../pages/Photos.php","../pages/Links.php","../pages/Contact.php");

 ?>

</body>



</html>