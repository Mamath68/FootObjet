<?php

namespace Models\Managers;

use Core\Manager;
use Core\DAO;

class DivisionManager extends Manager
{

    protected $className = "Models\Entities\Division";
    protected $tableName = "division";

    public function __construct()
    {
        parent::connect();
    }
}