<?php
session_start();
class Controller
{
    
    public function registerApplicant($model, $modelArr) { //remember to put type declaration
        echo "controller initiated. registering user and applicants data";
        echo "<br>";

        $model->registerApplicant($modelArr);
       
        echo "user registered";
        echo "<br>";
    }

    public function registerEmployer($model, $modelArr) { //remember to put type declaration
        echo "controller initiated. registering user and employer data";
        echo "<br>";

        $model->registerEmployer($modelArr);
       
        echo "user registered";
        echo "<br>";
    }

    public function login($model, $user) {
       return $model->login($user);

    }

    public function createProfile($model, $modelArr) { //remember to put type declaration
        echo 'controller initiated. creating profile';
        echo '<br>';
        if ($_SESSION['role'] == 'applicant') {
            $model->createApplicantProfile($modelArr);
        } elseif ($_SESSION['role'] == 'employer') {
            $model->createEmployerProfile($modelArr);
        }
        
        echo 'profile created';
        echo '<br>';
    }

    public function postJob($model, $job) {
        $model->postJob($job);

        echo 'job created';
        echo '<br>';
    }
    
}