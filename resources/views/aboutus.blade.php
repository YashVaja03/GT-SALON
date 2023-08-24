<!DOCTYPE html>
<!---Coding By CoderGirl!--->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--<title> An About Us Page | CoderGirl </title>-->
  <!---Custom Css File!--->
  <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
  
}
.about-us{
  height: 100vh;
  width: 100%;
  padding: 90px 0;
  background: black;
  color:white;
}
.pic{
  height: auto;
  width:  302px;
}
.about{
  width: 1130px;
  max-width: 85%;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-around;
}
.text{
  width: 540px;
}
.text h2{
  font-size: 70px;
  font-weight: 600;
  margin-bottom: 10px;

}
.text h5{
  font-size: 22px;
  font-weight: 500;
  margin-bottom: 20px;
}
span{
  color: yellow;
}
.text p{
  font-size: 11px;
  line-height: 25px;
  letter-spacing: 1px;
}
.data{
  margin-top: 30px;
}
.hire{
  font-size: 18px;
  background: #4070f4;
  color: #fff;
  text-decoration: none;
  border: none;
  padding: 8px 25px;
  border-radius: 6px;
  transition: 0.5s;
}
.hire:hover{
  background: #000;
  border: 1px solid #4070f4;
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





  </style>
</head>
<body>

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


  <section class="about-us">
    <div class="about">
      <img src="images/f2.jpg" class="pic">
      <div class="text">
        <h2><font color="Yellow">A</font>bout Us</h2>
        <h5>Salon <span>Golden Touch</span></h5>
          <p>Let your hair do the talking. <br>
Fast fades in no time.<br>
If you’ve been dreaming of the perfect hair cut, then (BN) in (LN). We are the perfect hair salon professionals to give you that dream hair cut! Our full-service hair salon’s offers great hair salon services at the best hair salon rates around! With over 16 years of experience, our amazing hair salon experts listen to each and every client and give you the exact image you’re looking for. </p>
        <div class="data">
        <a href="https://www.instagram.com/salon_gt_/" class="hire">Instagram </a>&nbsp;&nbsp;&nbsp;
        <a href="https://www.instagram.com/direct/t/340282366841710300949128161181627845812" class="hire">Contact </a>
        
        </div>
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