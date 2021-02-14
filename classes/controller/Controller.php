<?php
class Controller
{

    public function registerApplicant($model, $modelArr)
    { //remember to put type declaration
        echo "controller initiated. registering user and applicants data";
        echo "<br>";

        $model->registerApplicant($modelArr);

        echo "user registered";
        echo "<br>";
    }

    public function registerEmployer($model, $modelArr)
    { //remember to put type declaration
        echo "controller initiated. registering user and employer data";
        echo "<br>";

        $model->registerEmployer($modelArr);

        echo "user registered";
        echo "<br>";
    }

    public function login($model, $user)
    {
        return $model->login($user);
    }

    public function createApplicantProfile($model, $modelArr)
    { //remember to put type declaration
        echo 'controller initiated. creating profile';
        echo '<br>';

        $model->createApplicantProfile($modelArr);

        echo 'applicant profile created';
        echo '<br>';
    }

    public function createEmployerProfile($model, $modelArr)
    { //remember to put type declaration
        echo 'controller initiated. creating profile';
        echo '<br>';

        $model->createEmployerProfile($modelArr);

        echo 'employer profile created';
        echo '<br>';
    }
    public function postJob($model, $job)
    {
        $model->postJob($job);
        echo 'job created';
        echo '<br>';
    }

    public function applyJob($model, $modelArr)
    {
        $model->applyJob($modelArr);
        echo 'job applied';
        echo '<br>';
    }

    public function connectUser($model, $connection)
    {
        $model->connectUser($connection);
        echo 'user connected';
        echo '<br>';
    }
}
