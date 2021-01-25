<div class="container col-12 bg-success d-flex flex-column align-items-center"  style="height:100vh">
   <form action="post" class="form col-6 d-flex flex-column align-items-center">

      <div class="card mt-5" style="width: 38rem;">
         <h5 class="mt-3 card-title text-center">Register</h5>
         <!-- form 1 credentials-->
         <div class="card-body col-12 form__credential" id="formCredential">
            <h6 class="card-subtitle mb-2 text-muted text-center">Fill in your credentials</h6>

            <div class="mb-3">
               <label for="email" class="form-label">Email address</label>
               <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
               <label for="password" class="form-label">Password</label>
               <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
               <label for="confirmPassword" class="form-label">Confirm Password</label>
               <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
            </div>
            <button type="button" class="btn btn-primary" id="formCredentialNextBtn"
            onclick="return nextForm(formCredential,formApplicant)">Next</button>
         </div>


         <!-- form 2 particulars-->
         <div class="col-12 form__applicant" id="formApplicant">
            <h6 class="card-subtitle  text-muted text-center">Fill in your particulars</h6>
            <div class="d-flex justify-content-between">
               <div class="mb-3">
                  <label for="firstname" class="form-label">Firstname</label>
                  <input type="text" class="form-control" id="firstname" name="firstname">
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
                  <input type="date" class="form-control" id="birthday" name="birthday" style="width:205px">
               </div>
            </div>


            <div class="d-flex justify-content-between">
               <div class="mb-3">
                  <label for="country" class="form-label">Country</label>
                  <input type="text" class="form-control" id="country" name="country">
               </div>
               <div class="mb-3">
                  <label for="city" class="form-label">City</label>
                  <input type="text" class="form-control" id="city" name="city">
               </div>
            </div>

            <div class="d-flex justify-content-between">
               <div class="mb-3">
                  <label for="job" class="form-label">Job</label>
                  <input type="text" class="form-control" id="job" name="job">
               </div>
               <div class="mb-3">
                  <label for="company" class="form-label">Company</label>
                  <input type="text" class="form-control" id="company" name="company">
               </div>
            </div>

            <button type="button" class="btn btn-primary" id="formApplicantBackBtn"
            onclick="return prevForm(formApplicant,formCredential)">Back</button>
            <button type="submit" class="btn btn-primary" id="formApplicantSubmitBtn">Confirm</button>
         </div>
      </div>


   </form>
</div>