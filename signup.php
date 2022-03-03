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
        <?php include("Includes/Header/navbar.php") ?>


        
<form class=" col-lg-6 mx-3 my-5 container">
  <div class="mb-3">
    
    <input type="text" class="form-control" placeholder="Enter Name" >
  </div>

  <div class="mb-3 my-4">
    
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3 my-4">
   
    <input type="password" class="form-control" placeholder="password">
    
  </div>
  <div class="mb-3 my-4">
      <div class="row">
          <div class="col-lg-6">
              <input type="text" class="form-control" placeholder="Contact">
              </div>
          <div class="col-lg-6">
          <input type="text" class="form-control" placeholder="City">
       
</div>
          </div>
      </div>
  </div>




  
  <button type="submit" class="btn btn-primary" style="border-radius: 20px; background-color:#e0e0e0; color:black; border:none;">Sign up</button>
</form>
</body>
</html>