<?php include 'connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <style type="text/css">
    body{
      background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(img/back.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }
    label{color: #fff;}
    input{
      border: none;
      outline: none;
    }
  </style>
</head>
<body>


<div class="container mt-5 mb-5 ">
    <div class="row">
        <div class="col-md-2"></div>
        <div style="background-color:rgb(0,0,0,0.7); padding: 40px;" class="col-md-8">
  <form action="query.php" method="POST" class="was-validated" >
  	<div class="row">
     <h1 style="" class="text-center"><b style="color: #fff;">Welcome to FASTBALL</b></h1>


    <div class="mt-2 col-md-6 mb-1">
      <label for="name" class="form-label">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
      <div class="valid-feedback">Valid.</div>
    </div>

    <div class="mt-2 col-md-6 mb-1">
      <label for="email" class="form-label">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      <div class="valid-feedback">Valid.</div>
    </div>

    <div class=" mt-2 col-md-6 mb-1">
      <label for="phone_number" class="form-label">Phone_number:</label>
      <input type="number" class="form-control" id="phone_number" placeholder="Enter phone_number" name="phone_number" required>
      <div class="valid-feedback">Valid.</div>
    </div>

    <div class="mb-2 mt-1 col-md-6">
      <label for="role" class="form-label">Role:</label>
      <input type="text" class="form-control" id="role" placeholder="Enter role" name="role" required>
      <div class="valid-feedback">Valid.</div>
    </div>

    <div class="mb-2 mt-1 col-md-6">
      <label for="product" class="form-label">Product:</label>
      <input type="text" class="form-control" id="product" placeholder="Enter product" name="product" required>
      <div class="valid-feedback">Valid.</div>
    </div>

    <div class="mb-2 mt-1 col-md-6">
      <label for="serial" class="form-label">Sr.Num:</label>
      <input type="text" class="form-control" id="searial" placeholder="Enter Sr.Num" name="searial" required>
      <div class="valid-feedback">Valid.</div>
    </div>

        <div class="mb-1 mt-2 col-md-6">
      <label for="comment">Description:</label>
      <textarea class="form-control" rows="5" id="comment" name="comment" required></textarea>
      <div class="valid-feedback">Valid.</div>
    </div>

    <div class="mb-1 mt-2 col-md-6">
      <label for="deliver_date" class="form-label">Product Deliver Date:</label>
      <input type="date" class="form-control" id="deliver_date"
      name="deliver_date" required>
      <div class="valid-feedback">Valid.</div>
    </div>

  
  </div>
  <button type="submit" class="btn btn-primary mt-1">Submit</button>

  </form>
</div>
  <div class="col-md-2"></div>
</div>
</div>

</body>
</html>
