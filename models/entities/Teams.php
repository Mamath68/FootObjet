<?php

namespace Models\Entities;

use Core\Entity;

final class Teams extends Entity
{

    private $id;
    private $position;
    private $name;
    private $GamePlayed;
    private $Winn;
    private $Null;
    private $Loose;
    private $GoalFor;
    private $GoalAgainst;
    private $DiffGoal;
    private $Points;

    public function __construct($data)
    {
        $this->hydrate($data);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getGamePlayed()
    {
        return $this->GamePlayed;
    }

    public function setGamePlayed($GamePlayed)
    {
        $this->GamePlayed = $GamePlayed;
    }

    public function getWinn()
    {
        return $this->Winn;
    }

    public function setWinn($Winn)
    {
        $this->Winn = $Winn;
    }
    public function getNull()
    {
        return $this->Null;
    }
    public function setNull($Null)
    {
        $this->Null = $Null;
    }

    public function getLoose()
    {
        return $this->Loose;
    }

    public function setLoose($Loose)
    {
        $this->Loose = $Loose;
    }
    public function getGoalFor()
    {
        return $this->GoalFor;
    }

    public function setGoalFor($GoalFor)
    {
        $this->GoalFor = $GoalFor;
    }

    public function getGoalAgainst()
    {
        return $this->GoalAgainst;
    }

    public function setGoalAgainst($GoalAgainst)
    {
        $this->GoalAgainst = $GoalAgainst;
    }

    public function getDiffGoal()
    {
        return $this->DiffGoal;
    }

    public function setDiffGoal($DiffGoal)
    {
        $this->DiffGoal = $DiffGoal;
    }

    public function getPoints()
    {
        return $this->Points;
    }

    public function setPoints($Points)
    {
        $this->Points = $Points;
    }

    public function __toString()
    {
        return $this->getId() . " " . $this->getPosition() . " " . $this->getName() . " " . $this->getGamePlayed() . " " . $this->getWinn() . " " . $this->getNull() . " " . $this->getLoose() . " " . $this->getGoalFor() . " " . $this->getGoalAgainst() . " " . $this->getDiffGoal() . " " . $this->getPoints();
    }
}