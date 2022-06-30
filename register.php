<?php require('config.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <title>login task management</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="card">
          <div class="card-header">
             <div class="container">
                 <div class="row">
                     <a name="" id="" class="btn btn-primary" href="index.php" role="button">Manage task</a>
                 </div>
             </div>
            </div>
    <div class="container">     
    <div class="row">
        <h3>Login Task</h3>
      <div class="col-md-12">
        <?php 
         if (isset($_POST['submit'])){
          $name= $_POST['name'];
          $email= $_POST['email'];
          $password= md5($_POST['password']);
          $cpassword = md5($_POST['cpassword']);

        
          if($name != "" && $email!= "" &&  $password != "" && $cpassword !="")
          {
            if ($password ==$cpassword){
                // storing data
                $register_query ="INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";
                $register_result = mysqli_query($conn,$register_query);
                if($register_result){
                    echo header('location:index.php');
                }
                else{
                    echo "you are not registered";
                };
            }        
          }
          else
          {
            echo " not matched";
          }
         }
        ?>
      <form action="#" method="POST" enctype="multipart/form-data"> 
      <div class="form-group">
         <label for="">name<l/label>
         <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
      </div>
      <div class="form-group">
         <label for="">email</label>
         <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
      </div>
      <div class="form-group">
         <label for="">Password</label>
         <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
      </div>
      <div class="form-group">
         <label for="">Confirm password</label>
         <input type="password" name="cpassword" id="" class="form-control" placeholder="" aria-describedby="helpId">
      </div>
     
       <button type="submit"  class="btn btn-primary" name="submit">Submit</button>
      </div>
      </form>
    </div>
    </div> 
    <div class="card-footer text-muted">
           Developed by ME
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>