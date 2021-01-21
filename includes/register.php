<div class="container col-12 bg-success d-flex flex-column align-items-center">
         <form action="post" class="form col-6 d-flex flex-column align-items-center">
            <h3 class="text-center">Register</h3>
            <!-- form 1 credentials-->
            <div class="col-6">
               <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email">
               </div>
               <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password">
               </div>
               <button type="button" class="btn btn-primary">Next</button>
            </div>
            <!-- form 2 particulars-->
            <div class="col-9">
               <div class="d-flex justify-content-between">
                  <div class="mb-3">
                     <label for="firstname" class="form-label">Firstname</label>
                     <input type="text" class="form-control" id="firstname" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                     <label for="lastname" class="form-label">Lastname</label>
                     <input type="text" class="form-control" id="lastname" name="lastname">
                  </div>
               </div>

               <div class="d-flex justify-content-between">
                  <div class="mt-5">
                     <input type="radio" id="male" name="gender" value="male">
                     <label for="male" class="form-label">Male</label>
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female" class="form-label">Female</label>
                  </div>
                  <div class="mb-3">
                     <label for="birthday" class="form-label">Birthday</label>
                     <input type="date" class="form-control" id="birthday" name="birthday" style="width:225px"> 
                  </div>
               </div>


               <div class="d-flex justify-content-between">
                  <div class="mb-3">
                     <label for="country" class="form-label">Country</label>
                     <input type="text" class="form-control" id="country">
                  </div>
                  <div class="mb-3">
                     <label for="city" class="form-label">City</label>
                     <input type="text" class="form-control" id="city">
                  </div>
               </div>

               <div class="d-flex justify-content-between">
                  <div class="mb-3">
                     <label for="job" class="form-label">Job</label>
                     <input type="text" class="form-control" id="job">
                  </div>
                  <div class="mb-3">
                     <label for="company" class="form-label">Company</label>
                     <input type="text" class="form-control" id="company">
                  </div>
               </div>

               <button type="button" class="btn btn-primary">Next</button>
            </div>
            <!-- form 3 biography-->
            <div class="col-10">
               <div class="mb-3">
                  <label for="bio" class="form-label">About Me</label>
                  <textarea class="form-control" name="bio" id="" cols="30" rows="10"></textarea>
               </div>
               <button type="button" class="btn btn-primary">Next</button>
            </div>
            <!-- form 4 skills-->
            <div class="col-10">
               <div class="mb-3">
                  <label for="skill" class="form-label">What are your skills?</label>
                  <input type="text" class="form-control" id="skill" list='skills'>
                     <datalist id="skills">
                        <option value="HTML">
                        <option value="CSS">
                        <option value="Javscript">
                        <option value="Linux">
                        <option value="AWS">
                     </datalist>
                     <h6>Skills</h6>
                     <div class="row">
                     <span class="badge rounded-pill bg-light ml-3">HTML<a href="">&times;</a></span>
                     <span class="badge rounded-pill bg-light ml-3">CSS<a href="">&times;</a></span>
                     <span class="badge rounded-pill bg-light ml-3">Linux<a href="">&times;</a></span>
                     <span class="badge rounded-pill bg-light ml-3">Windows Server<a href="">&times;</a></span>
                     </div>
               </div>
               <button type="button" class="btn btn-secondary">Add</button>
               <button type="button" class="btn btn-primary">Next</button>
            </div>
            <!-- form 5 qualifications-->
            <div class="col-10">
               <div class="mb-3">
                  <label for="certification" class="form-label">Certification</label>
                  <input type="text" class="form-control" id="certification" list="certifications">
                     <datalist id="certifications">
                        <option value="Diploma">
                        <option value="BSc">
                        <option value="Masters">
                        <option value="PHD">
                        <option value="Industrial certification">
                     </datalist>
                  <label for="school" class="form-label">School</label>
                  <input type="text" class="form-control" id="school">
                  <label for="course" class="form-label">Course</label>
                  <input type="text" class="form-control" id="course">
                  <label for="graduate" class="form-label">Graduate year</label>
                  <input type="number" class="form-control" id="graduate">
                     <h6>Skills</h6>
                     <div class="row">
                     <span class="badge rounded-pill bg-light ml-3 mb-2">Diploma in computer science - Nanyang Polytechnic, 2013<a href="">&times;</a></span>
                     <span class="badge rounded-pill bg-light ml-3 mb-2">BSC in computer science - Oxford Brookes University, 2013<a href="">&times;</a></span>
       
                     </div>
               </div>
               <button type="button" class="btn btn-secondary">Add</button>
               <button type="button" class="btn btn-primary">Next</button>
            </div>
            <!-- form 6 job experience -->
            <div class="col-10">
               <div class="mb-3">
                  <label for="jobtitle" class="form-label">Job title</label>
                  <input type="text" class="form-control" id="jobtitle" list="jobtitles">
                     <datalist id="jobtitles">
                        <option value="Web developer">
                        <option value="Mobile App developer">
                        <option value="Network engineer">
                        <option value="Software engineer">
                     </datalist>
                  <label for="company" class="form-label">Company</label>
                  <input type="text" class="form-control" id="company">
                  <label for="startyear" class="form-label">From</label>
                  <input type="number" class="form-control" id="startyear">
                  <label for="endyear" class="form-label">To</label>
                  <input type="number" class="form-control" id="endyear">
                     <h6>Work experience</h6>
                     <div class="row">
                     <span class="badge rounded-pill bg-light ml-3 mb-2">Web developer - ABC pte ltd,2013 - 2015<a href="">&times;</a></span>
                     <span class="badge rounded-pill bg-light ml-3 mb-2">App developer - xyz pte ltd,2015 - 2017<a href="">&times;</a></span>
                     </div>
               </div>
               <button type="button" class="btn btn-secondary">Add</button>
               <button type="button" class="btn btn-primary">Next</button>
            </div>
         </form>
      </div>