<?php



// function myAutoloader($className){
//     $url = $_SERVER['DOCUMENT_ROOT'];

//     if (file_exists($_SERVER['HTTP_HOST'].'/jobportal/classes/model/'.$className.'.php')) {
//         require_once $_SERVER['HTTP_HOST'] . '/jobportal/classes/model/' . $className . '.php';
    
//     } elseif (file_exists($_SERVER['HTTP_HOST'].'/jobportal/classes/view/'.$className.'.php')) {
//         require_once $_SERVER['HTTP_HOST'] . '/jobportal/classes/view/' . $className . '.php';
    
//     } elseif (file_exists($_SERVER['HTTP_HOST'].'/jobportal/classes/controller/'.$className.'.php')) {
//         require_once $_SERVER['HTTP_HOST'] . '/jobportal/classes/controller/' . $className . '.php';
//     }

//     require_once $url . '/jobportal/classes/view/' . $className . '.php';

// }
// spl_autoload_register('myAutoloader');

//model
include './classes/model/DB.php';
include './classes/model/Model.php';
include './classes/model/Users.php';
include './classes/model/Applicants.php';
include './classes/model/Employer.php';
include './classes/model/Biography.php';
include './classes/model/Skills.php';
include './classes/model/Education.php';
include './classes/model/Experience.php';
include './classes/model/Job.php';
include './classes/model/Connection.php';
include './classes/model/Message.php';
include './classes/model/ForumQuestion.php';
include './classes/model/ForumAnswer.php';

//view
include './classes/view/View.php';
include './classes/view/UsersView.php';
include './classes/view/ApplicantsView.php';
include './classes/view/EmployerView.php';
include './classes/view/BiographyView.php';
include './classes/view/SkillsView.php';
include './classes/view/EducationView.php';
include './classes/view/ExperienceView.php';
include './classes/view/ConnectionView.php';
include './classes/view/JobView.php';
include './classes/view/ForumQuestionView.php';
include './classes/view/ForumAnswerView.php';
include './classes/view/MessageView.php';

//controller
include './classes/controller/UsersController.php';
include './classes/controller/ApplicantsController.php';
include './classes/controller/EmployerController.php';
include './classes/controller/BiographyController.php';
include './classes/controller/SkillsController.php';
include './classes/controller/EducationController.php';
include './classes/controller/ExperienceController.php';
include './classes/controller/JobController.php';
include './classes/controller/ConnectionController.php';
include './classes/controller/MessageController.php';
include './classes/controller/ForumQuestionController.php';
include './classes/controller/ForumAnswerController.php';
include './classes/controller/Controller.php';