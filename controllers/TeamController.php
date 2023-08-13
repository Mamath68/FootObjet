<?php

namespace Controllers;

use Core\Session;
use Core\AbstractController;
use Core\ControllerInterface;

class WikiController extends AbstractController implements ControllerInterface
{

    public function index()
    {
        return [
            "view" => VIEW_DIR . "home.php",
        ];
    }
    public function findLigueOneTeams()
    {
        return [
            "view" => VIEW_DIR . "MonsterHunter/ContenuOfficiel/ContenuOfficiel.php",

        ];
    }
    public function findLigueOnePlayers()
    {
        return [
            "view" => VIEW_DIR . "MonsterHunter/ContenuOfficiel/ContenuOfficiel.php",

        ];
    }
    public function findLigueOneStaff()
    {
        return [
            "view" => VIEW_DIR . "MonsterHunter/ContenuOfficiel/ContenuOfficiel.php",

        ];
    }
    public function findLigueTwoTeams()
    {
        return [
            "view" => VIEW_DIR . "MonsterHunter/ContenuOfficiel/ContenuOfficiel.php",

        ];
    }
    public function findLigueTwoPlayers()
    {
        return [
            "view" => VIEW_DIR . "MonsterHunter/ContenuOfficiel/ContenuOfficiel.php",

        ];
    }
    public function findLigueTwoStaff()
    {
        return [
            "view" => VIEW_DIR . "MonsterHunter/ContenuOfficiel/ContenuOfficiel.php",

        ];
    }
    public function findNationalTeams()
    {
        return [
            "view" => VIEW_DIR . "MonsterHunter/ContenuOfficiel/ContenuOfficiel.php",

        ];
    }
    public function findNationalPlayers()
    {
        return [
            "view" => VIEW_DIR . "MonsterHunter/ContenuOfficiel/ContenuOfficiel.php",

        ];
    }
    public function findNationalStaff()
    {
        return [
            "view" => VIEW_DIR . "MonsterHunter/ContenuOfficiel/ContenuOfficiel.php",

        ];
    }
    public function findRegionalTeams()
    {
        return [
            "view" => VIEW_DIR . "MonsterHunter/ContenuOfficiel/ContenuOfficiel.php",

        ];
    }
    public function findRegionalPlayers()
    {
        return [
            "view" => VIEW_DIR . "MonsterHunter/ContenuOfficiel/ContenuOfficiel.php",

        ];
    }
    public function findRegionalStaff()
    {
        return [
            "view" => VIEW_DIR . "MonsterHunter/ContenuOfficiel/ContenuOfficiel.php",

        ];
    }

}