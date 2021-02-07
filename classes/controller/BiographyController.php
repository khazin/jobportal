<?php

class BiographyController
{
    public Object $biography;

    public function __construct($biography)//remember to put type declaration in arguments
    {
        $this->biography = $biography;
        echo "biographycontroller initiated. biography object is stored";
        echo "<br>";

    }

    public function setBiographyId($id)
    {
        $this->biography->setBiographyId($id);
  
    }

    public function setBiographyBio($bio)
    {
        $this->biography->setBiographyBio($bio);
    }

    public function setBiography($bio, $id) {
        $this->biography->setBiography($bio, $id);
    }
    public function setAllBiographys($allBiographys)
    {
        $this->biography->setAllBiographys($allBiographys);
    }

}