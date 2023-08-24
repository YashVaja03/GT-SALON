<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
  <!--  <link rel="stylesheet" href="{{asset('/css/style.css')}}">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="gray"><br><br><br>
<center><h2><font color="Yellow">A</font>dmin &nbsp; Side </h2></center>
    
<center><table class="table table-bordered table-inverse table-responsive" border="0" bgcolor="silver">
    <thead class="thead-inverse">
        <tr>
           <th><center>Id </center></th>
            <th><center>Name </center></th>
            <th><center>Email</center></th>
            <th><center>Mobile</center></th>
            <th><center>DateTime</center></th>
            <th><center> Action </center></th>
        </tr>
        <tr></tr>
        <tr></tr>
        </thead>
        <tbody bgcolor="silver">
            @foreach($data as $crud)
            <tr>
                <br>
                <td scope="row"><center>{{$crud->id}}</td>
                <td scope="row"><center>{{$crud->name}}</td>
                <td scope="row"><center>{{$crud->email}}</td>
                <td scope="row"><center>{{$crud->mobile}}</td>
                <td scope="row"><center>{{$crud->datetime}}</td>
                <td> <a href="{{ url('gt/delete/'.$crud->id)}}" class="btn btn-danger">Delete</a>
                <a href="{{ url('gt/edit/'.$crud->id)}}" class="btn btn-primary">edit</a>
            </td>
            </tr>
            @endforeach
        </tbody>
</table>
</center>

</body>
</html>