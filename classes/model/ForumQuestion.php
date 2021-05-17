<?php

class ForumQuestion
{

    private int $forumId;
    private int $questionUserId;
    private String $question;
    private int $questionVote;
 
    private Object $allForumQuestion;

    public function __construct()
    {
        // echo "forumQuestion is initiated";
        // echo "<br>";
    }

    public function setForumId(int $forumId)
    {
        $this->forumId = $forumId;
        // echo 'forumQuestion forumId is set';
        // echo '<br>';
    }

    public function getForumId()
    {
        return $this->forumId;
    }

    public function setQuestionUserId(int $questionUserId)
    {
        $this->questionUserId = $questionUserId;
        // echo 'forumquestionUserId question is set';
        // echo '<br>';
    }

    public function getQuestionUserId()
    {
        return $this->questionUserId;
    }
    
    public function setQuestion(String $question)
    {
        $this->question = $question;
        // echo 'forumQuestion question is set';
        // echo '<br>';
    }

    public function getQuestion()
    {
        return $this->question;
    }
    
    public function setQuestionVote(int $questionVote)
    {
        $this->questionVote = $questionVote;
        // echo 'forumQuestion questionVoteReceiverId is set';
        // echo '<br>';
    }

    public function getQuestionVote()
    {
        return $this->questionVote;
    }

    public function setforumQuestion(Object $forumQuestionObj)
    { //remember to put type declaration in arguments

        $this->setForumId($forumQuestionObj->forumId);
        $this->setQuestionUserId($forumQuestionObj->questionUserId);
        $this->setQuestion($forumQuestionObj->question);
        $this->setQuestionVote($forumQuestionObj->questionVote);
   
        // echo "forumQuestion attribute is set";
        // echo "<br>";
    }

    public function getforumQuestion()
    {

        $forumQuestionObj = new stdClass();
        $forumQuestionObj->forumId = $this->getForumId();
        $forumQuestionObj->questionUserId = $this->getQuestionUserId();
        $forumQuestionObj->question = $this->getQuestion();
        $forumQuestionObj->questionVote = $this->getQuestionVote();
    
        return $forumQuestionObj;

        // echo "getting forumQuestion attributes";
        // echo "<br>";
    }

    public function setAllforumQuestion(Object $allForumQuestion)
    {
        $this->allForumQuestion = $allForumQuestion;

        // echo "all forumQuestion attribute is set";
        // echo "<br>";
    }

    public function getAllforumQuestion()
    {
        return $this->allForumQuestion;
    }
}
