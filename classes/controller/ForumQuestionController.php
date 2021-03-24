<?php

class ForumQuestionController
{
    private Object $forumQuestion;

    public function __construct($forumQuestion) //remember to put type declaration in arguments
    {
        $this->forumQuestion = $forumQuestion;
        // echo "forumQuestionsController initiated. forumQuestion object is stored";
        // echo "<br>";
    }

    public function setForumId($forumId)
    {
        $this->forumQuestion->setForumId($forumId);
    }

    public function setQuestionUserId($questionUserId)
    {
        $this->forumQuestion->setQuestionUserId($questionUserId);
    }

    public function setQuestion($question)
    {
        $this->forumQuestion->setQuestion($question);
    }

    public function setQuestionVote($questionVote)
    {
        $this->forumQuestion->setQuestionVote($questionVote);
    }

    public function setforumQuestion(Object $forumQuestionObj)
    {
        $this->forumQuestion->setforumQuestion($forumQuestionObj);
    }

    public function setAllForumQuestion(Object $allForumQuestion)
    {
        $this->forumQuestion->setAllForumQuestion($allForumQuestion);
    }
}
