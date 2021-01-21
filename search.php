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
         </div>
         <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
      </header> 

  <div class="container col-12 d-flex  justify-content-center bg-success">

  <div class="container mt-5 col-12 bg-light row" > 

    <div class=" col-2  d-flex flex-column ">
        <form action="post" class="form mt-5">
            <input type="text" placeholder="Job" class="form-control mb-3">
            <input type="text" placeholder="Country" class="form-control mb-3">
            <input type="text" placeholder="specialisation" class="form-control mb-3">
            <div class="input-group ">
                <input type="text" class="form-control" placeholder="Skills">
                <div class="btn btn-outline-secondary" id=""><i class="fas fa-plus"></i></div>
            </div>

            <div class="mt-">
                <h6>Skills</h6>
                <span class="badge rounded-pill bg-primary">HTML</span>
                <span class="badge rounded-pill bg-primary">CSS</span>
          
            </div>
            <div class="mt-">
                <h6>Types of employment</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="" checked>
                    <label class="form-check-label" for="" value="fulltime">Full-time</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="" checked>
                    <label class="form-check-label" for="" value="parttime">Part-time</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="" checked>
                    <label class="form-check-label" for="" value="remote">Remote</label>
                </div>
            </div>
            <div class="mt-">
            <h6>Salary range</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="" checked>
                    <label class="form-check-label" for="" value="">$1000 - $2000</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="" checked>
                    <label class="form-check-label" for="" value="">$2000 - $3000</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="" checked>
                    <label class="form-check-label" for="" value="">$3000 - $4000</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="" checked>
                    <label class="form-check-label" for="" value="">$4000 - $6000</label>
                </div>
            </div>
            <input type="submit" class="btn btn-primary mt-5" value="Search">
       
        </form>
    </div>
    <div class=" col-10  bg-secondary">
    <div class="card mt-5" style="width: 18rem;">
        <div class="card-body">
            <h6 class="card-title">ABC pte ltd</h6>
            <h6 class="card-title">Singapore, Singapore</h6>
            <h6 class="card-title">Experience - fresh graduate</h6>
            <h6 class="card-title">Web Developer</h6>
            <div class="card-text mb-4" style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint, sit corporis odit provident vitae maiores debitis nemo 
            libero tempore perferendis minima fugiat architecto facere impedit, laudantium officiis consequuntur adipisci perspiciatis..
            </div>
            <h6 class="card-title">Skills</h6>
            <div style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">
                <span class="badge rounded-pill bg-primary">HTML</span>
                <span class="badge rounded-pill bg-primary">CSS</span>
                <span class="badge rounded-pill bg-primary">CSS</span>
                <span class="badge rounded-pill bg-primary">CSS</span>
                <span class="badge rounded-pill bg-primary">CSS</span>
                <span class="badge rounded-pill bg-primary">CSS</span>
                <span class="badge rounded-pill bg-primary">CSS</span>
            </div>
                
            <h6 class="card-title">Salary range</h6>
            <p class="card-text">$1000-$1200</p>
            <a href="#" class="btn btn-primary">View Job</a>
        </div>
    </div>

    <div class="card mt-5" style="width: 18rem;">
        <div class="card-body">
            <h6 class="card-title">ABC pte ltd</h6>
            <h6 class="card-title">Web Developer</h6>
            <div class="card-text mb-4" style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint, sit corporis odit provident vitae maiores debitis nemo 
            libero tempore perferendis minima fugiat architecto facere impedit, laudantium officiis consequuntur adipisci perspiciatis..
            </div>
            <h6 class="card-title">Skills</h6>
            <div style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;">
                <span class="badge rounded-pill bg-primary">HTML</span>
                <span class="badge rounded-pill bg-primary">CSS</span>
                <span class="badge rounded-pill bg-primary">CSS</span>
                <span class="badge rounded-pill bg-primary">CSS</span>
                <span class="badge rounded-pill bg-primary">CSS</span>
                <span class="badge rounded-pill bg-primary">CSS</span>
                <span class="badge rounded-pill bg-primary">CSS</span>
            </div>
                
            <h6 class="card-title">Salary range</h6>
            <p class="card-text">$1000-$1200</p>
            <a href="#" class="btn btn-primary">View Job</a>
        </div>
    </div>
    
    </div>
  

 
   
    </div>
  </div>
</body>

</html>