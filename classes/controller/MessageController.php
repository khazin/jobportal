<?php

class MessageController
{
    public Object $message;

    public function __construct($message)//remember to put type declaration in arguments
    {
        $this->message = $message;
        // echo "messagecontroller initiated. Message object is stored";
        // echo "<br>";

    }

    public function setMsgSenderId($msgSenderId) {
        $this->message->setMsgSenderId($msgSenderId);
    }

    public function setMsgReceiverId($msgReceiverId) {
        $this->message->setMsgReceiverId($msgReceiverId);
    }
    
    public function setMsg($msg) {
        $this->message->setMsg($msg);
    }

    public function setMessage($msgSenderId, $msgReceiverId, $setMsg)
    { //remember to put type declaration in arguments
        $this->message->setMessage($msgSenderId, $msgReceiverId, $setMsg);
    }

    public function setAllMessages(Object $allMessages)
    {
        $this->message->setMessage($allMessages);
    }
}