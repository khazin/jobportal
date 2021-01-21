<?php

class BiographyView
{
    private Object $biography;
    
    public function __construct($biography)//remember to put type declaration in arguments
    {
        $this->biography = $biography;
        echo "biographysView initiated. biography object is stored";
        echo "<br>";
    }

    public function getBiographyId()
    {
        return $this->biography->getBiographyId();
    }

    public function getBiographyBio()
    {
        return $this->biography->getBiographyBio();
    }

    public function getBiography() {
        return $this->biography->getBiography();
    }

}

