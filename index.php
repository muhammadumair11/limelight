<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>

  <?php include('Includes/Header/navbar.php') ?>
  <br>
  <div class="signin-form row justify-content-center">
    <div class="col-lg-6">
    <form class="container px-4">
      <div class="supporting-text">
        
        <h1>Sign In</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, earum voluptate! Ullam totam placeat, blanditiis fuga, est dicta qui deleniti itaque
        </p>
      </div>
        <div class="form-group">
          <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <br>
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group form-check">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-gray">SignIn</button>
        </div>
    </form>
    </div>
    <div class="col-lg-6 d-flex justify-content-center flex-wrap p-0">
      <?php
        for ($i=0; $i < 4; $i++) { 
          # code...
          ?>
          <img src="assets/images/logo.png" class="side-img" alt="">

          <?php
        }
      ?>
    </div>
  </div>
    
    
</body>
</html>