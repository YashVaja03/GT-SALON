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
     
      
   img{
    width: 99%; 
      }
      .service{
        text-align:center;
        padding:50px;      } 

        .serv-c img{
      
        padding:9px 5px;     
      justify-content:center; } 

      .inp{

        
      }

    </style>
    <title>Document</title>
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

<br><br><br><br>    

            <!-- This is Section of Appointment --> 
          <center>  <h3> Book Your Appointment </h3></center>
          <br>

          <table class="table-primary">
<form  method="post">
    @csrf
    <center>
          <div class="form-floating mb-3">
        <input type="text" name="name"  required placeholder="Enter Name "><br><br>
         <input type="email" name="email" required placeholder="Email"><br><br>
         <input type="password" name="password" required placeholder="Password"><br><br>
         <input type="number" name="mobile" required placeholder="Mobile"><br><br>
         <input type="datetime-local" name="datetime" required placeholder="Input Timeslot"><br><br>
        <br>
        <input type="submit" class="btn btn-primary" value="Book Ur Appointment" formaction="{{url('/')}}/submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" class="btn btn-danger" value="reset" >

    </center>
    </form></table>

     </body>
    </html>