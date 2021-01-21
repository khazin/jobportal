<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Portal</title>
  <link rel="stylesheet" href="library/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="icons/node_modules/@fortawesome/fontawesome-free/css/all.css">
</head>

<body>
<header>
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <div class="container ">
               <a class="navbar-brand col-2" href="index.php">JOB PORTAL</a>
               
               <div class="collapse navbar-collapse col-8 d-flex justify-content-around">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Search users</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Find jobs</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Find company</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Post</a>
                     </li>
                  </ul>
               </div>
               <div class="col-2 mt-3 d-flex justify-content-around">
               <ul class="navbar-nav">
                <li class="nav-item">
                  <i class="far fa-user bg-light"></i>
                </li>
                <li class="nav-item">
                  <p class="text-light">Firstname Lastname</p>                  
                </li>
               </ul>


               </div>
            </div>
         </nav>
         <div class="bg-dark d-flex justify-content-center">
             <form action="" class="form col-4 ">
                
                <div class="input-group mb-2">
                <input type="text" class="form-control" placeholder="Search anything">
                <button class="btn btn-outline-secondary" type="button" id=""><i class="fas fa-search"></i></button>
                </div>
             </form>
         </div>
         <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
      </header> 

  <div class="container col-12 d-flex flex-column justify-content-start bg-success">

  <div class="container col-6 ">

      <!-- card profile -->
      <div class="card my-5">

        <div class="card-body row container">
            <div class="col-2 d-flex flex-column justify-content-center  align-items-end">
                <i class="fas fa-chevron-up">2</i>
                <i class="far fa-eye">2</i>
                <i class="far fa-comment-alt">2</i>
            </div>
            <div class="col-10">
                <h6 class=" ">Firstname Lastname</h6>
                <h5 class="mb-4">Ask some questions here</h5>
                <p class="white-space: nowrap; width: 50px;overflow: hidden;text-overflow: ellipsis;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi libero dicta dolore optio autem. Aliquam sapiente veniam quia aspernatur ipsam temporibus ut, quaerat repellat distinctio quisquam autem perferendis, placeat cum.</p>
                <hr>
            </div>

        </div>
        <div class="card-body row container">
            <div class="col-3 pl-4 d-flex flex-column justify-content-center align-items-end">
                <i class="fas fa-chevron-up">2</i>
            </div>
            <div class="col-9">
                <h6 class=" ">Firstname Lastname</h6>
                <p class="white-space: nowrap; width: 50px;overflow: hidden;text-overflow: ellipsis;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi libero dicta dolore optio autem. Aliquam sapiente veniam quia aspernatur ipsam temporibus ut, quaerat repellat distinctio quisquam autem perferendis, placeat cum.</p>
                <hr>
            </div>
        </div>
        <div class="card-body row container">
            <div class="col-3 pl-4 d-flex flex-column justify-content-center align-items-end">
                <i class="fas fa-chevron-up">2</i>
            </div>
            <div class="col-9">
                <h6 class=" ">Firstname Lastname</h6>
                <p class="white-space: nowrap; width: 50px;overflow: hidden;text-overflow: ellipsis;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi libero dicta dolore optio autem. Aliquam sapiente veniam quia aspernatur ipsam temporibus ut, quaerat repellat distinctio quisquam autem perferendis, placeat cum.</p>
                <hr>
            </div>
        </div>


        
      </div>

   

 

 
    </div>
  </div>
</body>

</html>