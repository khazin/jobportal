<?php

class MessageView
{
    private Object $message;

    public function __construct($message) //remember to put type declaration in arguments
    {
        $this->message = $message;
        echo "MessagesView initiated. Message object is stored";
        echo "<br>";
    }

    public function getMsgSenderId()
    {
        return $this->message->getMsgSenderId();
    }

    public function getMsgReceiverId()
    {
        return $this->message->getMsgReceiverId();
    }

    public function getMsg()
    {
        return $this->message->getMsg();
    }

    public function getMessage()
    {
        return $this->message->getMessage();
    }
}
