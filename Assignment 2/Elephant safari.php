<html>
<head>
<title>Elephant safari</title>

<?php
// Start the session
session_start();
?>

<!--Linking CSS-->
<link rel="stylesheet" href="styles/styles.css">
<link href='https://fonts.googleapis.com/css?family=Armata' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--Linking javascript-->
<script src="js/script.js"></script>

</head>
<body>
<!--Navigation bar-->

	<ul class ='menu'>
	  <li class ='menu'><a href="Homepage.php">Home</a></li>
	  <li class ='dropdown'><a href="tour.php" class="dropbtn">Wildlife Tours</a>
			<div class="dropdown-content">
			  <a href="Leopard safari.php">Leopard safari</a>
			  <a href="Elephant safari.php">Elephant safari</a>
			  <a href="Photography tour.php">Photography tour</a>
			  <a href="Bird watching tour.php">Bird watching tour</a>
			</div></li>
	  <li class ='menu'><a href="accommodation.php">Accommodation</a></li>
	  <li class ='menu'><a href="About us.php">About us</a></li>
	  <li class ='menu'><a href="contact us.php">Contact us</a></li>
	</ul>
	<center><img src = "images/logo.png" width = "22%"></center>
	
	

<!--slide show -->


	<div class="slideshow-container">
	
	
	  <!-- Full-width images with number and caption text -->
	  <div class="mySlides fade" style="display: block;">
		<img src="images/elephant2.jpg" style="width:100%">
	  </div>

	  <div class="mySlides fade">
		<img src="images/elephant1.jpg" style="width:100%">
	  </div>

	  <div class="mySlides fade">
		<img src="images/elephant3.jpg" style="width:100%">
	  </div>
	  
	  <div class="mySlides fade">
		<img src="images/elephant4.jpg" style="width:100%">
	  </div>
	  <!-- Next and previous buttons -->
	  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	  <a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>

	<!-- The dots/circles -->
	<div style="text-align:center">
	  <span class="dot" onclick="currentSlide(1)"></span>
	  <span class="dot" onclick="currentSlide(2)"></span>
	  <span class="dot" onclick="currentSlide(3)"></span>
	  <span class="dot" onclick="currentSlide(4)"></span>
	  
	</div>

	<br><br><br>
	<center>  <h2> ELEPHANT SAFARI </h2></center><br>

	<!--End of slide show-->

	<!--margin-->

	<div style ='margin: 20px 50px 100px 50px;'> 
	<!--Leopard safari description and image-->
	<img src="images/map.png",alt="map",height = "500px " , width ="500px"align="right"> 
	<p>
	Elephants in Sri Lanka are the largest mammals that are to be found on the island. They are one of the most enriching species of the world and 
	there are national parks in Sri Lanka that are solely dedicated for your big game elephant safaris. It is unfortunate that the elephants in Sri Lanka 
	are considered to be an endangered species because their survival is threatened due to various human activities. Elephant safaris in Sri Lanka can take place
	 in various locations. It would be up to you to select the place in which you would like to observe these gentle jumbo creatures. Although we highly recommend 
	 that you visit the elephants at the Udawalawe National Park. 
	<br><br>
	Elephants in Udawalawe are a guaranteed sight for anyone interested in a fulfilled elephant safari. This is the third most visited park in Sri Lanka and even 
	on the shortest Elephant safaris in Udawalawe you can come across herds that would gather to feed and bathe at the waterholes. A 2011 census revealed that there 
	are 5,800 elephants in Sri Lanka. Out of this an estimated 600- 700 elephants can be found residing in the Udawalawe National park. The elephant safaris in
	 Udawalawe are not confined to just elephants. It is home to so much more species due to the varied habitats in the park. On a visit you would probably come 
	 across the endemic Toque Macaque or even the Sri Lankan leopard that is not spotted very often. Another rare animal that you can find on your Elephant safari
	 in <br> Udawalawe is the Sri Lankan Sloth Bear.The variety of birds, some endemic, will leave you amazed while fish,  <br>reptiles and amphibians can also be observed. 
	<br><br>
	At the Yala and Wasgamuwa National Park there is a substantial Sri Lankan Elephant population which is recognised as a subspecies of the Asian Elephant.
	 At Yala these elephants can be seen in large herds with baby elephants in tow while in Wasgamuwa the elephants are of a different nature as they are 
	 completely wild and have a limited exposure to safari jeeps. Elephant safaris in Sri Lanka can also be extended to a boat ride. This is possible only 
	 at the Gal Oya National Park as it borders a reservoir and many little islands can be seen. Here the elephants swim from one island to another with their 
	 trunks out of the water as they use them as snorkels, an intriguing sight for anyone on wildlife safaris.
	<br><br><br><br><br><br>
	
	<center><h2>PACKAGES WE OFFER</h2><br></center>
		<table border="1" , align= "center">
			<th>
			<img src="images/Epack1.png" alt= "pack1 picture" height="250",width="250">
			<h2>Standard Package</h1>
			<p>
			Two days with One <br>
			with accomadation and food <br>
			<h3>US $300 PP<h3>
			<a href="bookingdetails.php"><button onclick = "E1()"><h1>Book now !</h2></button></a>
			</p>
			</th>
			
			<th>
			<img src="images/EPack2.png" alt= "pack1 picture" height="250",width="250">
			<h2>Premium Package</h1>
			<p>
			Three days with two nights <br>
			with accomadation and food <br>
			<h3>US $400 PP<h3>
			<a href="bookingdetails.php"><button onclick = "E2()"><h1>Book now !</h2></button></a>
			</p>
			</th>

			<th>
			<img src="images/EPack3.png" alt= "pack1 picture" height="250",width="250">
			<h2> VIP Package </h1>
			<p>
			Five days with three nights <br>
			with accomadation and food <br>


			<h3>US $500 PP <h3>
			
			<a href="bookingdetails.php"><button onclick = "E3()"><h1>Book now !</h2></button> </a>
			</p>
			</th>
			</div>
		</table>

	<br><br><br><br><br>

	</div>

	<!---Footer---->

	<footer class="social-footer">
		<div class="social-footer-left">
		<div style ='text-align:left;margin: 30px 30px 30px 60px ;'>
		<img src="images/logo.png" style="width:30%"><br><br>
		<table border="0">
				<tr><td>
					<b>Leopard safari (Pvt) Ltd </b><br>
					495/1/2/1,<br>
					2nd, Queens Road,<br>
					Jubilie Post,<br>
					Nugegoda,<br>
					Sri Lanka.</td>
					<td> Tel: +94112245456<br> 
						 &nbsp &nbsp &nbsp +94772245453<br>
					</td>
				</tr>
				</table>
		</div>
		<!--Referenced by https://get.foundation-->
		</div>
		<div class="social-footer-icons">
		<ul class="menu simple">
		<li><a href="https://www.facebook.com/" class="fa fa-facebook" aria-hidden="true"></i></a></li>
		<li><a href="https://www.instagram.com/?hl=en" class="fa fa-instagram" aria-hidden="true"></i></a></li>
		<li><a href="https://www.pinterest.com/" class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
		<li><a href="https://twitter.com/?lang=en" class="fa fa-twitter" aria-hidden="true"></i></a></li>
		</ul>
		</div>
	</footer>



	</body>
	</html>