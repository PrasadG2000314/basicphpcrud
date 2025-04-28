<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container my-5">
    <form method ="POST" action="user.php">
  <div class="form-group mb-3">
    <label >name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" required>
  </div>
  <div class="form-group mb-3">
    <label >Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" required>
  </div>
  <div class="form-group mb-3">
    <label >mobile</label>
    <input type="text" class="form-control" placeholder="Enter your mobile" name="mobile" autocomplete="off" required>
  </div>
  <div class="form-group mb-3">
    <label >password</label>
    <input type="text" class="form-control" placeholder="Enter your pssword" name="password" autocomplete="off" required>
  </div>
  
  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>