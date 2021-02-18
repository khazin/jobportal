<?php

class ForumAnswerView
{
    private Object $forumAnswer;

    public function __construct($forumAnswer) //remember to put type declaration in arguments
    {
        $this->forumAnswer = $forumAnswer;
        echo "forumAnswersView initiated. forumAnswer object is stored";
        echo "<br>";
    }

    public function getAnswerId()
    {
        return $this->forumAnswer->getAnswerId();
    }

    public function getQuestionId()
    {
        return $this->forumAnswer->getQuestionId();
    }

    public function getAnswer()
    {
        return $this->forumAnswer->getAnswer();
    }

    public function getAnswerVote()
    {
        return $this->forumAnswer->getAnswerVote();
    }

    
    public function getforumAnswer()
    {
        return $this->forumAnswer->getforumAnswer();
    }

    public function getAllForumAnswer()
    {
        return $this->forumAnswer->getAllForumAnswer();
    }
}
