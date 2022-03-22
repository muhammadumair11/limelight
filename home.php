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

  <?php include('Includes/Header/navbar-logined.php') ?>
  <br>

  <div class="container-fluid">
      <div class="container">
            <div class="row">
                <div class="col-lg-3 py-4">
                    <div class="cat-heading display-4 my-3">Categories</div>
                    <ul class="list-group">
                        <li class="list-group-item">Shoes</li>
                        <li class="list-group-item">Pants</li>
                        <li class="list-group-item">Shirts</li>
                        <li class="list-group-item">Shirts</li>
                        <li class="list-group-item">Shirts</li>
                    </ul>
                </div>
                <div class="col-lg-9 py-4">
                <div class="cat-heading display-4 my-3">Products</div>
                    <div class="row g-4">
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                # code...
                                ?> 
                                <div class="col-lg-4">
                                    <div class="card">
                                        <img src="https://images.unsplash.com/photo-1534353436294-0dbd4bdac845?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxMXx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <div class="text-center">
                                                <a href="#" class="btn btn-gray">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        ?>
                        
                    </div>
                </div>
            </div>

      </div>
  </div>
    
    
</body>
</html>