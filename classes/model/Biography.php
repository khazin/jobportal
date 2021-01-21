<?php

class Biography
{

    private int $id;
    private String $bio;

    public function __construct() //remember to put type declaration in arguments
    {

        echo "biographys is initiated";
        echo "<br>";
    }

    public function setBiographyId($id)
    {
        $this->id = $id;
        echo "biography id is set";
        echo "<br>";
    }

    public function getBiographyId()
    {
        return $this->id;
    }
    public function setBiographyBio($bio)
    {
        $this->bio = $bio;
        echo "biography bio is set";
        echo "<br>";
    }

    public function getBiographyBio()
    {
        return $this->bio;
    }

    public function setBiography($bio, $id) //remember to put type declaration in arguments
    {
        $this->setBiographyId($id);
        $this->setBiographyBio($bio);

        echo "biography attribute is set";
        echo "<br>";
    }


    public function getBiography()
    {
        $biographyObj = new stdClass();
        $biographyObj->biographyId = $this->getBiographyId();
        $biographyObj->bio = $this->getBiographyBio();

        return $biographyObj;
        echo "getBiography is run. returning data from DB";
        echo "<br>";
    }
}
