const formRegister = document.getElementById("formRegister");
const formToLogin = document.getElementById("formToLogin");
const formApplicant = document.getElementById("formApplicant");
const formEmployer = document.getElementById("formEmployer");
const formCredential = document.getElementById("formCredential");
const formBiography = document.getElementById("formBiography");
const formSkills = document.getElementById("formSkills");
const formEducation = document.getElementById("formEducation");
const formExperience = document.getElementById("formExperience");
const registerNavbar = document.getElementById("registerNavbar");

var role = "";

function nextForm(form1, form2) {
  form1.style.display = "none";
  form2.style.display = "initial";
}

function toRegisterCredentialForm(node) {
  role = node.value;
  document.getElementById("role").value = role;

  if (role == "applicant" && validateApplicant() == true) {
    formEmployer.getElementsByTagName("input").value = "";
    nextForm(formApplicant, formCredential);
    registerNavbar.style.display = "none";
  } else if (role == "employer" && validateEmployer() == true) {
    formApplicant.getElementsByTagName("input").value = "";
    nextForm(formEmployer, formCredential);
    registerNavbar.style.display = "none";
  }
}


function toUserTegisterForm() {
  if (role == "applicant") {
    nextForm(formCredential, formApplicant);
  } else if (role == "employer") {
    nextForm(formCredential, formEmployer);
  }
  registerNavbar.style.display = "flex";
}

//validate empty text field
function validateEmptyTextField(fieldValue, fieldStr) {
  if (fieldValue == "") {
    alert(fieldStr + " must be filled out");
    return false;
  }
  return true;
}

//validate text field length
function validateLengthTextField(fieldValue, fieldName, min, max) {
  if (fieldValue.length < min || fieldValue.length > max) {
    alert(fieldName + " must be between " + min + " and " + max);
    return false;
  }
  return true;
}

//validate register password
function validateConfirmPassword(passwordValue, confirmPasswordValue) {
  if (passwordValue !== confirmPasswordValue) {
    alert("Password does not match");
    return false;
  }
  return true;
}

//validate email format
function validateEmail(emailValue) {
  if (
    /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(
      emailValue
    )
  ) {
    return true;
  }
  alert("You have entered an invalid email address!");
  return false;
}

//validate register credentials form
function validateCredentials() {
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  const confirmPassword = document.getElementById("confirmPassword").value;

  var validateEmptyEmailField = validateEmptyTextField(email, "Email");
  var validateEmailFormat = validateEmail(email);
  var validateEmptyPasswordField = validateEmptyTextField(password, "Password");
  var validateEmptyConfirmPasswordField = validateEmptyTextField(
    confirmPassword,
    "Confirm Password"
  );
  var validatePasswordMatched = validateConfirmPassword(
    password,
    confirmPassword
  );

  let validateResultArr = [
    validateEmptyEmailField,
    validateEmailFormat,
    validateEmptyPasswordField,
    validateEmptyConfirmPasswordField,
    validatePasswordMatched,
  ];

  if (validateResultArr.includes(false) != true) {
    return true;
  } else {
    return false;
  }
}

//validate register applicant form
function validateApplicant() {
  const firstname = document.getElementById("firstname").value;
  const lastname = document.getElementById("lastname").value;
  // const gender = document.getElementByNames('gender').value;
  const birthday = document.getElementById("birthday").value;
  const country = document.getElementById("country").value;
  const city = document.getElementById("city").value;
  const job = document.getElementById("job").value;
  const company = document.getElementById("company").value;

  var validateEmptyFirstnameField = validateEmptyTextField(
    firstname,
    "Firstname"
  );
  var validateEmptyLastnameField = validateEmptyTextField(lastname, "Lastname");
  var validateEmptyBirthdayField = validateEmptyTextField(birthday, "Birthday");
  var validateEmptyCountryField = validateEmptyTextField(country, "Country");
  var validateEmptyCityField = validateEmptyTextField(city, "City");
  var validateEmptyJobField = validateEmptyTextField(job, "Job");
  var validateEmptyCompanyField = validateEmptyTextField(company, "Company");

  let validateResultArr = [
    validateEmptyFirstnameField,
    validateEmptyLastnameField,
    validateEmptyBirthdayField,
    validateEmptyCountryField,
    validateEmptyCityField,
    validateEmptyJobField,
    validateEmptyCompanyField,
  ];

  if (validateResultArr.includes(false) != true) {
    return true;
  } else {
    return false;
  }
}

//validate register employer form
function validateEmployer() {
  const companyName = document.getElementById("companyName").value;
  const companyType = document.getElementById("companyType").value;
  const companyContact = document.getElementById("companyContact").value;
  const companyAdmin = document.getElementById("companyAdmin").value;

  var validateEmptyCompanyNameField = validateEmptyTextField(
    companyName,
    "Company name"
  );
  var validateEmptyCompanyTypeField = validateEmptyTextField(
    companyType,
    "Company type"
  );
  var validateEmptyCompanyContactField = validateEmptyTextField(
    companyContact,
    "Company Contact"
  );
  var validateEmptyCompanyAdminField = validateEmptyTextField(
    companyAdmin,
    "Company admin"
  );

  let validateResultArr = [
    validateEmptyCompanyNameField,
    validateEmptyCompanyTypeField,
    validateEmptyCompanyContactField,
    validateEmptyCompanyAdminField,
  ];

  if (validateResultArr.includes(false) != true) {
    return true;
  } else {
    return false;
  }
}

//validate login process
function validateLogin() {
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;

  var validateEmptyEmailField = validateEmptyTextField(email, "Email");
  var validateEmailFormat = validateEmail(email);
  var validateEmptyPasswordField = validateEmptyTextField(password, "Password");

  let validateResultArr = [
    validateEmptyEmailField,
    validateEmailFormat,
    validateEmptyPasswordField,
  ];

  if (validateResultArr.includes(false) != true) {
    nextForm(formRegister, formToLogin);
    return true;
  } else {
    return false;
  }
}

//validate bio
function validateBiography() {
    const bio = document.getElementById("bio").value;
  
    var validateEmptyBioField = validateEmptyTextField(bio, "Bio");
  
    let validateResultArr = [
        validateEmptyBioField
    ];
  
    if (validateResultArr.includes(false) != true) {
      nextForm(formBiography, formSkills);
      return true;
    } else {
      return false;
    }
  }

//add pills
function addPills(selectedValue, pills, count, idName, node) {
  for (i = 0; i < pills.length; i++) {
    var pill = pills[i].value;

    if (selectedValue == pill) {
      count = 1;
    }
  }

  if (selectedValue == "") {
    alert("Please enter a skill");
    return false;
  } else if (count == 1) {
    alert("You have choose this skill");
    return false;
  } else {
    document.getElementById(idName).appendChild(node);
  }
}

// code to remove pills item
function removePill(e) {
  e.parentNode.remove();
}

//add skills pills
function addSkills() {
  var list = document.createElement("span");
  var input = document.createElement("input");
  var remove = document.createElement("i");

  var value = document.getElementById("skill").value;

  list.setAttribute("class", "badge rounded-pill bg-primary ml-3");
  input.setAttribute("type", "hidden");
  input.setAttribute("class", "skills");
  input.setAttribute("name", "skillsArr[]");
  input.setAttribute("value", value);
  remove.setAttribute("class", "fas fa-times ml-1 btn-icon__remove");
  remove.setAttribute("onclick", "removePill(this)");

  var textValue = document.createTextNode(value);

  list.appendChild(textValue);
  list.appendChild(input);
  list.appendChild(remove);

  var pills = document.getElementsByClassName("skills");

  addPills(value, pills, (count = 0), "skillsContainer", list);
}

//add education pills
function addEducations() {
  var certification = document.getElementById("certification").value;
  var school = document.getElementById("school").value;
  var course = document.getElementById("course").value;
  var graduateYear = document.getElementById("graduateYear").value;

  var validateEmptycertificationield = validateEmptyTextField(
    certification,
    "certification"
  );
  var validateEmptyschoolField = validateEmptyTextField(school, "school");
  var validateEmptycourseField = validateEmptyTextField(course, "course");
  var validateEmptygraduateYearField = validateEmptyTextField(
    graduateYear,
    "graduateYear"
  );

  let validateResultArr = [
    validateEmptycertificationield,
    validateEmptyschoolField,
    validateEmptycourseField,
    validateEmptygraduateYearField,
  ];

  if (validateResultArr.includes(false) != true) {
    var list = document.createElement("span");
    list.setAttribute("class", "badge rounded-pill bg-light ml-3");

    var certificationInput = document.createElement("input");
    certificationInput.setAttribute("type", "hidden");
    certificationInput.setAttribute("class", "certification");
    certificationInput.setAttribute("name", "certificationsArr[]");
    certificationInput.setAttribute("value", certification);

    var schoolInput = document.createElement("input");
    schoolInput.setAttribute("type", "hidden");
    schoolInput.setAttribute("class", "school");
    schoolInput.setAttribute("name", "schoolsArr[]");
    schoolInput.setAttribute("value", school);

    var courseInput = document.createElement("input");
    courseInput.setAttribute("type", "hidden");
    courseInput.setAttribute("class", "course");
    courseInput.setAttribute("name", "coursesArr[]");
    courseInput.setAttribute("value", course);

    var graduateYearInput = document.createElement("input");
    graduateYearInput.setAttribute("type", "hidden");
    graduateYearInput.setAttribute("class", "graduateYear");
    graduateYearInput.setAttribute("name", "graduateYearsArr[]");
    graduateYearInput.setAttribute("value", graduateYear);

    var remove = document.createElement("i");
    remove.setAttribute("class", "fas fa-times ml-1 btn-icon__remove");
    remove.setAttribute("onclick", "removePill(this)");

    var textValue = document.createTextNode(
      certification + " in " + course + " - " + school + ", " + graduateYear
    );

    list.appendChild(textValue);
    list.appendChild(certificationInput);
    list.appendChild(schoolInput);
    list.appendChild(courseInput);
    list.appendChild(graduateYearInput);
    list.appendChild(remove);

    document.getElementById("educationsContainer").appendChild(list);
  } else {
    return false;
  }
}

//add experience pills
function addExperiences() {
  var jobTitle = document.getElementById("jobTitle").value;
  var company = document.getElementById("company").value;
  var startYear = document.getElementById("startYear").value;
  var endYear = document.getElementById("endYear").value;

  var validateEmptyJobTitleField = validateEmptyTextField(jobTitle, "jobTitle");
  var validateEmptyCompanyField = validateEmptyTextField(company, "company");
  var validateEmptyStartYearField = validateEmptyTextField(
    startYear,
    "startYear"
  );
  var validateEmptyEndYearField = validateEmptyTextField(endYear, "endYear");

  let validateResultArr = [
    validateEmptyJobTitleField,
    validateEmptyCompanyField,
    validateEmptyStartYearField,
    validateEmptyEndYearField,
  ];

  if (validateResultArr.includes(false) != true) {
    var list = document.createElement("span");
    list.setAttribute("class", "badge rounded-pill bg-light ml-3");

    var jobTitleInput = document.createElement("input");
    jobTitleInput.setAttribute("type", "hidden");
    jobTitleInput.setAttribute("class", "jobTitle");
    jobTitleInput.setAttribute("name", "jobTitlesArr[]");
    jobTitleInput.setAttribute("value", jobTitle);

    var companyInput = document.createElement("input");
    companyInput.setAttribute("type", "hidden");
    companyInput.setAttribute("class", "company");
    companyInput.setAttribute("name", "companiesArr[]");
    companyInput.setAttribute("value", company);

    var startYearInput = document.createElement("input");
    startYearInput.setAttribute("type", "hidden");
    startYearInput.setAttribute("class", "startYear");
    startYearInput.setAttribute("name", "startYearsArr[]");
    startYearInput.setAttribute("value", startYear);

    var endYearInput = document.createElement("input");
    endYearInput.setAttribute("type", "hidden");
    endYearInput.setAttribute("class", "endYear");
    endYearInput.setAttribute("name", "endYearsArr[]");
    endYearInput.setAttribute("value", endYear);

    var remove = document.createElement("i");
    remove.setAttribute("class", "fas fa-times ml-1 btn-icon__remove");
    remove.setAttribute("onclick", "removePill(this)");

    var textValue = document.createTextNode(
        jobTitle + " at " + company + ", " + startYear + " - " + endYear
    );

    list.appendChild(textValue);
    list.appendChild(jobTitleInput);
    list.appendChild(companyInput);
    list.appendChild(startYearInput);
    list.appendChild(endYearInput);
    list.appendChild(remove);

    document.getElementById("experiencesContainer").appendChild(list);
  } else {
    return false;
  }
}
