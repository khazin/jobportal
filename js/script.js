var formApplicant = document.getElementById('formApplicant');
var formCredential = document.getElementById('formCredential');
var formBiography = document.getElementById('formBiography');
var formSkills = document.getElementById('formSkills');
var formEducation = document.getElementById('formEducation');
var formExperience = document.getElementById('formExperience');

function nextForm(form1, form2) {
    form1.style.display = 'none';
    form2.style.display = 'initial';
    
}

function prevForm (form1, form2) {
    form1.style.display = 'none';
    form2.style.display = 'initial';
    
}

function validateApplicant() {
    
}

var cardContainerApplicant = document.getElementById('cardContainerApplicant');
