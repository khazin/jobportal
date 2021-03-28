<?php

class Message
{

    private int $msgSenderId;
    private int $msgReceiverId;
    private String $msg;
 
    private Object $allMessages;

    public function __construct()
    {
        // echo "Messages is initiated";
        // echo "<br>";
    }

    public function setMsgSenderId($msgSenderId)
    {
        $this->msgSenderId = $msgSenderId;
        // echo 'Message msgSenderId is set';
        // echo '<br>';
    }

    public function getMsgSenderId()
    {
        return $this->msgSenderId;
    }

    public function setMsgReceiverId($msgReceiverId)
    {
        $this->msgReceiverId = $msgReceiverId;
        // echo 'Message msgReceiverId is set';
        // echo '<br>';
    }

    public function getMsgReceiverId()
    {
        return $this->msgReceiverId;
    }

    
    public function setMsg($msg)
    {
        $this->msg = $msg;
        // echo 'Message msgReceiverId is set';
        // echo '<br>';
    }

    public function getMsg()
    {
        return $this->msg;
    }

    public function setMessage($msgSenderId, $msgReceiverId, $msg)
    { //remember to put type declaration in arguments

        $this->setMsgSenderId($msgSenderId);
        $this->setMsgReceiverId($msgReceiverId);
        $this->setMsg($msg);
   
        // echo "Message attribute is set";
        // echo "<br>";
    }

    public function getMessage()
    {

        $messageObj = new stdClass();
        $messageObj->msgSenderId = $this->getMsgSenderId();
        $messageObj->msgReceiverId = $this->getMsgReceiverId();
        $messageObj->msg = $this->getMsg();
    
        return $messageObj;

        // echo "getting Message attributes";
        // echo "<br>";
    }

    public function setAllMessages(Object $allMessages)
    {
        $this->allMessages = $allMessages;

        // echo "all Message attribute is set";
        // echo "<br>";
    }

    public function getAllMessages()
    {
        return $this->allMessages;
    }
}
