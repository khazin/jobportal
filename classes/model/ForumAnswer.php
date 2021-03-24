<?php

class ForumAnswer
{

    private int $answerId;
    private int $questionId;
    private int $answerUserId;
    private String $answer;
    private int $answerVote;
 
    private Object $allForumAnswer;

    public function __construct()
    {
        // echo "forumQuestion is initiated";
        // echo "<br>";
    }

    public function setAnswerId($answerId)
    {
        $this->answerId = $answerId;
        // echo 'forumQuestion answerId is set';
        // echo '<br>';
    }

    public function getAnswerId()
    {
        return $this->answerId;
    }

    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;
        // echo 'forumanswer questionId is set';
        // echo '<br>';
    }

    public function getQuestionId()
    {
        return $this->questionId;
    }

    public function setAnswerUserId($answerUserId)
    {
        $this->answerUserId = $answerUserId;
        // echo 'forumanswer answerUserId is set';
        // echo '<br>';
    }

    public function getAnswerUserId()
    {
        return $this->answerUserId;
    }

    public function setAnswer($answer)
    {
        $this->answer = $answer;
        // echo 'forumanswer answer is set';
        // echo '<br>';
    }

    public function getAnswer()
    {
        return $this->answer;
    }

    
    public function setAnswerVote($answerVote)
    {
        $this->answerVote = $answerVote;
        // echo 'forumanswer answerVoteReceiverId is set';
        // echo '<br>';
    }

    public function getAnswerVote()
    {
        return $this->answerVote;
    }

    public function setforumAnswer(Object $forumAnswerObj)
    { //remember to put type declaration in arguments

        $this->setAnswerId($forumAnswerObj->answerId);
        $this->setQuestionId($forumAnswerObj->questionId);
        $this->setAnswerUserId($forumAnswerObj->answerUserId);
        $this->setAnswer($forumAnswerObj->answer);
        $this->setAnswerVote($forumAnswerObj->answerVote);
   
        // echo "forumAnswer attribute is set";
        // echo "<br>";
    }

    public function getforumAnswer()
    {

        $forumAnswerObj = new stdClass();
        $forumAnswerObj->answerId = $this->getAnswerId();
        $forumAnswerObj->questionId = $this->getQuestionId();
        $forumAnswerObj->answerUserId = $this->getAnswerUserId();
        $forumAnswerObj->answer = $this->getAnswer();
        $forumAnswerObj->answerVote = $this->getAnswerVote();
    
        return $forumAnswerObj;

        // echo "getting forumAnswerObj attributes";
        // echo "<br>";
    }

    public function setAllforumAnswer(Object $allForumAnswer)
    {
        $this->allForumAnswer = $allForumAnswer;

        // echo "all forumQuestion attribute is set";
        // echo "<br>";
    }

    public function getAllForumAnswer()
    {
        return $this->allForumAnswer;
    }
}
