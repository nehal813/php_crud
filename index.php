<!DOCTYPE >
<html>
<head>
<title>GEGISTR PAGE</title>
<meta charset="UTF-8 BOM">
<link rel="stylesheet" href="">
<?php include 'procces.php';
include 'nav2.php';?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<style> 
@font-face {
   font-family: myFirstFont;
   src: url(sansation_light.woff);
}

* {
   font-family: myFirstFont;
}

.default {background-color: #e7e7e7; color: black;} /* Gray */ 
.default:hover {background: #ddd;}
    
</style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card mt-5">
                    <div class="card-header">
                        <h4><center> registration form </center></h4>
                    </div>
                    <div class="card-body">

                        <form action="procces.php" method="POST">
                  
                            <div class="form-group mb-3">
                                <label for="">First Name</label>
                                <input type="text" name="fname" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Last Name</label>
                                <input type="text" name="lname" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="text" name="pass" class="form-control" >
                            </div>
                            <div class="row-32">

                 <div class="form-group mb-3">
       <center> <button type="submit" name="save" class="btn btn-primary">register</button></center>
                  </div>
   
  <div>      
       <center> <button type="submit" name="submit" class="btn default"> <a href="log.php" 
       style="color:black">log in as an admin !</a></button></center>
                  </div>
                        </form>

</div>
</div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

      
<?php include 'footer.php';?>
</body>
</html>

