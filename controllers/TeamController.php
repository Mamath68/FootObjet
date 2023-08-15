<?php

namespace Controllers;

use Core\Session;
use Core\AbstractController;
use Core\ControllerInterface;

class TeamController extends AbstractController implements ControllerInterface
{

    public function index()
    {
        return [
            "view" => VIEW_DIR . "home.php",
        ];
    }
    // Affiche les Equipes de ligue 1
    public function findLigueOneTeams()
    {
        return [
            "view" => VIEW_DIR . "Equipes/Ligue1/Ligue1.php",

        ];
    }
    // Affiche les l'equipe de ligue 1 Selectionné
    public function detailLigueOneTeams($id)
    {
        return [
            "view" => VIEW_DIR . "Equipes/Ligue1/DetailEquipes.php",

        ];
    }
    // Affiche les infos du joueurs choisis
    public function findLigueOnePlayers($id)
    {
        return [
            "view" => VIEW_DIR . "Equipes/Ligue1/DetailJoueurs.php",

        ];
    }
    // Affiche les infos du personnel du staff choisis
    public function findLigueOneStaff($id)
    {
        return [
            "view" => VIEW_DIR . "Equipes/Ligue1/DetailStaff.php",

        ];
    }
    // Ensuite ça se répète
    public function findLigueTwoTeams()
    {
        return [
            "view" => VIEW_DIR . "Equipes/Ligue2/Ligue2.php",

        ];
    }
    public function detailLigueTwoTeams($id)
    {
        return [
            "view" => VIEW_DIR . "Equipes/Ligue2/DetailEquipes.php",

        ];
    }
    public function findLigueTwoPlayers($id)
    {
        return [
            "view" => VIEW_DIR . "Equipes/Ligue2/DetailJoueurs.php",

        ];
    }
    public function findLigueTwoStaff($id)
    {
        return [
            "view" => VIEW_DIR . "Equipes/Ligue2/DetailStaff.php",

        ];
    }

    public function findNationalTeams()
    {
        return [
            "view" => VIEW_DIR . "Equipes/National/National1/National1.php",

        ];
    }
    public function detailNationalTeams($id)
    {
        return [
            "view" => VIEW_DIR . "Equipes/National/National1/DetailEquipes.php",

        ];
    }
    public function findNationalPlayers($id)
    {
        return [
            "view" => VIEW_DIR . "Equipes/National/National1/DetailJoueurs.php",

        ];
    }
    public function findNationalStaff($id)
    {
        return [
            "view" => VIEW_DIR . "Equipes/National/National1/DetailStaff.php",

        ];
    }
    public function findNationalTwoTeams()
    {
        return [
            "view" => VIEW_DIR . "Equipes/National/National2/National2.php",

        ];
    }
    public function detailNationalTwoTeams($id)
    {
        return [
            "view" => VIEW_DIR . "Equipes/National/National2/DetailEquipes.php",

        ];
    }
    public function findNationalTwoPlayers($id)
    {
        return [
            "view" => VIEW_DIR . "Equipes/National/National2/DetailJoueurs.php",

        ];
    }
    public function findNationalTwoStaff($id)
    {
        return [
            "view" => VIEW_DIR . "Equipes/National/National2/DetailStaff.php",

        ];
    }
    public function findNationalThreeTeams()
    {
        return [
            "view" => VIEW_DIR . "Equipes/National/National3/National3.php",

        ];
    }
    public function detailNationalThreeTeams($id)
    {
        return [
            "view" => VIEW_DIR . "Equipes/National/National3/DetailEquipes.php",

        ];
    }
    public function findNationalThreePlayers($id)
    {
        return [
            "view" => VIEW_DIR . "Equipes/National/National3/DetailJoueurs.php",

        ];
    }
    public function findNationalThreeStaff($id)
    {
        return [
            "view" => VIEW_DIR . "Equipes/National/National3/DetailStaff.php",

        ];
    }

}