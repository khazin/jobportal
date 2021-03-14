<?php include './includes/ClassAutoloader.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
    <link rel="stylesheet" href="library/node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
  <?php include 'includes/header.php'; ?>

    <div class="container col-12 d-flex align-items-center bg-light" style="height:100vh">
    <form method="get" action="searchjob.php" class="form col-6">
      <div class="mb-3 ">
        <label for="" class="form-label">Job</label>
        <input type="text" class="form-control" name="jobTitle">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Country</label>
        <input type="text" class="form-control" name="country">
      </div>
       
      <button type="submit" class="btn btn-primary" name="search" value="search">Search</button>
    </form> 
    </div>
</body>
</html>

<?php


?>