const formApplicant = document.getElementById('formApplicant');
const formEmployer = document.getElementById('formEmployer');
const formCredential = document.getElementById('formCredential');
const formBiography = document.getElementById('formBiography');
const formSkills = document.getElementById('formSkills');
const formEducation = document.getElementById('formEducation');
const formExperience = document.getElementById('formExperience');

function nextForm(form1, form2) {
    form1.style.display = 'none';
    form2.style.display = 'initial';
    
}

function prevForm (form1, form2) {
    form1.style.display = 'none';
    form2.style.display = 'initial';
    
}

function validateEmptyTextField(fieldValue, fieldStr) {
    if (fieldValue == "") {
        alert(fieldStr + " must be filled out");
        return false;
      }
    return true;
}

function validateLengthTextField(fieldValue, fieldName ,min, max) {
    if ((fieldValue.length < min) || (fieldValue.length > max)) {
        alert(fieldName + " must be between " + min + " and " + max);
        return false;
    }
    return true;
}

function validateConfirmPassword(passwordValue, confirmPasswordValue) {
    if (passwordValue !== confirmPasswordValue) {
        alert('Password does not match');
        return false;
    }
    return true;
}

function validateEmail(emailValue) {
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(emailValue))
    {
      return (true)
    }
      alert("You have entered an invalid email address!")
      return (false)
}


function validateCredentials() {

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    
    var validateEmptyEmailField = validateEmptyTextField(email, 'Email');
    var validateEmailFormat = validateEmail(email);
    var validateEmptyPasswordField = validateEmptyTextField(password, 'Password');
    var validateEmptyConfirmPasswordField = validateEmptyTextField(confirmPassword, 'Confirm Password');
    var validatePasswordMatched = validateConfirmPassword(password,confirmPassword);

    let validateResultArr = [
        validateEmptyEmailField,
        validateEmailFormat,
        validateEmptyPasswordField,
        validateEmptyConfirmPasswordField,
        validatePasswordMatched
    ];

    if (validateResultArr.includes(false) != true) {
            return true;
    } else {
            return false;
    }
}


function validateApplicant() {
    const firstname = document.getElementById('firstname').value;
    const lastname = document.getElementById('lastname').value;
    // const gender = document.getElementByNames('gender').value;
    const birthday = document.getElementById('birthday').value;
    const country = document.getElementById('country').value;
    const city = document.getElementById('city').value;
    const job = document.getElementById('job').value;
    const company = document.getElementById('company').value;

    var validateEmptyFirstnameField = validateEmptyTextField(firstname, 'Firstname');
    var validateEmptyLastnameField = validateEmptyTextField(lastname, 'Lastname');
    var validateEmptyBirthdayField = validateEmptyTextField(birthday, 'Birthday');
    var validateEmptyCountryField = validateEmptyTextField(country, 'Country');
    var validateEmptyCityField = validateEmptyTextField(city, 'City');
    var validateEmptyJobField = validateEmptyTextField(job, 'Job');
    var validateEmptyCompanyField = validateEmptyTextField(company, 'Company');

    let validateResultArr = 
    [
        validateEmptyFirstnameField,
        validateEmptyLastnameField,
        validateEmptyBirthdayField,
        validateEmptyCountryField,
        validateEmptyCityField,
        validateEmptyJobField,
        validateEmptyCompanyField
    ];

    if (validateResultArr.includes(false) != true) {
        return true;
} else {
        return false;
}
}

function validateRegisterCredentials(form) {
    if (validateCredentials() == true) {
        nextForm(formCredential,formApplicant);
    } else {
        return false;
    }   
}

function validateRegisterApplicant() {
    if (validateApplicant() == true) {
        return true;
    } else {
        return false;
    }   
}
var cardContainerApplicant = document.getElementById('cardContainerApplicant');
