<?php

class ForumQuestionView
{
    private Object $forumQuestion;

    public function __construct($forumQuestion) //remember to put type declaration in arguments
    {
        $this->forumQuestion = $forumQuestion;
        echo "forumQuestionsView initiated. forumQuestion object is stored";
        echo "<br>";
    }

    public function getForumId()
    {
        return $this->forumQuestion->getForumId();
    }

    public function getQuestion()
    {
        return $this->forumQuestion->getQuestion();
    }

    public function getQuestionVote()
    {
        return $this->forumQuestion->getQuestionVote();
    }

    public function getforumQuestion()
    {
        return $this->forumQuestion->getforumQuestion();
    }

    public function getAllForumQuestion()
    {
        return $this->forumQuestion->getAllForumQuestion();
    }
}
