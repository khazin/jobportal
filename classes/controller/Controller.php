<?php
class Controller
{

    public function registerApplicant(object $model,object $modelObjs)
    { 

        $model->registerApplicant($modelObjs);
    }

    public function registerEmployer(object $model, object $modelObjs)
    { 

        return $model->registerEmployer($modelObjs);

       
    }

    public function login($model, $user)
    {
        return $model->login($user);
    }

    public function createApplicantProfile($model, $modelArr)
    {

        $model->createApplicantProfile($modelArr);

     
    }

    public function createEmployerProfile($model, $modelArr)
    { 

        $model->createEmployerProfile($modelArr);

      
    }
    public function postJob($model, $job)
    {
        return $model->postJob($job);
        
    }

    public function applyJob($model, $modelArr)
    {
        $model->applyJob($modelArr);
       
    }

    public function connectUser($model, $connection)
    {
        $model->connectUser($connection);
      
    }

    public function sendMessage(object $model, object $message)
    {
        return $model->sendMessage($message);
    
    }

    
    public function postQuestion(object $model, object $forumQuestion)
    {
        return $model->postQuestion($forumQuestion);
      
    }
    public function postAnswer(object $model, object $forumAnswer)
    {
        return $model->postAnswer($forumAnswer);
       
    }

    public function updateBiography(object $model,object $biography)
    {
        return $model->updateBiography($biography);
        
    }

    public function updateSkills($model, $skills)
    {
        return $model->updateSkills($skills);
       
    }

    public function updateEducation(object $model, object $education)
    {
        return $model->updateEducation($education);
   
    }

    public function updateExperience(object $model, object $experience)
    {
        return $model->updateExperience($experience);
        
    }
}
