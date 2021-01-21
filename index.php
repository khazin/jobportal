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

    <div class="container col-12 d-flex align-items-center bg-success" style="height:100vh">
    <form action="post" class="form col-6">
      <div class="mb-3 ">
        <label for="" class="form-label">Search job</label>
        <input type="text" class="form-control" id="" aria-describedby="">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Search country</label>
        <input type="text" class="form-control" id="">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Search job category</label>
        <input type="text" class="form-control" id="">
      </div>    
      <button type="submit" class="btn btn-primary">Submit</button>
    </form> 
    </div>
</body>
</html>

<?php

$db = new DB();
$db->connection();
 
?>