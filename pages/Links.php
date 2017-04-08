<?php 
include('../includes/footer.php');
include('../includes/header.php');

 ?>


<!DOCTYPE html>


<html>

<head>
	<title>Important Links</title>


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

        <div style="font-size: 30px; font-weight: bold" >Important Links</div>

        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#learn" role="tab" aria-controls="learn">Programming Languages</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#tools" role="tab" aria-controls="tools">Software Tools</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#blogl" role="tab" aria-controls="blogl">Blog</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#algo" role="tab" aria-controls="algo">Algorithms</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#oj" role="tab" aria-controls="oj">Online Judge</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#tutorial" role="tab" aria-controls="tutorial">Tutorials</a>
        </li>
         

         
      </ul>

        <div class="tab-content">

		        <div class="tab-pane active" id="learn" role="tabpanel">

		        	<table class="table table-striped">
		        		<thead>
		        			<tr>
		        				<th>
		        					C
		         				</th>

		        				<th>
		        					C++
		        				</th>

		        				<th>
									C#
		        				</th>

		        				<th>
		        					Java
		        				</th>

		        				<th>
		        					PHP
		        				</th>
		        				<th>
		        					Python
		        				</th>
		        			</tr>
		        		</thead>


		        		<tbody>


		        		   <tr>
		        		   	<td>
		        		   		<ul>
		        		   		     <li>
		        		   		     	<a href="https://www.amazon.com/Teach-Yourself-C-Herbert-Schildt/dp/0078823110">Teach Yourself C</a>
		        		   		     </li>
		        		   			 <li>
		        		   			 	<a href="https://www.mhprofessional.com/9780072121247-usa-c-the-complete-reference-group">C: The Complete Reference</a>
		        		   			 </li>
		        		   			
		        		   			 <li>
		        		   			 	<a href="http://en.cppreference.com/w/c">C Reference</a>
		        		   			 </li>
		        		   			 <li>
		        		   			 	<a href="https://www.tutorialspoint.com/cprogramming/">Tutorial's point</a>
		        		   			 </li>
		        		   		</ul>
		        		   	</td>

		        		   	<td>
		        		   	   <ul>
		        		   		     <li>
		        		   		     	<a href="https://books.google.com.my/books/about/Teach_Yourself_C++.html?id=g7P5Q6PJ9gIC">Teach Yourself C++</a>
		        		   		     </li>
		        		   			 <li>
		        		   			 	<a href="http://en.cppreference.com/">Cpp Reference
		        		   			 </li>
		        		       </ul>
		        		   			  
		        		   	</td>

		        		   	<td>
		        		   		<ul>
		        		   		 <li>
		        		   		 	<a href="https://msdn.microsoft.com/en-us/library/618ayhy6.aspx">C# Refence</a>
		        		   		 </li>
		        		   		 </ul>
		        		   	</td>
		        		   	
		        		   	  
		        		   	<td>
		        		   		<ul>
		        		   		<li>
		        		   			<a href="https://docs.oracle.com/javase/7/docs/api/">java Documentation</a>
		        		   		</li>
		        		   		</ul>
		        		   	</td>
		        		   	
		        		   	<td>
		        		   		<ul>
		        		   			<li>
		        		   				<a href="http://php.net/docs.php">PHP Documentaion</a>
		        		   			</li>
		        		   		</ul>
		        		   	</td>
		        		   	<td>
		        		   		<ul>
		        		   			<li>
		        		   				<a href="https://www.python.org/">Python Org</a>
		        		   			</li>
		        		   		</ul>
		        		   	</td>

		        		   </tr>
		        			
		        		</tbody>

		        	</table>
		        	 


		        </div>



		        <div class="tab-pane" id="tools" role="tabpanel">
		        	 <table class="table table-striped">

		        	 	<thead>
		        	 		 <th>
		        					C
		         				</th>

		        				<th>
		        					C++
		        				</th>

		        				<th>
									C#
		        				</th>

		        				<th>
		        					Java
		        				</th>

		        				<th>
		        					PHP
		        				</th>
		        				<th>
		        					Python
		        				</th>
		        	 	</thead>


		        	 	<tbody>
		        	 		 <tr>
		        	 		 	<td>
		        	 		 		<ul>
		        	 		 			<li>
		        	 		 				<a href="http://www.codeblocks.org/downloads">Codeblocks</a>
		        	 		 			</li>
		        	 		 		</ul>
		        	 		 	</td>
		        	 		 	<td>
		        	 		 		<ul>
		        	 		 			<li>
		        	 		 				<a href="http://www.codeblocks.org/downloads">Codeblocks</a>
		        	 		 			</li>
		        	 		 		</ul>
		        	 		 	</td>

		        	 		 	<td>
		        	 		 		<ul>
		        	 		 			<li>
		        	 		 				<a href="https://www.visualstudio.com/downloads/">Visual Studio </a>
		        	 		 			</li>
		        	 		 		</ul>
		        	 		 	</td>


		        	 		 	<td>
		        	 		 		<ul>
		        	 		 			<li>
		        	 		 				<a href="https://www.eclipse.org/downloads/?">Eclipse</a>

		        	 		 			</li>
		        	 		 			<li>
		        	 		 				<a href="https://netbeans.org/downloads/">Netbeans</a>
		        	 		 			</li>
		        	 		 		</ul>
		        	 		 	</td>
		        	 		 	<td>
		        	 		 		<ul>
		        	 		 			<li>
		        	 		 				<a href="https://www.apachefriends.org/download.html">Xampp</a>
		        	 		 			</li>
		        	 		 			<li>
		        	 		 				<a href="https://wampserver-64bit.en.softonic.com/">Wamp</a>
		        	 		 			</li>
		        	 		 		</ul>
		        	 		 	</td>
		        	 		 	<td>
		        	 		 		<ul>
		        	 		 			<li>
		        	 		 				<a href="https://www.python.org/downloads/">Python</a>
		        	 		 			</li>
		        	 		 		</ul>
		        	 		 	</td>
		        	 		 </tr>

		        	 	</tbody>
		        	 </table>

		        	  <h3>Some Editor</h3>
		        	 <ul>
		        	 	<li>
		        	 		<a href="https://notepad-plus-plus.org/download/v7.3.3.html">Notepad++</a>
		        	 	</li>
		        	 	<li>
		        	 		<a href="https://www.sublimetext.com/3">Sublime Text</a>
		        	 	</li>

		        	 	<li>
		        	 		<a href="https://www.jetbrains.com/phpstorm/download/#section=windows">PhpStorm</a>
		        	 	</li>
		        	 </ul>
		        </div>

		        <div class="tab-pane" id="blogl" role="tabpanel">
		        	 
		        	 <h3>Some Blog Sites</h3>

		        	 <ul>
		        	 	<li>
		        	 		<a href="http://www.shafaetsplanet.com/planetcoding/">Shafayet's Planet</a>
		        	 	</li>

		        	 	<li>
		        	 		<a href="https://www.topcoder.com/blog/">Topcoder Blog</a>
		        	 	</li>

		        	 	<li>
		        	 		<a href="https://www.topcoder.com/members/tourist/">Tourist's Blog</a>
		        	 	</li>

		        	 	<li>
		        	 		<a href="http://www.joelonsoftware.com/">Joel on Software</a>
		        	 	</li>

		        	 	<li>
		        	 		<a href="http://blog.codinghorror.com/">Coding Horror</a>
		        	 	</li>

		        	 	<li>
		        	 		<a href="http://www.gamasutra.com/">Gamasutra</a>
		        	 	</li>
		        	 	
		        	 </ul>
		        	
		        </div>

		        <div class="tab-pane active" id="algo" role="tabpanel">
		        	  <h3>Some Sites for Algorithm learning</h3>
		        	 <ul>
		        	 	<li>
		        	 		<a href="http://www.geeksforgeeks.org/">GeeksforGeeks</a>
		        	 	</li>
		        	 	<li>
		        	 		<a href="https://e-maxx.ru/algo/">E-Maxx</a>
		        	 	</li>
		        	 	<li>
		        	 		<a href="http://ce.bonabu.ac.ir/uploads/30/CMS/user/file/115/EBook/Introduction.to.Algorithms.3rd.Edition.Sep.2010.pdf">Introduction to Algorithm</a>
		        	 	</li>
		        	 	 
		        	 </ul>
		        </div>

		        <div class="tab-pane" id="oj" role="tabpanel">
		        	 
		        	 	  <h3>Online Judge</h3>
		        	 <ul>
		        	 	<li>
		        	 		<a href="http://codeforces.com/">Codeforces</a>
		        	 	</li>
		        	 	<li>
		        	 		<a href="https://www.topcoder.com ">Topcoder</a>
		        	 	</li>

		        	 	<li>
		        	 		<a href="codechef.com">Codechef</a>
		        	 	</li>
		        	 	<li>

		        	 		<a href="http://uva.onlinejudge.org/">UVa</a>
		        	 	</li>
		        	 	<li>
		        	 		<a href="http://lightoj.com/login_main.php?url=index.php">LightOJ</a>
		        	 	</li>
		        	 	<li>
		        	 		<a href="https://a2oj.com/">A2 Online Judge</a>
		        	 	</li>

		        	 	<li>
		        	 		<a href="https://vjudge.net ">Virtual Judge</a>
		        	 	</li>
		        	 	 
		        	 </ul>
		        </div>

		        <div class="tab-pane" id="tutorial" role="tabpanel">
		        	 
		        		  <h3>Tutorials</h3>
		        	<ul>
		        		<li>
		        			<a href="https://thenewboston.com/">Thenewboston</a>
		        		</li>
		        		<li>
		        			<a href="https://laracasts.com/">Laracast</a>
		        		</li>

		        		<li>
		        			<a href="https://www.udemy.com/courses/">Udemy</a>
		        		</li>
		        		<li>

		        			<a href="https://ocw.mit.edu/index.htm">MIT open courseware</a>
		        		</li>
		        		 
		        		 
		        	</ul>
		        </div>

        </div>
 		
 	</div>
 </div>
 
<?php 
  
  foot("../", "../pages/Education.php", "../pages/Interests.php","../pages/Photos.php","../pages/Links.php","../pages/Contact.php");

 ?>

</body>



</html>