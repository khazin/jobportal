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

        return $model->registerEmployer($modelArr);

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
        return $model->postJob($job);
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

    public function sendMessage($model, $message)
    {
        return $model->sendMessage($message);
        echo 'message sent';
        echo '<br>';
    }

    
    public function postQuestion($model, $forumQuestion)
    {
        return $model->postQuestion($forumQuestion);
        echo 'question posted';
        echo '<br>';
    }
    public function postAnswer($model, $forumAnswer)
    {
        return $model->postAnswer($forumAnswer);
        echo 'answer posted';
        echo '<br>';
    }

    public function updateBiography($model, $biography)
    {
        return $model->updateBiography($biography);
        echo 'biography updated';
        echo '<br>';
    }

    public function updateSkills($model, $skills)
    {
        return $model->updateSkills($skills);
        echo 'skills updated';
        echo '<br>';
    }

    public function updateEducation($model, $education)
    {
        return $model->updateEducation($education);
        echo 'education updated';
        echo '<br>';
    }
}
