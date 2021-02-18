<?php

class ForumAnswerController
{
    private Object $forumAnswer;

    public function __construct($forumAnswer) //remember to put type declaration in arguments
    {
        $this->forumAnswer = $forumAnswer;
        echo "forumAnswersController initiated. forumAnswer object is stored";
        echo "<br>";
    }

    public function setAnswerId($answerId)
    {
        $this->forumAnswer->setAnswerId($answerId);
    }

    public function setQuestionId($questionId)
    {
        $this->forumAnswer->setQuestionId($questionId);
    }

    public function setAnswer($answer)
    {
        $this->forumAnswer->setAnswer($answer);
    }

    public function setAnswerVote($answerVote)
    {
        $this->forumAnswer->setAnswerVote($answerVote);
    }

    
    public function setforumAnswer(Object $forumAnswerObj)
    {
        $this->forumAnswer->setforumAnswer($forumAnswerObj);
    }

    public function setAllForumAnswer(Object $answerId)
    {
        $this->forumAnswer->setAllForumAnswer($answerId);
    }
}
