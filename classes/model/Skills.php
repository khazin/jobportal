<?php

class Skills
{

    private int $id;
    private array $skills;

    public function __construct()
    {
    }

    public function setSkillsId($id)
    {
        $this->id = $id;
        // echo "Skills id is set.";
        // echo "<br>";
    }

    public function getSkillsId()
    {
        return $this->id;
    }

    public function setSkillsSkills($skills)
    {
        $this->skills = $skills;
        // echo "Skills skills is set.";
        // echo "<br>";
    }

    public function getSkillsSkills()
    {
        return $this->skills;
    }

    public function setSkills($skillsArr, $id)
    { //remember to put type declaration in arguments

        $this->setSkillsId($id);
        $this->setSkillsSkills($skillsArr);

        // echo "Skills is set.";
        // echo "<br>";
    }


    public function getSkills()
    {

        $skillsAttr = new stdClass();
        $skillsAttr->id = $this->getSkillsId();
        $skillsAttr->skills = $this->getSkillsSkills();

        return $skillsAttr;

        // echo "getSkills is run. returning data from DB";
        // echo "<br>";
    }
}
