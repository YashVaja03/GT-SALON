<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body bgcolor="gray">


<br><br>

            <!-- This is Section of Appointment --> 
             <center>   <h1> Update Appointment </h1></center>
             <br><br>
<form  method="post">
    @csrf
    @method('PUT')
    <center>
        Name <input type="text" name="name" value="{{$data['name']}}"><br><br>
        Email <input type="email" name="email" value="{{$data['email']}}"><br><br>
        Mobile <input type="number" name="mobile" value="{{$data['mobile']}}"><br><br>
        Time Slot <input type="datetime-local" name="datetime" value="{{$data['datetime']}}"><br><br>
        <br><br>
        <input type="submit" class="btn btn-primary" value="Update Appointment" formaction="{{url('/gt/update/'.$data->id)}}" >
        <input type="reset"  class="btn btn-danger"value="reset" >

    </center>
    </form>










     </body>
    </html>