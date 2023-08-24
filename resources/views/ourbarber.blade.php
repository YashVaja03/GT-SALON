<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      
		*, *:before, *:after {
  box-sizing: border-box;
}

html {
  font-size: 100%;
}

body {
  font-family: acumin-pro, system-ui, sans-serif;
  margin: 0;
  display: grid;
  grid-template-rows: auto 1fr auto;
  font-size: 14px;
  background-color: black;
  align-items: start;
  min-height: 100vh;
}

.footer {
  display: flex;
  flex-flow: row wrap;
  padding: 30px 30px 20px 30px;
  color: black;
  background-color: white;
  border-top: 1px solid #e5e5e5;
}

.footer > * {
  flex:  1 100%;
}

.footer__addr {
  margin-right: 1.25em;
  margin-bottom: 2em;
}

.footer__logo {
  font-family: 'Pacifico', cursive;
  font-weight: 800;
  text-transform: uppercase;
  font-size: 1.5rem;
}

.footer__addr h2 {
  margin-top: 1.3em;
  font-size: 15px;
  font-weight: 400;
}

.nav__title {
  font-weight: 400;
  font-size: 15px;
}

.footer address {
  font-style: normal;
  color: #999;
}

.footer__btn {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 36px;
  max-width: max-content;
  background-color: rgb(33, 33, 33, 0.07);
  border-radius: 100px;
  color: #2f2f2f;
  line-height: 0;
  margin: 0.6em 0;
  font-size: 1rem;
  padding: 0 1.3em;
}

.footer ul {
  list-style: none;
  padding-left: 0;
}

.footer li {
  line-height: 2em;
}

.footer a {
  text-decoration: none;
}

.footer__nav {
  display: flex;
	flex-flow: row wrap;
}

.footer__nav > * {
  flex: 1 50%;
  margin-right: 1.25em;
}

.nav__ul a {
  color: gray;
}

.nav__ul--extra {
  column-count: 1;
  column-gap: 1.25em;
}

.legal {
  display: flex;
  flex-wrap: wrap;
  color: #999;
}
  
.legal__links {
  display: flex;
  align-items: center;
}

.heart {
  color: #2f2f2f;
}

@media screen and (min-width: 24.375em) {
  .legal .legal__links {
    margin-left: auto;
  }
}

@media screen and (min-width: 40.375em) {
  .footer__nav > * {
    flex: 1;
  }
  
  .nav__item--extra {
    flex-grow: 2;
  }
  
  .footer__addr {
    flex: 1 0px;
  }
  
  .footer__nav {
    flex: 2 0px;
  }
}
    
   img{
    width: 99%; 
      }
      .service{
        text-align:center;
        padding:50px;      } 

        .serv-c img{
      
        padding:9px 5px;     
      justify-content:center; } 

    </style>
    <title>Document</title>
</head>
<body bgcolor="gray">
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark " >
  <div class="container-fluid">
    <b><a class="navbar-brand" href="/homepage">GT-Salon </a></b>
    <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/homepage">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/aboutus">About Us </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ourbarber"> Our Barbers  </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact"> Contact Us  </a>
        </li>
        

      </ul></div>
      
 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
          <a class="nav-link" href="/appointment"> Get Appointment   </a>
        </li>
        
</ul>
  
</nav>
</div>
</div> 

<br><br><br><br><br>

<section class="services">
  
	<!--heading---------------->
	<div class="s-heading">
	<h1><font color="white"> Our Hair Dresser  </font></h1><br>
	<font color="yellow"> W</font>e Provide  The Best Hair Masters  For Our Customers</p>
  	</div>
	<!--services-box-container------------------->
	<div class="s-box-container">
	<!--service-box-1---------------->	
	<div class="s-box">
	<!--top-bar-------->
	<div class="bar"></div>
	<!--img---------->
	<img class="c"  alt="1" src="images/12.jpg" /><br>
	<!--servies-name---------->
	<h1>Parag Vaja </h1>
	<!--details------>
		<p> A Senior Barber <br> 5 or More Years Experience  </p>
	<!--btn---------->
	<a class="s-btn" href="/services">More</a>
	</div>
		<!--service-box-1---------------->	
	<div class="s-box">
	<!--top-bar-------->
	<div class="bar"></div>
	<!--img---------->
	<img class="c" alt="2" src="images/13.jpg" /><br>
	<!--servies-name---------->
	<h1>Parth Vaja </h1>
	<!--details------>
		<p>A Senior Barber <br> 5 or More Years Experience </p>
	<!--btn---------->
	<a class="s-btn" href="/services">More</a>
	</div>
		<!--service-box-3---------------->	



	 <div class="s-box">
	<!--top-bar-------->
	<div class="bar"></div>
	<!--img---------->
	<img alt="3" class="c"  src="images/f2.jpg" /><br>
	<!--servies-name---------->
	<h1> Yash  Vaja   </h1>
	<!--details------>
		<p>A Junior Barber <br> In Training </p>
	<!--btn---------->
	<a class="s-btn" href="/services">More</a>
	</div>
	</div>

	</section>

      
  
<!-- Footer Section -->

<footer class="footer">
  <div class="footer__addr">
    <h1 class="footer__logo">Online Services</h1>
        
    <h2>Contact</h2>
    
    <address>
      5534 Somewhere In. The World 22193-10212<br>
          
      <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
    </address>
  </div>
  
  <ul class="footer__nav">
    <li class="nav__item">
      <h2 class="nav__title">Social - Media</h2>

      <ul class="nav__ul">
        <li>
          <a href="#">Facebok</a>
        </li>

        <li>
          <a href="#">Instagram </a>
        </li>
            
        <li>
          <a href="#">Google Maps </a>
        </li>
      </ul>
    </li>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <li class="nav__item nav__item--extra">
      <h2 class="nav__title">Technology</h2>
      
      <ul class="nav__ul nav__ul--extra">
        <li>
          <a href="#">Facial Machine </a>
        </li>
        
        <li>
          <a href="#">Digital Color View 3D</a>
        </li>
        
        <li>
          <a href="#">Digital HairCut-Machine</a>
        </li>
        
      </ul>
    </li>
    
    <li class="nav__item">
      <h2 class="nav__title">Customers</h2>
      
      <ul class="nav__ul">
        <li>
          <a href="#">Gujarat</a>
        </li>
        
        <li>
          <a href="#">Delhi </a>
        </li>
        
        <li>
          <a href="#">Mumbai  </a>
        </li>
      </ul>
    </li>
  </ul>
  
  <div class="legal">
    <p>&copy; 2019 Something. All rights reserved.</p>
    
    <div class="legal__links">
      <span>Made with <span class="heart">♥</span> remotely from Anywhere</span>
    </div>
  </div>
</footer>


      










        </body>
        </html>