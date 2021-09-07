<!DOCTYPE >
<html>
<head>
<title>ADMIN</title>
<meta charset="UTF-8 BOM">
<link rel="stylesheet" href="">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
 crossorigin="anonymous">

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
  crossorigin="anonymous"></script>
 <?php  include 'nav.php';?>
<head>
<style> 
@font-face {
   font-family: myFirstFont;
   src: url(sansation_light.woff);
}

* {
   font-family: myFirstFont;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <style>
.default {background-color: #e7e7e7; color: black;} /* Gray */ 
.default:hover {background: #ddd;}
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            
                <div class="card mt-5">
                    <div class="card-header">
                        <h4><center> Admin form </center></h4>
                    </div>
                    <div class="card-body">

                        <form action="admpass.php" method="POST">
                  
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
                 <div class="form-group mb-3">
       <center> <button type="submit" name="submit" class="btn btn-primary">log in</button></center>
                  </div>         
  <div>      
       <center> <button type="submit" name="submit" class="btn default"> <a href="index.php" style="color:black">log out !</a></button></center>
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