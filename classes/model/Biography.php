<?php

class Biography
{

    private int $id;
    private String $bio;

    private array $allBiographys;

    public function __construct() 
    {

        // echo "biographys is initiated";
        // echo "<br>";
    }

    public function setBiographyId($id)
    {
        $this->id = $id;
        // echo "biography id is set";
        // echo "<br>";
    }

    public function getBiographyId()
    {
        return $this->id;
    }
    public function setBiographyBio($bio)
    {
        $this->bio = $bio;
        // echo "biography bio is set";
        // echo "<br>";
    }

    public function getBiographyBio()
    {
        return $this->bio;
    }

    public function setBiography($bio, $id) //remember to put type declaration in arguments
    {
        $this->setBiographyId($id);
        $this->setBiographyBio($bio);

        // echo "biography attribute is set";
        // echo "<br>";
    }


    public function getBiography()
    {
        $biographyObj = new stdClass();
        $biographyObj->biographyId = $this->getBiographyId();
        $biographyObj->bio = $this->getBiographyBio();

        return $biographyObj;
        // echo "getBiography is run. returning data from DB";
        // echo "<br>";
    }

    public function setAllBiographys($allBiographys)
    {
        $this->allBiographys = $allBiographys;
        // echo "setAllBiographys data is set";
        // echo "<br>";
    }

    public function getAllBiographys()
    {
        $biographysAttr = new stdClass();
        $biographysAttr->id = $this->allBiographys[0];
        $biographysAttr->bio = $this->allBiographys[1];


        return $biographysAttr;
    }
}
