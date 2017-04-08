<?php 
include('../includes/footer.php');
include('../includes/header.php');

 ?>


<!DOCTYPE html>


<html>

<head>
	<title>Education</title>


<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Footer Style -->  
	<link rel="stylesheet" type="text/css" href="../css/footer-distributed.css">

	<!-- Panel Style -->
	<link rel="stylesheet" type="text/css" href="../css/main.css"> 

	<!-- Animate -->
	<link rel="stylesheet" type="text/css" href="../css/animate.css">


	<!-- Latest compiled and minified JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
	<script src="https://use.fontawesome.com/b3e68927bc.js"></script>



      <script>
        $(function () {
          $('#myTab a:first').tab('show')
        })
      </script>

</head>


<body>

<?php 
  
  head("../", "../pages/Education.php", "../pages/Interests.php","../pages/Photos.php","../pages/Links.php","../pages/Contact.php");

 ?>

 <div class="container">
 	<div class="jumbotron">

       <ul class="nav nav-tabs" id="myTab" role="tablist">
        <div style="font-size: 30px; font-weight: bold" >Educational Qualification</div>
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#ssc" role="tab" aria-controls="ssc">SSC</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#hsc" role="tab" aria-controls="hsc">HSC</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#university" role="tab" aria-controls="university">University</a>
        </li>
         
      </ul>

        <div class="tab-content">

		        <div class="tab-pane active" id="ssc" role="tabpanel">
		        	<table class="table table-striped">
		        		<thead>
		        			<tr>
		        				<th>#</th>
		        				<th>Details</th>
		        			</tr>
		        		</thead>
		        		<tbody>
		        			<tr>
		        				<th scope="row">School Name</th>
		        				<td>Hatshira Lakshmipur High School</td>
		        			</tr>
		        			<tr>
		        				<th scope="row">Group</th>
		        				<td>Science</td>
		        			</tr>

		        			<tr>
		        				<th scope="row">Subjects</th>
		        				<td>
		        					<ol>
		        						<li>Bangla</li>
		        						<li>English</li>
		        						<li>Math(General)</li>
		        						<li>Higher Math(Optional)</li>
		        						<li>Biology</li>
		        						<li>Chemistry</li>
		        						<li>Physics</li>
		        						<li>Social Science</li>
		        						<li>Religion</li>
		        					</ol>
		        				</td>


		        			</tr>

		        			<tr>
		        				<th scope="row">Exam Session</th>
		        				<td>2007-2008</td>
		        			</tr>

		        			<tr>
		        				<th scope="row">Passing Year</th>
		        				<td>2009</td>
		        			</tr>

		        			<tr>
		        				<th scope="row">Board</th>
		        				<td>Rajshahi</td>
		        			</tr>

		        			<tr>
		        				<th scope="row">Roll</th>
		        				<td>120054</td>
		        			</tr>
		        			<tr>
		        				<th scope="row">GPA</th>
		        				<td>5.00</td>
		        			</tr>

		        		</tbody>
		        	</table>
		        </div>

		        <div class="tab-pane" id="hsc" role="tabpanel">

		        <table class="table table-striped">
		        	<thead>
		        		<tr>
		        			<th>#</th>
		        			<th>Details</th>
		        		</tr>
		        	</thead>
		        	<tbody>
		        		<tr>
		        			<th scope="row">College Name</th>
		        			<td>Sirajganj Government College</td>
		        		</tr>
		        		<tr>
		        			<th scope="row">Group</th>
		        			<td>Science</td>
		        		</tr>

		        		<tr>
		        			<th scope="row">Subjects</th>
		        			<td>
		        				<ol>
		        					<li>Bangla</li>
		        					<li>English</li>
		        					<li>Math</li>
		        					<li>Biology</li>
		        					<li>Chemistry</li>
		        					<li>Physics</li> 
		        				</ol>
		        			</td>


		        		</tr>

		        		<tr>
		        			<th scope="row">Exam Session</th>
		        			<td>2009-2010</td>
		        		</tr>

		        		<tr>
		        			<th scope="row">Passing Year</th>
		        			<td>2011</td>
		        		</tr>

		        		<tr>
		        			<th scope="row">Board</th>
		        			<td>Rajshahi</td>
		        		</tr>

		        		<tr>
		        			<th scope="row">Roll</th>
		        			<td>109820</td>
		        		</tr>
		        		<tr>
		        			<th scope="row">GPA</th>
		        			<td>4.60</td>
		        		</tr>

		        	</tbody>
		        </table>
		        	
		        </div>

		        <div class="tab-pane" id="university" role="tabpanel">
		        	<table class="table table-striped">
		        		<thead>
		        			<tr>
		        				<th>#</th>
		        				<th>Details</th>
		        			</tr>
		        		</thead>
		        		<tbody>
		        			<tr>
		        				<th scope="row">University Name</th>
		        				<td>University Of Rajshahi</td>
		        			</tr>
		        			<tr>
		        				<th scope="row">Department</th>
		        				<td>Computer Science & Engineering</td>
		        			</tr>

		        			<tr>
		        				<th scope="row">Courses</th>
		        				<td>
		        					<ul style="list-style-type: none">
		        						<li>
		        							<table class="table">
		        								<thead>
		        									<tr> 
		        									    <th>#</th>
		        										<th>1st Year</th>
		        										<th>2nd Year</th>
		        										<th>3rd Year</th>
		        										<th>4th Year</th>
		        									</tr>
		        								</thead>
		        								<tbody>
		        									<tr>
		        									    <th>1st Semester</th>
		        										<td>
		        											<ol>
		        												<li>Technical English</li>
		        												<li>Algebra, Trigonometry & Vector.</li>
		        												<li>Physical & Inorganic Chemistry.</li>
		        												<li>Electrical Circuit & Electronics.</li>
		        												<li>Electrical Circuit & Electronics Lab.</li>
		        												<li>Computer Fundamentals.</li>
		        												<li>Computer Maintenance & Engineering Drawing Lab</li>
		        												<li>Computer Programming With C</li>
		        												<li>Computer Programming With C Lab</li>
		        											</ol>
		        										</td>
		        										<td>
		        											<ol>
		        												<li>Industrial Management and Accountancy</li>
		        												<li>Theory Of Statistics</li>
		        												<li>Matrices ans Differential Equation</li>
		        												<li>Digital System Design</li>
		        												<li>Digital System Design Lab.</li>
		        												<li>Data Structure</li>
		        												<li>Data Structure Lab</li>
		        												<li>Discrete Mathematics.</li>
		        												<li>Software Development Lab</li>
		        											</ol>
		        										</td>
		        										<td>
		        											<ol>
		        												<li>System Analysis and Design</li>
		        												<li>Database Management System</li>
		        												<li>Database Management System Lab</li>
		        												<li>Digital Signal Processing.</li>
		        												<li>Digital Signal Processing Lab.</li>
		        												<li>Compiler Design.</li>
		        												<li>Compiler Design Lab</li>
		        												<li>Computer Networks</li>
		        												<li>Computer Networks Lab</li>
		        												<li>Software Development Lab (III)</li>
		        											</ol>
		        										</td>
		        										<td>
		        											<ol>
		        												<li>Parallel Processing and Distributed System.</li>
		        												<li>Parallel Processing and Distributed System Lab</li>
		        												<li>Theory Of Computation.</li>
		        												<li>Computer Simulation and Modeling.</li>
		        												<li>Computer Simulation and Modeling Lab.</li>
		        												<li>Computer Peripherals and Interfacing.</li>
		        												<li>Computer Peripherals and Interfacing Lab</li>
		        												<li>Digital Image Processing</li>
		        												<li>Digital Image Processing Lab</li>
		        											</ol>
		        										</td>

		        									</tr>

		        									<tr>
		        									    <th>2nd Semester</th>
		        										 <td>
		        										 	<ol>
		        										 		<li>Economics</li>
		        										 		<li>Statistics for Engineers.</li>
		        										 		<li>Differential and Integral Calculus</li>
		        										 		<li>Applied Electricity and Magnetism.</li>
		        										 		<li>Introduction to Digital Electronics.</li>
		        										 		<li>Introduction to Digital Electronics Lab.</li>
		        										 		 
		        										 		<li>Object Oriented Programming With C++</li>
		        										 		<li>Object Oriented Programming With C++ Lab</li>
		        										 	</ol>
		        										 </td>
		        										 <td>
		        										 	<ol>
		        										 		<li>Cyber and Intellectual property Law</li>
		        										 		<li>Numerical Methods.</li>
		        										 		<li>Numerical Methods Lab.</li>
		        										 		<li>Linear Algebra.</li>
		        										 		<li>Object Oriented Design and Design Patterns Using java</li>
		        										 		<li>Object Oriented Design and Design Patterns Using java Lab</li>
		        										 		<li>Design and Analysis of Algorithm.</li>
		        										 		<li>Design and Analysis of Algorithm Lab</li>
		        										 		<li>Computer Architecture and Organisation.</li>
		        										 		<li>Computer Architecture and Organisation Lab.</li>
 																<li>Software Development Lab (II)</li>
		        										 	</ol>
		        										 </td>
		        										 <td>
		        										 	<ol>
		        										 		<li>Software Engineering.</li>
		        										 		<li>Software Engineering Lab.</li>
		        										 		<li>Computer Graphics</li>
		        										 		<li>Computer Graphics Lab.</li>
		        										 		<li>Microprocessor and Assembly Language</li>
		        										 		<li>Microprocessor and Assembly Language Lab.</li>
		        										 		<li>Operating System and System Programming</li>
		        										 		<li>Operating System and System Programming Lab</li>
		        										 		<li>Communication Engineering.</li>
		        										 		<li>Communication Engineering Lab.</li>
		        										 	</ol>
		        										 </td>
		        										 <td>
		        										 	<ol>
		        										 		<li>Artificial Intelligence</li>
		        										 		<li>Artificial Intelligence Lab</li>
		        										 		<li>E-Commerce</li>
		        										 		<li>E-Commerce Lab</li>
		        										 		<li>Cryptography and Network Secuirity.</li>
		        										 		<li>Cryptography and Network Secuirity Lab.</li>
		        										 		<li>Multimedia System.</li>
		        										 		<li>Multimedia System Lab.</li>
		        										 		 
		        										 	</ol>
		        										 </td>

		        									</tr>
		        								</tbody>
		        							</table>
		        						</li>
		        					</ul>
		        				</td>


		        			</tr>

		        			<tr>
		        				<th scope="row">Session</th>
		        				<td>2012-2013</td>
		        			</tr>

		        			 
		        			<tr>
		        				<th scope="row">Roll</th>
		        				<td>13115412</td>
		        			</tr>
		        			<tr>
		        				<th scope="row">CGPA(1.1 - 4.1)</th>
		        				<td>3.00</td>
		        			</tr>

		        		</tbody>
		        	</table>
		        	
		        </div>

        </div>
 		
 	</div>
 </div>
   

 
<?php 
  
  foot("../", "../pages/Education.php", "../pages/Interests.php","../pages/Photos.php","../pages/Links.php","../pages/Contact.php");

 ?>

</body>



</html>