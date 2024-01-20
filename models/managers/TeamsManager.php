<?php

namespace Models\Managers;

use Core\Manager;
use Core\DAO;

class TeamsManager extends Manager
{

    protected $className = "Models\Entities\Teams";
    protected $tableName = "teams";

    public function __construct()
    {
        parent::connect();
    }

    public function findTeamsByDivision($id)
    {
        $sql = "SELECT t.id_teams, t.position, t.name, t.GamePlayed, t.Winn, t.Null, t.Loose, t.GoalFor, t.GoalAgainst, t.DiffGoal, t.Points, d.id_division
        FROM " . $this->tableName . " t
        INNER JOIN division d
        ON d.id_division = t.divison_id
        where d.id_division = :id
        ORDER BY t.position asc";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }

}